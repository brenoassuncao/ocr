<?php
$GLOBALS['_kint_settings'] = array (

	/**
	 * @var callback
	 *
	 * @param string $file filename where the function was called
	 * @param int|NULL $line the line number in the file (not applicable when used in resource dumps)
	 */
	'pathDisplayCallback' => "kint::_debugPath",


	/** @var int max length of string before it is truncated and displayed separately in full */
	'maxStrLength' => 60,


	/** @var int max array/object levels to go deep, if zero no limits are applied */
	'maxLevels' => 16,


	/** @var bool if set to false, kint will become silent */
	'enabled' => TRUE,


	/** @var string the css file to format the output of kint */
	'skin' => 'kint.css',
);

