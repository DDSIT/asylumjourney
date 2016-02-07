<?php

$container->setParameter('base_url', $_ENV['BASE_URL']);
$mysql = parse_url(getenv("CLEARDB_DATABASE_URL"));

$container->setParameter('database_driver', 'pdo_mysql');
$container->setParameter('database_host', $mysql['host']);
$container->setParameter('database_name', substr($mysql['path'], 1));
$container->setParameter('database_user', $mysql['user']);
$container->setParameter('database_password', $mysql['pass']);
$container->setParameter('database_path', null);