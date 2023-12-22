<?php
header('Content-Type: text/plain');

require_once $_SERVER["DOCUMENT_ROOT"] . "/config/main.php";

$authticket = isset($_COOKIE["_ROBLOSECURITY"]) ? $_COOKIE["_ROBLOSECURITY"] : "uh oh idfk cookie not defined >:(";


$authclass = new Auth;

$ticket = $authclass->validateToken($authticket);

if (!$ticket) {
    header("HTTP/1.1 401 Unauthorized");
    header("Content-Type: text/plain");
    echo "invalid auth ticket";
    error_log("invalid auth ticket" . $authticket);
    exit;
}

$array = array( // json by cozmo, put into an array by codeium, edited
    "jobId" => "Test",
    "status" => 2,
    "joinScriptUrl" => "http://www.rovive.pro/Game/Join.ashx",
    "authenticationUrl" => "http://www.rovive.pro/Login/Negotiate.ashx",
    "authenticationTicket" => $authticket,
    "message" => null
);

exit(json_encode($array, JSON_UNESCAPED_SLASHES));


// JSON BY COZMO :D (TYSM! NO PROBLEM!). REMOVE THIS EPIC CREDITS AND YOURE DEAD MEAT

//{"jobId":"testing123","status":2,"joinScriptUrl":"http://www.rovive.pro/Game/Join.ashx","authenticationUrl":"https://rovive.pro/Login/Negotiate.ashx","authenticationTicket": "real","message":"success"}