<?php

// 32

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("ProgrammerZamanNow");
$log->pushHeandler(new StreamHandler('application.log', Logger::INFO));

$log->info('Hello Word');
$log->info('Belajar Composer Guys');