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

// Из поля path объекта типа File
$fileMegaplanPath = '/attach/SdfFileM_File/File/88/36f9af65837270d11934140da57f6cef.zip/test1.zip';
$file = fopen('/tmp/test1.zip', 'w');
$request->download($file, $fileMegaplanPath);