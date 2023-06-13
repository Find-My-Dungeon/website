<?php

require_once __DIR__ . '/utils/Dotenv.php';

$dotenv = new DotEnv(__DIR__ . '/.env');
$dotenv->load();

$mysql_config = [
    'host' => $_ENV['MYSQL_HOST'] ?? 'db',
    'port' => $_ENV['MYSQL_PORT'] ?? 3306,
    'user' => $_ENV['MYSQL_USER'],
    'password' => $_ENV['MYSQL_PASSWORD'],
    'database' => $_ENV['MYSQL_DATABASE'] ?? 'fmd',
];
