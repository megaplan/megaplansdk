<?php
/**
 *  Скачивание вложения
 */

use Megaplan\Megaplansdk\Logger\LoggerInterface;
use Megaplan\Megaplansdk\MegaplanRequest;
/**
 *  @var MegaplanRequest $request
 *  @var  LoggerInterface $logger
 */

// Получаем из поля типа File
$fileId = 87;
$fileName = 'test.ods';

$result = $request->get('/api/v3/attache/shareUrl/'.$fileId);
$data = $result->getData();
$logger->info('link', $data->data->link);
file_put_contents(
    '/tmp/'.$fileName,
    file_get_contents($data->data->link)
);