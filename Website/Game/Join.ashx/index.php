<?php

header("Content-Type: text/plain; charset=utf-8");

function sign($script)
{
    $signature = "";
    $key = file_get_contents("./PrivateKey/PrivateKey.pem");
    openssl_sign($script, $signature, $key, OPENSSL_ALGO_SHA1);
    return "--rbxsig" . sprintf("%%%s%%%s", base64_encode($signature), $script);
}

require_once $_SERVER["DOCUMENT_ROOT"] . "/config/main.php";

$authticket = isset($_COOKIE["_ROBLOSECURITY"]) ? $_COOKIE["_ROBLOSECURITY"] : "uh oh idfk cookie not defined";

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

$secondsInADay = 24 * 60 * 60;
$accountAge = floor((time() - $user["created_at"]) / $secondsInADay);

$joinscript = array(
    "ClientPort" => 0,
    "MachineAddress" => "localhost",
    "ServerPort" => 53640,
    "PingUrl" => "",
    "PingInterval" => 120,
    "UserName" => "Player",
    "SeleniumTestMode" => false,
    "UserId" => 0,
    "SuperSafeChat" => true,
    "CharacterAppearance" => "https://api.rovive.pro/v1.1/avatar-fetch/?placeId=0&userId=0",
    "ClientTicket" => "11/27/2016 9:55:58 AM;jg04OiujU7lnnZD0dLHI+Yu1zIorkPjhw94F1UZZTzos2vgj2qkDGuEmtNrDc/4CuL/Dmq5EPrJMaeyygqwUPyRpTavnN00pBQ/G+vYx6kce1hkEQHrYAuho1yKeq0gGVsDvloSuM/02ugH2zyEpf+fnMthIuk2LRcNRCYc4AaU=;MasBQ3GMHE4BIyflKr6kpE69YaT7AnmDoezxUFPn4lctSpqCUMOrsA41IfGzL2yWz8DKRc646P9/mi5rTP1Psc/+rIJNezIH4DU3eUZwReGVzQZ/nZgNI4GoumNMlv6qyA1oSmhvxE6UEWVM12cvSx3tJQI3yDIVqNrbJhNSexo=",
    "GameId" => "00000000-0000-0000-0000-000000000000",
    "PlaceId" => 1818,
    "MeasurementUrl" => "",
    "WaitingForCharacterGuid" => "08d7557b-2843-4a03-82f7-2723e47e2371",
    "BaseUrl" => "http://www.rovive.pro/",
    "ChatStyle" => "Classic",
    "VendorId" => 0,
    "ScreenShotInfo" => "",
    "VideoInfo" => "<?xml version=\"1.0\"?><entry xmlns=\"http://www.w3.org/2005/Atom\" xmlns:media=\"http://search.yahoo.com/mrss/\" xmlns:yt=\"http://gdata.youtube.com/schemas/2007\"><media:group><media:title type=\"plain\"><![CDATA[ROBLOX Place]]></media:title><media:description type=\"plain\"><![CDATA[ For more games visit http://www.roblox.com]]></media:description><media:category scheme=\"http://gdata.youtube.com/schemas/2007/categories.cat\">Games</media:category><media:keywords>ROBLOX, video, free game, online virtual world</media:keywords></media:group></entry>",
    "CreatorId" => 0,
    "CreatorTypeEnum" => "User",
    "MembershipType" => "None",
    "AccountAge" => 365,
    "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",
    "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",
    "CookieStoreEnabled" => true,
    "IsRobloxPlace" => false,
    "GenerateTeleportJoin" => false,
    "IsUnknownOrUnder13" => false,
    "SessionId" => "89e81fb5-d1c8-48a9-a127-5d0d6bddaaac|00000000-0000-0000-0000-000000000000|0|207.241.231.247|5|2016-11-27T15:55:58.4473206Z|0|null|null|37.7811|-122.4625|1",
    "DataCenterId" => 0,
    "UniverseId" => 0,
    "BrowserTrackerId" => 0,
    "UsePortraitMode" => false,
    "FollowUserId" => 0,
    "characterAppearanceId" => 0
);

$data = json_encode($joinscript, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

exit(sign($data));