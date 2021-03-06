<?php

$params = require(__DIR__ . '/params.php');
date_default_timezone_set('Europe/Moscow');
//date_default_timezone_set('Europe/Kiev');
$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	'language' => 'ru-RU',
	'timeZone' => 'Europe/Moscow',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'XAtV3wejU3eksQCgOaa7Ase6dqCNi5aQ2oq',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
		    'viewPath' => '@app/mail',
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'enableStrictParsing' => true,
			'suffix' => '/',
			'rules' => [
				'<url:[\-\w\/]*>'=>'site/index',
				/*
				'remont_planshetov/nexus/7'=>'site/remont_planshetov',
				//'about/<action:\w+>' => 'about/<action>',
				'' => 'site/index',
				'ajax/<param:[\-\w]+>' => 'site/ajax',
				'<action:[\-\w]+>' => 'site/<action>',
				'<controller:[\-\w]+>/<action:[\-\w]+>' => '<controller>/<action>',
				//'<controller:[\-\w]+>/<action:[\-\w]+>' => '<controller>/<controller>/<action>',
				'<folder:[\-\w]+>/<controller:[\-\w]+>/<action:[\-\w]+>' => '<folder>/<controller>/<action>',
				//'<controller:[\-\w]+>/<subcontroller:[\-\w]+>/<action:[\-\w]+>' => '<controller>/<subcontroller>/<subcontroller>/<action>',
				//'<action:\w+>/<param:[\-\w]+>' => 'site/<action>',
				//'<action:\w+>/<c:\w+>/<d:\w+>' => 'site/<action>',*/

			],
		],
	    'assetManager' => [
		    'bundles' => [
			    'yii\web\JqueryAsset' => [
				    'sourcePath' => null,   // do not publish the bundle
				    'js' => [
					    'js/jquery-1.9.1.js',  // use custom jquery
				    ]
			    ],
		    ],
	    ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
