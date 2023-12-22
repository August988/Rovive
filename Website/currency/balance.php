<?php
$data = array("robux" => 1);
$jsonData = json_encode($data);
header('Content-Type: application/json');
echo $jsonData;
?>


