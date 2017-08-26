<?php

define('KINT_DIR', dirname(__FILE__) . '/');
require KINT_DIR . 'config.php';

class Kint
{
    public static $pathDisplayCallback;
    public static $maxStrLength;
    public static $maxLevels;
    public static $enabled;
    public static $skin;

    const VERSION = '0.12';
    private static $_isAjax = NULL;
    private static $_firstRun = TRUE;
    private static $_collapsed;

    /**
     * getter/setter for the enabled parameter, called at the beginning of every public function as getter, also
     * initializes the settings if te first time it's run.
     *
     * @static
     * @param null $value
     * @return Kint
     */

    public function init()
    {

        /**
         * Alias of {@link kint::dump()}
         *
         * @param mixed $data,...
         *
         * @see kint::dump()
         */
        if (!function_exists('d')) {
            function d()
            {
                $argv = func_get_args();
                call_user_func_array(array('Kint', 'dump'), $argv);
            }

            function dd()
            {
                $argv = func_get_args();
                call_user_func_array(array('Kint', 'dump'), $argv);
                die;

            }
        }

        if (!function_exists('s')) {
            function s()
            {
                if (!Kint::$enabled) return;

                $argv = func_get_args();
                echo '<pre>';
                foreach ($argv as $k => $v) {
                    $k && print("\n\n");
                    echo htmlentities(print_r($v, TRUE));
                }
                echo '</pre>';
            }

            function sd()
            {
                if (!Kint::$enabled) return;

                echo '<pre>';
                foreach (func_get_args() as $k => $v) {
                    $k && print("\n\n");
                    echo htmlentities(print_r($v, TRUE));
                }
                echo '</pre>';
                die;

            }

        }
    }

    public static function enabled($value = NULL)
    {
        // act both as a setter...
        if (func_num_args() > 0) {
            self::$enabled = $value;
            return;
        }

        // init settings if needed


        if (isset($GLOBALS['_kint_settings'])) {
            $defaults = array(
                'pathDisplayCallback' => "kint::_debugPath",
                'maxStrLength' => 60,
                'maxLevels' => 5,
                'enabled' => TRUE,
                'skin' => 'kint.css',
            );

            $settings = $GLOBALS['_kint_settings'];
            unset($GLOBALS['_kint_settings']);

            foreach ($defaults as $key => $val) {
                if (array_key_exists($key, $settings)) {
                    self::$$key = $settings[$key];
                } else {
                    self::$$key = $val;
                }
            }
        }

        // ...and a getter
        return self::$enabled;

    }

    /**
     * Prints a debug backtrace
     * @static
     * @return void
     */
    public static function trace($trace = NULL)
    {
        if (!Kint::enabled()) return;


        self::_css();
        isset($trace) or $trace = debug_backtrace();

        // Non-standard function calls
        $statements = array('include', 'include_once', 'require', 'require_once');

        $output = array();
        foreach ($trace as $step)
        {
            if (!isset($step['function'])) {
                // Invalid trace step
                continue;
            }

            if (isset($step['file']) AND isset($step['line'])) {
                // Include the source of this step
                $source = self::_debugSource($step['file'], $step['line']);
            }

            if (isset($step['file'])) {
                $file = $step['file'];

                if (isset($step['line'])) {
                    $line = $step['line'];
                }
            }

            // function()
            $function = $step['function'];

            if (in_array($step['function'], $statements)) {
                if (empty($step['args'])) {
                    // No arguments
                    $args = array();
                } else {
                    // Sanitize the file path
                    $args = array(self::_debugPath($step['args'][0]));
                }
            }
            elseif (isset($step['args']))
            {
                if (!function_exists($step['function']) OR strpos($step['function'], '{closure}') !== FALSE) {
                    // Introspection on closures or language constructs in a stack trace is impossible
                    $params = NULL;
                } else {
                    if (isset($step['class'])) {
                        if (method_exists($step['class'], $step['function'])) {
                            $reflection = new ReflectionMethod($step['class'], $step['function']);
                        } else {
                            $reflection = new ReflectionMethod($step['class'], '__call');
                        }
                    } else {
                        $reflection = new ReflectionFunction($step['function']);
                    }

                    // Get the function parameters
                    $params = $reflection->getParameters();
                }

                $args = array();

                foreach ($step['args'] as $i => $arg)
                {
                    if (isset($params[$i])) {
                        // Assign the argument by the parameter name
                        $args[$params[$i]->name] = $arg;
                    } else {
                        // Assign the argument by number
                        $args[$i] = $arg;
                    }
                }
            }

            if (isset($step['class'])) {
                // Class->method() or Class::method()
                $function = $step['class'] . $step['type'] . $step['function'];
            }

            $output[] = array(
                'function' => $function,
                'args' => isset($args) ? $args : NULL,
                'file' => isset($file) ? $file : NULL,
                'line' => isset($line) ? $line : NULL,
                'source' => isset($source) ? $source : NULL,
            );

            unset($function, $args, $file, $line, $source);
        }

        include KINT_DIR . 'view/trace.phtml';
    }

