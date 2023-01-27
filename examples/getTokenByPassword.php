<?php

use Megaplan\Megaplansdk\Logger\AbstractLogger;
use Megaplan\Megaplansdk\Logger\ConsoleLogger;
use Megaplan\Megaplansdk\MegaplanRequest;

include __DIR__.'../autoload.php';

$host = '';
$user = '';
$pass = '';

$logger = new ConsoleLogger(AbstractLogger::LEVEL_INFO);

$request = new MegaplanRequest($host, '', $logger);
$response = $request->send(
    '/api/v3/auth/access_token',
    'POST',
    [
        'username' => $user,
        'password' => $pass,
        'grant_type' => 'password',
    ]
);
$data = $response->getData();

$accessToken = $data->access_token ?? '';
$expiresIn = $data->expires_in ?? '';
$refreshToken = $data->refresh_token ?? '';
