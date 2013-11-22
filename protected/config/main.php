<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Ejercicios Resueltos',
	'language'=>'es', // Este es el lenguaje en el que querés que muestre las cosas
    'sourceLanguage'=>'en', //  este es el lenguaje por default de los archivos
	// preloading 'log' component
	'preload'=>array('log'),
	'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
        'yiiwheels' => realpath(__DIR__ . '/../extensions/yiiwheels'), // change if necessary
    ),
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
		'application.modules.user.components.*',
		'application.modules.rights.*',
		'application.modules.rights.components.*',
		'ext.giix-components.*',
		'bootstrap.helpers.TbHtml',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'exefire132',
			'generatorPaths' => array(
			'ext.giix-core',
			'bootstrap.gii', // giix generators
			),
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
		'user'=>array(
                'tableUsers' => 'users',
                'tableProfiles' => 'profiles',
                'tableProfileFields' => 'profiles_fields',
                'hash' => 'md5',
 
                # send activation email
                'sendActivationMail' => false,
 
                # allow access for non-activated users
                'loginNotActiv' => false,
 
                # activate user on registration (only sendActivationMail = false)
                'activeAfterRegister' => true,
 
                # automatically login from registration
                'autoLogin' => true,
 
                # registration path
                'registrationUrl' => array('/user/registration'),
 
                # recovery password path
                'recoveryUrl' => array('/user/recovery'),
 
                # login form path
                'loginUrl' => array('/user/login'),
 
                # page after login
                'returnUrl' => array('/user/profile'),
 
                # page after logout
                'returnLogoutUrl' => array('/user/login'),
        ),
        'rights'=>array(
                'superuserName'=>'Admin', // Name of the role with super user privileges. 
				'authenticatedName'=>'Authenticated',  // Name of the authenticated user role. 
				'userIdColumn'=>'id', // Name of the user id column in the database. 
				'userNameColumn'=>'username',  // Name of the user name column in the database. 
				'enableBizRule'=>true,  // Whether to enable authorization item business rules. 
				'enableBizRuleData'=>true,   // Whether to enable data for business rules. 
				'displayDescription'=>true,  // Whether to use item description instead of name. 
				'flashSuccessKey'=>'RightsSuccess', // Key to use for setting success flash messages. 
				'flashErrorKey'=>'RightsError', // Key to use for setting error flash messages. 

				'baseUrl'=>'/rights', // Base URL for Rights. Change if module is nested. 
				'layout'=>'rights.views.layouts.main',  // Layout to use for displaying Rights. 
				'appLayout'=>'application.views.layouts.main', // Application layout. 
				'cssFile'=>'rights.css', // Style sheet file to use for Rights. 
				'install'=>false,  // Whether to enable installer. 
				'debug'=>false, 
        ),
	),

	// application components
	'components'=>array(
		'yiiwheels' => array(
            'class' => 'yiiwheels.YiiWheels',   
        ),
		'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',   
        ),
		'user'=>array(
                'class'=>'RWebUser',
                // enable cookie-based authentication
                'allowAutoLogin'=>true,
                'loginUrl'=>array('/user/login'),
        ),
		// uncomment the following to enable URLs in path-format
		'authManager'=>array(
                'class'=>'RDbAuthManager',
                'connectionID'=>'db',
                'defaultRoles'=>array('Guest'),
        ),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),	
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ejercicios',
			'emulatePrepare' => true,
			'username' => 'ejercicios',
			'password' => 'ubzAnuw568BfPbed',
			'charset' => 'utf8',
		),
		
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
		'clientScript'=>array(
            'packages'=>array(
                'jsMath'=>array(
                    'baseUrl'=> realpath(__DIR__ . '/../../js/mathjax'),
                    'js'=>array('MathJax.js'),
                )
            ),
        ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);