    /**
     * Dump information about a variable
     *
     * @param mixed $data,...
     * @access public
     * @static
     */
    public static function dump()
    {
        if (!Kint::enabled()) return;


        // decide what action to take baset on parameter count
        if (func_num_args() === 0) {

            // todo if no arguments were provided, dump the whole environment
            // self::env(); // todo
            return;
        }

        // find caller information
        $prevCaller = array();
        $trace = debug_backtrace();
        while ($callee = array_pop($trace)) {
            if (strtolower($callee['function']) === 'd' ||
                strtolower($callee['function']) === 'dd' ||
                isset($callee['class']) && strtolower($callee['class']) === strtolower(__CLASS__)
            ) {
                break;
            } else {
                $prevCaller = $callee;
            }
        }


        list($names, $modifier) = self::_getPassedNames($callee, '');

        // catches !, + and -
        switch ($modifier) {
            case '-':
                self::$_firstRun = TRUE;
                ob_clean();
                break;
            case '+': // todo revert after dumping
                self::$maxLevels = FALSE;
                break;
        }

        self::_css();
        echo self::_wrapStart();
        foreach (func_get_args() as $k => $argument) {
            $dump = self::_dump($argument);
            list($class, $plus) = self::_collapsed();
            echo "<dl><dt{$class}>{$plus}" . (!empty($names[$k]) ? "<dfn>{$names[$k]}</dfn> " : "") . "{$dump}</dl>";
        }
        echo self::_wrapEnd($callee, $prevCaller);

        self::$_firstRun = FALSE;


        //todo add ability to echo just prettily formatted code without html
        //if ( self::_isAjax() ) {
        //	echo "\n\n" . strip_tags( $dump );
        //}

    }


