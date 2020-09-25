<?php
$config = [
    'id' => 'Yii2 Micro Admin',

    // the basePath of the application will be the `micro-app` directory
    'basePath' => __DIR__,

    // this is where the application will find all controllers
    'controllerNamespace' => 'app\controllers',

    // set an alias to enable autoloading of classes from the 'micro' namespace
    'aliases' => [
        '@app' => __DIR__,
    ],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2_micro_admin',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8mb4',
        ],
        'request' => [
            'cookieValidationKey' => 'pp23K-3dsxwQQcw_1oPWNd8w_8As'
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'rules' => $url,
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/login'],
        ],
    ],
];

if (YII_ENV_DEV) {
    $config['aliases'] = ['@bower' => '@vendor/bower-asset'];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;