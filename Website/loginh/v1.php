<?php
$data = [
        "id" => 16,
        "username" => "DoggoITA",
    ,
    "isBanned" => false
];

$jsonEncoded = json_encode($data);

echo $jsonEncoded;