    /**
     * div.kint - root of one call to function
     * dl - root of one element
     * dt - short info, may be expandable if followed by dd
     * dd - collapsed infrmation about a variable
     * pre - whole string output
     * var - element name
     * dfn - elemnt type
     * span - element size
     * div.root>ul>li:last - version and callee info
     */
    private static function _dump(&$var, $level = 0, $name = NULL)
    {

        // initialize function names into variables for prettier string output (html and implode are also DRY)
        $html = "_kint_html";
        $implode = "_kint_implode";
        $strlen = "strlen";
        $count = "count";
        $getClass = "get_class";


        if ($var === NULL) {
            return '<var>NULL</var>';
        } elseif (is_bool($var))
        {
            return '<var>bool</var> ' . ($var ? 'TRUE' : 'FALSE');
        }
        elseif (is_float($var))
        {
            return '<var>float</var> ' . $var;
        }
        elseif (is_resource($var))
        {
            if (($type = get_resource_type($var)) === 'stream' AND $meta = stream_get_meta_data($var)) {

                if (isset($meta['uri'])) {
                    $file = $meta['uri'];

                    if (function_exists('stream_is_local')) {
                        // Only exists on PHP >= 5.2.4
                        if (stream_is_local($file)) {
                            $file = call_user_func(self::$pathDisplayCallback, $file);
                        }
                    }

                    return "<var>resource</var><span> ({$type})</span> {$html($file)}";
                }
            }
            else
            {
                return "<var>resource</var><span> ({$type})</span>";
            }
        }
        elseif (is_string($var))
        {
            if (strlen($var) > self::$maxStrLength) {

                // encode and truncate
                $str = htmlspecialchars(substr(self::_stripWhitespace($var), 0, self::$maxStrLength), ENT_NOQUOTES) . ''; // todo strip whitespace beforehand

                self::_collapsed(TRUE);
                return "<var>string</var> ({$strlen($var)}) \"{$str}&nbsp;&hellip;\"</dt><dd><pre>{$html($var)}</pre></dd>";
            }
            else
            {

                $str = htmlspecialchars($var, ENT_NOQUOTES);
                return "<var>string</var>({$strlen($var)}) \"{$str}\"";
            }
        }
        elseif (is_array($var))
        {
            $output = array();

            static $marker;

            if ($marker === NULL) {
                // Make a unique marker
                $marker = uniqid("\x00");
            }

            if (empty($var)) {
                return "<var>array</var><span>(0)</span>";
            }
            elseif (isset($var[$marker]))
            {
                $output[] = "<dt>(*RECURSION*)</dt>";
            }
            elseif ((self::$maxLevels === 0) || $level < self::$maxLevels)
            {
                $isSeq = self::_isSequential($var);


                $var[$marker] = TRUE;


                foreach ($var as $key => & $val)
                {
                    if ($key === $marker) continue;

                    $key = $isSeq ? "" : "'<dfn>{$html($key)}</dfn>' =>";


                    $dump = self::_dump($val, $level + 1);

                    list($class, $plus) = self::_collapsed();
                    $output[] = "<dt{$class}>{$plus}{$key} {$dump}";
                }

                unset($var[$marker]);
            }
            else
            {
                $output[] = "<dt>(depth too great)</dt>";
            }

            self::_collapsed(TRUE);
            return "<var>array</var> <span>({$count($var)})</span><dd><dl>{$implode($output)}</dl></dd>";
        }
        elseif (is_object($var))
        {
            // Copy the object as an array
            $array = (array)$var;

            $output = array();


            $hash = spl_object_hash($var);

            // Objects that are being dumped
            static $objects = array();

            if (empty($array)) {
                return "<var>object {$getClass($var)} </var><span>{0}</span>";
            }
            elseif (isset($objects[$hash]))
            {
                $output[] = "<dt>{*RECURSION*}</dt>";
            }
            elseif ((self::$maxLevels === 0) || $level < self::$maxLevels)
            {
                $objects[$hash] = TRUE;
                foreach ($array as $key => & $val)
                {
                    if ($key[0] === "\x00") {

                        $access = "<var>" . ($key[1] === "*" ? "protected" : "private") . "</var>";

                        // Remove the access level from the variable name
                        $key = substr($key, strrpos($key, "\x00") + 1);
                    }
                    else
                    {
                        $access = "<var>public</var>";
                    }
                    $dump = self::_dump($val, $level + 1);
                    list($class, $plus) = self::_collapsed();

                    $output[] = "<dt{$class}>{$plus}{$access} '<dfn>{$key}</dfn>' -> {$dump}";
                }
                unset($objects[$hash]);

            }
            else
            {
                // Depth too great
                $output[] = "<dt>{depth too great}</dt>";
            }

            self::_collapsed(TRUE);
            return "<var>object {$getClass($var)}</var> <span>{{$count($array)}}</span><dd><dl>{$implode($output)}</dl></dd>";
        }
        else // should never happen
        {
            return '<var>' . gettype($var) . '</var> ' . htmlspecialchars(print_r($var, TRUE), ENT_NOQUOTES);
        }
    }

    private static function _css()
    {
        if (!self::$_firstRun) return;
        self::$_firstRun = FALSE;

        echo '<script>';
        include KINT_DIR . 'view/kint.js';
        echo '</script>';

        echo '<style>';
        include KINT_DIR . 'view/' . self::$skin;
        echo '</style>';

    }


