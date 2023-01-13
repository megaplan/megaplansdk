<?php
/**
 * Создание сделки
 */
// ID менеджера
$managerId = 1000003;
// ID схемы сделки
$programId = 8;
// ID клиента
$contractorId = 1000666;

$url = '/api/v3/deal/';
$params = [
    'contentType' => 'Deal',
    // Схема сделки
    'program' => [
        'contentType' => 'Program',
        'id' => $programId,
    ],
    'manager' => [
        'contentType' => 'Employee',
        'id' => $managerId,
    ],
    'contractor' => [
        'contentType' => 'ContractorCompany',
        'id' => $contractorId,
    ],
    'description' => 'Описание',
    // ...
    // Расширенное поле
    // 'Category130CustomFieldStepenVipolneniya' => 10
];
$response = $request->post($url, $params);
$data = $response->getData();

if ($deal = $data->data) {
    $logger->info('Id созданной сделки', $deal->id);
    $logger->info('Номер созданной сделки', $deal->number);
}
