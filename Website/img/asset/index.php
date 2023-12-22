<?php
ob_start();
$id = (int)$_GET["id"];
$file = $id;
if (!file_exists($_SERVER["DOCUMENT_ROOT"] . "/asset/" . $file)) {
    $file = "https://assetdelivery.roblox.com/v1/asset/?id=" . $id;
    header("location:" . $file);
}
readfile($file);
header("content-type:text/plain");
?>