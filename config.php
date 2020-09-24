<?php
return [
    'id' => 'Yii2 Micro Admin',

    // the basePath of the application will be the `micro-app` directory
    'basePath' => __DIR__,

    // this is where the application will find all controllers
    'controllerNamespace' => 'micro\controllers',

    // set an alias to enable autoloading of classes from the 'micro' namespace
    'aliases' => [
        '@micro' => __DIR__,
    ],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2_micro_admin',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8mb4',
        ],
    ],
];