    private static function _isAjax()
    {
        if (self::$_isAjax === NULL) {
            self::$_isAjax =
                    (isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
                     strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest');
        }

        return self::$_isAjax;
    }

    private static function _debugPath($file, $line = NULL)
    {
        if (!$line) { // called from resource dump
            return $file;
        }
        return "<u>" . $file . "</u> line <i>{$line}</i>";
    }

    /**
     * returns whether the array is numeric and in sequence starting from zero (that means indices are not important)
     * @static
     * @param  $array
     * @return bool
     */
    private static function _isSequential(array $array)
    {
        return array_keys($array) === range(0, count($array) - 1);
    }

    private static function _debugSource($file, $line_number, $padding = 7)
    {
        if (!$file OR !is_readable($file)) {
            // Continuing will cause errors
            return FALSE;
        }

        // Open the file and set the line position
        $file = fopen($file, 'r');
        $line = 0;

        // Set the reading range
        $range = array('start' => $line_number - $padding, 'end' => $line_number + $padding);

        // Set the zero-padding amount for line numbers
        $format = '% ' . strlen($range['end']) . 'd';

        $source = '';
        while (($row = fgets($file)) !== FALSE)
        {
            // Increment the line number
            if (++$line > $range['end'])
                break;

            if ($line >= $range['start']) {
                // Make the row safe for output
                $row = htmlspecialchars($row, ENT_NOQUOTES);

                // Trim whitespace and sanitize the row
                $row = '<span>' . sprintf($format, $line) . '</span> ' . $row;

                if ($line === $line_number) {
                    // Apply highlighting to this row
                    $row = '<div class="kint-highlight">' . $row . '</div>';
                }
                else
                {
                    $row = '<div>' . $row . '</div>';
                }

                // Add to the captured source
                $source .= $row;
            }
        }

        // Close the file
        fclose($file);

        return '<pre class="source">' . $source . '</pre>';
    }

    /**
     * called with TRUE when a dumped variable wants to be displayed collapsed, called each time
     * w/o parameters before displaying a variable - basicly a method to comunicate with the callee
     *
     * @static
     * @param bool $bool
     * @return string
     */
    private static function _collapsed($bool = FALSE, $extraClass = '')
    {
        $class = '';
        $element = '';
        if (self::$_collapsed) {

            $element = '<div class="kint-plus"></div>';
            $class = ' class="kint-parent"';
        }
        self::$_collapsed = $bool;

        return array($class, $element);
    }

    private static function _wrapStart()
    {
        return "<div class=\"kint\">";
        //return self::_isAjax( ) ? '' : "<div class=\"kint\">\n";
    }

    private static function _wrapEnd($callee, $prevCaller)
    {
        //if ( self::_isAjax() ) {
        //	return "Called from " . call_user_func( self::$pathDisplayCallback, $callee['file'], $callee['line'] ) . "\n";
        //}

        $callingFunction = '';
        if (isset($prevCaller['class'])) {
            $callingFunction = $prevCaller['class'];
        }
        if (isset($prevCaller['type'])) {
            $callingFunction .= $prevCaller['type'];
        }
        if (isset($prevCaller['function'])) {
            $callingFunction .= $prevCaller['function'] . '()';
        }
        $callingFunction and $callingFunction = " in ({$callingFunction})";


        $calleeInfo = isset($callee['file'])
                ? 'Called from ' . call_user_func(self::$pathDisplayCallback, $callee['file'], $callee['line']) . $callingFunction
                : '';


        return "<span>{$calleeInfo}</span></div>";
    }

    private static function _getPassedNames($callee, $defaultName = 'literal')
    {
        if (!$callee['file'] || !is_readable($callee['file'])) {
            return FALSE;
        }

        // open the file and read it up to the position where the function call expression ended
        $file = fopen($callee['file'], 'r');
        $line = 0;
        $source = '';
        while (($row = fgets($file)) !== FALSE)
        {
            if (++$line > $callee['line']) break;
            $source .= $row;
        }
        fclose($file);
        $source = self::_removePhpComments($source);
        $source = str_replace(array("\r", "\n"), ' ', $source);

        // get the position of the last call to the function
        preg_match_all("#[\\s:](\\+|-|!)?{$callee['function']}\\s*(\\()#i", $source, $matches, PREG_OFFSET_CAPTURE);
        $match = end($matches[2]);
        $modifier = end($matches[1]);
        $modifier = $modifier[0];


        $passedParameters = substr($source, $match[1] + 1);
        // we now have a string like this:
        // <parameters passed>); <the rest of the last read line>


        // remove everything in brackets and quotes, we don't need nested statements nor literal strings which would
        // only complicate separating individual arguments
        $c = strlen($passedParameters);
        $inString = $escaped = FALSE;
        $i = 0;
        $inBrackets = 0;
        while ($i < $c) {
            $letter = $passedParameters[$i];
            if ($inString === FALSE) {
                if ($letter === '\'' || $letter === '"') {
                    $inString = $letter;
                } elseif ($letter === '(') {
                    $inBrackets++;
                } elseif ($letter === ')') {
                    $inBrackets--;
                    if ($inBrackets === -1) { //this means we are out of the brackets that denote passed parameters
                        $passedParameters = substr($passedParameters, 0, $i);
                        break;
                    }
                }
            } elseif ($letter === $inString && !$escaped) {
                $inString = FALSE;
            }

            // place an untype-able character instead of whatever was inside quotes or brackets, we don't
            // need that info. We'll later replace it with '...'
            if ($inBrackets > 0) {
                if ($inBrackets > 1 || $letter !== '(') {
                    $passedParameters[$i] = "\x07";
                }
            }
            if ($inString !== FALSE) {
                if ($letter !== $inString || $escaped) {
                    $passedParameters[$i] = "\x07";
                }
            }

            $escaped = ($letter === '\\');
            $i++;
        }

        // by now we have an unnested arguments list, lets make it to an array for processing further
        $_ = explode(',', preg_replace("#\x07+#", '...', $passedParameters));

        // test each argument whether it was passed literrary or was it an expression or a variable name
        $expressions = array();
        foreach ($_ as $argument) {
            if (strpos($argument, '$') !== FALSE ||
                strpos($argument, 'new') !== FALSE ||
                strpos($argument, '=') !== FALSE ||
                (strpos($argument, '(') !== FALSE && !preg_match('#\s*array\s*#', $argument))
            ) {
                $expressions[] = trim($argument);
            }
            else
            {
                $expressions[] = $defaultName;
            }

        }

        return array($expressions, $modifier);
    }

    /**
     * as advertised :)
     *
     * @static
     * @param  $passedParameters
     * @return string
     */
    private static function _removePhpComments($passedParameters)
    {
        $newStr = '';
        $tokens = token_get_all($passedParameters);

        $commentTokens = array(T_COMMENT);
        if (defined('T_DOC_COMMENT')) {
            $commentTokens[] = constant('T_DOC_COMMENT');
        }
        if (defined('T_ML_COMMENT')) {
            $commentTokens[] = constant('T_ML_COMMENT');
        }

        foreach ($tokens as $token) {
            if (is_array($token)) {
                if (in_array($token[0], $commentTokens)) continue;

                $token = $token[1];
            }

            $newStr .= $token;
        }
        return $newStr;

    }

    private static function _stripWhitespace($string)
    {
        $search = array(
            '#[ \t]+[\r\n]#' => "", // leading whitespace after line end
            '#[\n\r]+#' => "\n", // multiple newlines
            '# {2,}#' => " ", // multiple spaces
            '#\t{2,}#' => "\t", // multiple tabs
            '#\t | \t#' => "\t", // tabs and spaces together
        );
        return preg_replace(array_keys($search), $search, trim($string));
    }

}


// private helper functions
function _kint_implode($variable)
{
    return implode("", $variable);
}

function _kint_html($variable)
{
    return htmlspecialchars($variable, ENT_NOQUOTES);
}