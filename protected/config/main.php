<?php

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Sistema de Conversão via OCR',
    'defaultController'=>'arquivo',
    // application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(		
		'adminEmail'=>'webmaster@example.com',
		'autentication'		=>'bd',  // preencher com : 'ldap' OU 'bd'		

		// Configurações das pastas onde o OCR Server vai buscar arquivos a serem processados e onde ele vai depositar os arquivos após o processamento
		'ocr_folder_in'		=>'/mnt/arquivos_ocr/Entrada/', // pasta de entrada  (arquivos para processar)
        'ocr_folder_out'	=>'/mnt/arquivos_ocr/Saida/', // pasta de saída  (arquivos convertidos)
    	'ocr_folder_proc' 	=>'/mnt/arquivos_ocr/Originais_Processados/', // pasta de arquivos processados 
        'ocr_folder_erro'	=>'/mnt/arquivos_ocr/Erro/', // pasta de erros 

        'cron_key'	=> 'seuHashSeguroAqui', // Hash que será usado no cron para evitar chamadas não autorizadas ao cron

		'ldap'      => array(
        	    'host'      	=> 'ldap.exemplo.com.br',
	            'port'      	=> 389,
	            'admin_username' 	=> 'admin',
	            'admin_password' 	=> 'admin',
	            'admin_dn'		=> 'ou=users,dc=exemplo,dc=com,dc=br',
	            'general_dn' 	=> 'dc=exemplo,dc=com,dc=br',
		),
	),
	// preloading 'log' component
	'preload'=>array('log', 'kint'),
	'aliases' => array(
	    'bootstrap' => 'ext.bootstrap',
	),
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.rights.*',
        'application.modules.rights.components.*',
        'bootstrap.behaviors.*',
	    'bootstrap.helpers.*',
	    'bootstrap.widgets.*'
	),

	'modules'=>array(
		'user'=>array(
			# encrypting method (php hash function)
            'hash' => 'md5',
 
            # send activation email
            'sendActivationMail' => true,
 
            # allow access for non-activated users
            'loginNotActiv' => false,
 
            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,
 
            # automatically login from registration
            'autoLogin' => false,
 
            # registration path
            'registrationUrl' => array('/user/registration'),
 
            # recovery password path
            'recoveryUrl' => array('/user/login'),
 
            # login form path
            'loginUrl' => array('/user/login'),
 
            # page after login
            'returnUrl' => array('/user/profile'),
 
            # page after logout
            'returnLogoutUrl' => array('/user/login'),

            'tableUsers' => 'users',
            'tableProfiles' => 'profiles',
            'tableProfileFields' => 'profiles_fields',
        ),
        'rights'=>array(
            'install'=>false,
            'debug'=>true, 
            'superuserName'=>'Admin', // Name of the role with super user privileges. 
			'authenticatedName'=>'Autenticado', 
        ),
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			'generatorPaths' => array('bootstrap.gii'),
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),

	// application components
	'components'=>array(		
        'kint' => array(
		    'class' => 'ext.Kint.Kint',
		),
		'user'=>array(
			 'class'=>'RWebUser',
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
            'loginUrl'=>array('/user/login'),
		),
		'authManager'=>array(
                'class'=>'RDbAuthManager',
                'connectionID'=>'db',
                'defaultRoles'=>array('Guest'),
        ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			//'caseSensitive'=>false, 

			'rules'=>array(
				'<action:(index|page|contact|login)>'=>'site/<action>',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>', 
			),
		),

		'bootstrap' => array(
	        'class' => 'bootstrap.components.BsApi'
	    ),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	
);
