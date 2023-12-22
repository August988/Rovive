<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/config/main.php";

if (isset($_GET["suggest"])) {
    $token = $_GET["suggest"];

    $authclass = new Auth;

    $token = $authclass->validateToken($token);

    if ($token) {
        setcookie(".ROBLOSECURITY", $token["token"], time() + 3600, "/");
        exit("true");
    } else {
        header("HTTP/1.1 403 Forbidden");
        exit("false");
    }
} else {
    header("HTTP/1.1 403 Forbidden");
    exit("false");
}
