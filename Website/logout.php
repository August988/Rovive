<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$auth = new Auth;

$auth->logout();

header("Location: /");
exit;