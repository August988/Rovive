<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

header('Content-Type: text/html; charset=utf-8');


$userclass = new User;

if ($_GET["method"] == "IsBestFriendsWith") {
    echo '<Value Type="boolean">false</Value>';
}

if ($_GET["method"] == "IsFriendsWith") {
    echo '<Value Type="boolean">true</Value>';
}

if ($_GET["method"] == "IsInGroup") {

    if ($_GET['groupid'] == "1200769") {
        if ($userclass->getUser($_GET['playerid'])["admin"] > 0) {
            $value = 'true';
        } else {
            $value = 'false';
        }
    } else {
        $value = 'false';
    }

    echo '<Value Type="boolean">'.$value.'</Value>';
}

if ($_GET["method"] == "GetGroupRank") {
    if ($_GET['groupid'] == "1") {
        if ($userclass->getUser($_GET['playerid'])["admin"] > 0) {
            $value = 'true';
        } else {
            $value = 'false';
        }
    } else {
        $value = 'false';
    }
    echo '<Value Type="boolean">'.$value.'</Value>';
}