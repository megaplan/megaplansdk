<?php

use Megaplan\Megaplansdk\Logger\FileLogger;
use Megaplan\Megaplansdk\MegaplanRequest;

include 'vendor/autoload.php';

// хост аккаунта мегаплана в виде mp123456.megaplan.ru
$host = '';
/**
 * Токен авторизации. Варианты получения:
 * - скопировать из интерфейса приложения для локального использования или отладки
 * - получить при установке приложения
 * - получить через специальный запрос, используя логин и пароль (ограничен по времени)
**/
$token = '';
$logger = FileLogger::infoLogger(__DIR__. '/debug.log');
$request = new MegaplanRequest($host, $token, $logger);

// подключаем файл с примером
include __DIR__.'/examples/entityRequests/extraFields/list.php';
