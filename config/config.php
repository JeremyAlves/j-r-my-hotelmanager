<?php

use App\Service\ServiceContainer;

$configuration = [
    'db' => [
        'dsn'      => 'mysql:dbname=hbhotelmanager;host=localhost;charset=utf8',
        'username' => 'root',
        'password' => '',
    ],
    'env' => [
        'base_path' => 'http://localhost/hbhotelmanager-master',
        'site_name' => 'HB Hotel Manager',
        'cli' => 'http://localhost/hbhotelmanager-master/clients'
    ]
];

require_once __DIR__ . '/../vendor/autoload.php';

$container = new ServiceContainer($configuration);

require_once __DIR__ . '/routes.php';