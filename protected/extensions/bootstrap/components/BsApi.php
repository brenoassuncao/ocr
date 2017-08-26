<?php
/**
 * User: Pascal Brewing
 * Date: 11.09.13
 * Time: 10:59
 * @package bootstrap.components
 * Class BsApi
 */
 
class BsApi extends CComponent
{
    
    // Bootstrap plugins
    const PLUGIN_AFFIX = 'affix';
    const PLUGIN_ALERT = 'alert';
    const PLUGIN_BUTTON = 'button';
    const PLUGIN_CAROUSEL = 'carousel';
    const PLUGIN_COLLAPSE = 'collapse';
    const PLUGIN_DROPDOWN = 'dropdown';
    const PLUGIN_MODAL = 'modal';
    const PLUGIN_POPOVER = 'popover';
    const PLUGIN_SCROLLSPY = 'scrollspy';
    const PLUGIN_TAB = 'tab';
    const PLUGIN_TOOLTIP = 'tooltip';
    const PLUGIN_TRANSITION = 'transition';
    const PLUGIN_TYPEAHEAD = 'typeahead';
    
    /**
    * @var int static counter, used for determining script identifiers
    */
    public static $counter = 0;
    /**
     * @var array $assetsJs of javascript library names to be registered when initializing the library.
     */
    public $assetsJs = array();
    /**
     * @var array $assetsCss of style library names to be registered when initializing the library.
     */
    public $assetsCss = array();
    /**
     * @var string holds the published assets
     */
    protected $_assetsUrl;

    /**
     * Widget's initialization
     */
    public function init()
    {
        /* ensure all widgets - plugins are accessible to the library */
        Yii::import('bootstrap.widgets.*');

        /* register css assets */
        foreach ($this->assetsCss as $css) {
            $this->registerAssetCss($css);
        }
        /* register js assets */
        foreach ($this->assetsJs as $js) {
            $this->registerAssetJs($js);
        }
    }

    /**
     * Returns the assets URL.
     * Assets folder has few orphan and very useful utility libraries.
     * @return string
     */
    public function getAssetsUrl()
    {
        if (isset($this->_assetsUrl)) {
            return $this->_assetsUrl;
        } else {
            $forceCopyAssets = true;
            $path = Yii::getPathOfAlias('bootstrap');
            $assetsUrl = Yii::app()->assetManager->publish(
                $path . DIRECTORY_SEPARATOR . 'assets',
                false,
                -1,
                $forceCopyAssets
            );

            return $this->_assetsUrl = $assetsUrl;
        }
    }

    /**
     * Register a specific js file in the asset's js folder
     * @param string $jsFile
     * @param int $position the position of the JavaScript code.
     * @see CClientScript::registerScriptFile
     * @return $this
     */
    public function registerAssetJs($jsFile, $position = CClientScript::POS_END)
    {
        Yii::app()->getClientScript()->registerScriptFile($this->getAssetsUrl() . "/js/{$jsFile}", $position);
        return $this;
    }

    /**
     * Registers a specific css in the asset's css folder
     * @param string $cssFile the css file name to register
     * @param string $media the media that the CSS file should be applied to. If empty, it means all media types.
     * @return $this
     */
    public function registerAssetCss($cssFile, $media = '')
    {
        Yii::app()->getClientScript()->registerCssFile($this->getAssetsUrl() . "/css/{$cssFile}", $media);
        return $this;
    }

    /**
     * Registers events using the given selector.
     * @param string $selector the CSS selector.
     * @param string[] $events the JavaScript event configuration (name=>handler).
     * @param int $position the position of the JavaScript code.
     */
    public function registerEvents($selector, $events, $position = CClientScript::POS_END)
    {
        if (empty($events)) {
            return;
        }

        $script = '';
        foreach ($events as $name => $handler) {
            $handler = ($handler instanceof CJavaScriptExpression)
                ? $handler
                : new CJavaScriptExpression($handler);

            $script .= "jQuery('{$selector}').on('{$name}', {$handler});";
        }
        $id = __CLASS__ . '#Events' . self::$counter++;
        Yii::app()->clientScript->registerScript($id, $script, $position);
    }

    /**
     * Registers a specific Bootstrap plugin using the given selector and options.
     * @param string $name the plugin name.
     * @param string $selector the CSS selector.
     * @param array $options the JavaScript options for the plugin.
     * @param int $position the position of the JavaScript code.
     */
    public function registerPlugin($name, $selector, $options = array(), $position = CClientScript::POS_END)
    {
        $options = !empty($options) ? CJavaScript::encode($options) : '';
        $script = "jQuery('{$selector}').{$name}({$options});";
        $id = __CLASS__ . '#Plugin' . self::$counter++;
        Yii::app()->clientScript->registerScript($id, $script, $position);
    }

} 