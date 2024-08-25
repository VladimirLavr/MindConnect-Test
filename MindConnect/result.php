<?php
include_once '../dbData/dbData.php';
include_once '../dbData/createTable.php';
include '../dbData/getData.php';

if ($_GET || $_POST) {
    header('Content-Type: application/json');
    $json = json_encode(['data' => $query]);
    if ($json === false) {
        echo 'JSON encoding error: ' . json_last_error_msg();
    } else {
        echo $json;
    }

}

