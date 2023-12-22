<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        header("HTTP/1.1 401 Unauthorized");
        exit("Empty fields!");
    }
    $auth = new Auth();
    if ($auth->login($_POST["username"], $_POST["password"])) {
        exit("success");
    } else {
        header("HTTP/1.1 401 Unauthorized");
        exit("Invalid username or password");
    }
} else {
    header("HTTP/1.1 400 Bad Request");
    exit("Invalid request.");
}