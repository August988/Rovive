<?php

header('Content-Type: application/json');

// Usage Example
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';
$catalogHandler = new CatalogHandler;

$params = [
    'Category' => isset($_GET['Category']) ? $_GET['Category'] : 0,
    'Subcategory' => isset($_GET['Subcategory']) ? $_GET['Subcategory'] : 0,
    'Keyword' => isset($_GET['Keyword']) ? $_GET['Keyword'] : '',
    'IncludeNotForSale' => isset($_GET['IncludeNotForSale']) ? $_GET['IncludeNotForSale'] : false,
    'PageNumber' => isset($_GET['PageNumber']) ? $_GET['PageNumber'] : 1,
];

$response = $catalogHandler->getCatalogData($params);

echo $response;