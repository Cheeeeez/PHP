<?php

function getAllUsers($filePath){
    return getData($filePath);
}

function store($data, $filePath) {
    $dataArr = getData($filePath);
    array_push($dataArr, $data);
    $dataNewJson = json_encode($dataArr);
    file_put_contents($filePath, $dataNewJson);
}

function getData($filePath) {
    $dataJson = file_get_contents($filePath);
    return json_decode($dataJson, true);
}

