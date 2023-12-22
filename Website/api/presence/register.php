<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

// presence api cuz yes

if (!isset($_SESSION["user"])) {
    header("HTTP/1.1 403 Forbidden");
    echo "Please login.";
    exit;
}

$stmt = $pdo->prepare("UPDATE users SET lastOnlineSite = :time WHERE id = :id");

$stmt->bindParam(":time", time(), PDO::PARAM_INT);
$stmt->bindParam(":id", $_SESSION["user"]["id"], PDO::PARAM_INT);
$stmt->execute();
