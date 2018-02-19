<?php

return [
    'id' => 'test-json',
    'basePath' => __DIR__,
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => __DIR__ . '/vendor',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=db;port=5432;dbname=yii2',
            'username' => 'yii2',
            'password' => 'yii2',
            'charset' => 'utf8',
        ],
    ],
];