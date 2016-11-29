<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	'defaultRoute' => 'teste/index',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'BCVV9ntNhLK8KBQINbS7M6eIiylYesI3',
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
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
	// Essa é a parte de url Amigáveis
        'urlManager' => [
            'enablePrettyUrl' => true,
		// Esse parâmetro aqui defin URLs amigáveis ou não
            'showScriptName' => false,
		// Esse daqui mostra o link (quando se aponta o
		// mouse) com o /index.php/site/contact (exemplo)
		// Legal tirar.
            'rules' => [
		//'teste/<id:\d+>' => 'teste/index',
		// Aceita parâmetros depois do teste/, exemplo
		// teste/500. Esse id é o id no controller e o \d+
		// é uma expressão regular que só aceita numeros
		// e na quantidade passada (+).
		//'teste/<id:\d+>/<name>' => 'teste/mais-parametros'
		// Aqui ele passa dois parâmetros e chama a action
		// mais-parâmetros.  (id, name)
		'course/<id:\d+>/update' => 'course/update'
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
