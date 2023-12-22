<?php

header("Content-Type: text/plain");

function get_signature($script)
{

    $signature = "";

    openssl_sign($script, $signature, file_get_contents("./PrivateKey/PrivateKey.pem"), OPENSSL_ALGO_SHA1);

    return base64_encode($signature);
}

require_once $_SERVER["DOCUMENT_ROOT"] . "/config/main.php";

$authticket = isset($_COOKIE["_ROBLOSECURITY"]) ? $_COOKIE["_ROBLOSECURITY"] : "uh oh idfk cookie not defined >:(";

$authclass = new Auth;
$userclass = new User;

$ticket = $authclass->validateToken($authticket);

if (!$ticket) {
    header("HTTP/1.1 401 Unauthorized");
    echo "invalid auth ticket";
    exit;
}


$user = $userclass->getUser($ticket["user_id"]);

$username = $user["username"];
$userid = $user["id"];

header("Content-Type: application/json");


$joinscript = [

    "ClientPort" => 0,

    "MachineAddress" => "89.177.158.171",

    "ServerPort" => 53640,

    "PingUrl" => "",

    "PingInterval" => 20,

    "UserName" => "Hacker",

    "SeleniumTestMode" => false,

    "UserId" => 999,

    "SuperSafeChat" => false,

    "CharacterAppearance" => "",

    "ClientTicket" => "1",

    "GameId" => 1818,

    "PlaceId" => 1818,

    "MeasurementUrl" => "",

    "WaitingForCharacterGuid" => "26eb3e21-aa80-475b-a777-b43c3ea5f7d2",

    "BaseUrl" => "http://www.rovive.pro/",

    "ChatStyle" => "ClassicAndBubble",

    "VendorId" => "0",

    "ScreenShotInfo" => "",

    "VideoInfo" => "",

    "CreatorId" => "1",

    "CreatorTypeEnum" => "Creator",

    "MembershipType" => "OutrageousBuildersClub",

    "AccountAge" => "100",

    "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",

    "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",

    "CookieStoreEnabled" => true,

    "IsRobloxPlace" => true,

    "GenerateTeleportJoin" => false,

    "IsUnknownOrUnder13" => false,

    "SessionId" => "39412c34-2f9b-436f-b19d-b8db90c2e186|00000000-0000-0000-0000-000000000000|0|190.23.103.228|8|2021-03-03T17:04:47+01:00|0|null|null",

    "DataCenterId" => 0,

    "UniverseId" => 3,

    "BrowserTrackerId" => 0,

    "UsePortraitMode" => false,

    "FollowUserId" => 0,

    "characterAppearanceId" => 1

];



$data = json_encode($joinscript, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);

$signature = get_signature("\r\n" . $data);

exit("--rbxsig%" . $signature . "%\r\n" . $data);
