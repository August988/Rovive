<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("HTTP/1.1 403 Forbidden");
    echo "Please login.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $authclass = new About;

    $newBio = $_POST["newBio"];

    $authclass->changeBio($newBio);
    echo "Successfully changed bio.";
    exit;
}
