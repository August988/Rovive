<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("HTTP/1.1 403 Forbidden");
    echo "Please login.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userclass = new User;
    
    $newUsername = $_POST["newUsername"];

    $userclass->changeUsername($_SESSION["user"]["id"], $newUsername);
    echo "Successfully changed bio.";
    exit;
}
