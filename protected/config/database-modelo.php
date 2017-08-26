	<?php
// Crie uma cópia desse arquivo e renomeie para database.php
// This is the database connection configuration.
return array(
	/*'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',*/
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=ocr',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'root',
	'charset' => 'utf8',

	// set to true to enable database query logging
	// don't forget to put `profile` in the log route `levels` below
	'enableProfiling' => true,

	// set to true to replace the params with the literal values
	'enableParamLogging' => true,	
);