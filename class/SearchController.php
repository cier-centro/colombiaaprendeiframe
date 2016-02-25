<?php
header('Content-Type: application/json');
include_once 'SearchModel.php';
$searchModel = new SearchModel();

$keyword = $_POST['keyword'];
$arrayObject = $searchModel->findLerningObject($keyword);

$arrayData = array();
$i = 0;

while ($rw = mysqli_fetch_array($arrayObject)) {
    $arrayData[$i]['code_lo'] = trim($rw['code_lo']);
    $arrayData[$i]['name_lo'] = utf8_encode(trim($rw['name_lo']));
    $arrayData[$i]['grade'] = utf8_encode(trim($rw['grade']));
    $arrayData[$i]['matter'] = utf8_encode(trim($rw['matter']));
    $arrayData[$i]['level'] = utf8_encode(trim($rw['level']));
    $i++;
}

echo json_encode($arrayData);



