<?php
/** @var $logger \Megaplan\Megaplansdk\Logger\LoggerInterface **/
/** @var $request \Megaplan\Megaplansdk\MegaplanRequest **/

// расширенные поля задач
$url = '/api/v3/task/extraFields';

// расширенные поля проектов
// $url = '/api/v3/project/extraFields';

// расширенные поля клиентов
// $url = '/api/v3/contractorCompany/extraFields';

$response = $request->get($url);
$data = $response->getData();

if ($response->getError()) {
    $logger->error($response->getError());
    exit();
}

$logger->info('data', $data);
foreach ($data->data as $field) {
    $logger->info('id', $field->id);
    $logger->info('contentType', $field->contentType);
    if (!empty($field->hrName)) {
        $logger->info('hrName', $field->hrName);
    }
    $logger->info('name', $field->name);
    $logger->info('type', $field->type);
    $logger->info('settings', $field->settings);
}
