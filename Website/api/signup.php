<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["birthday"]) || empty($_POST["gender"]) || empty($_POST["captchaResponse"])) {
        header("HTTP/1.1 400 Bad Request");
        exit("Empty fields or missing hCaptcha response!");
    }

    // Verify hCaptcha response
    $hcaptcha_secret_key = SITE_CONFIG["captcha"]["privateKey"];
    $hcaptcha_response = $_POST['captchaResponse'];
    $hcaptcha_verify_url = "https://hcaptcha.com/siteverify";

    $hcaptcha_data = [
        'secret' => $hcaptcha_secret_key,
        'response' => $hcaptcha_response
    ];

    $hcaptcha_options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($hcaptcha_data),
        ],
    ];

    $hcaptcha_context = stream_context_create($hcaptcha_options);
    $hcaptcha_verify_result = file_get_contents($hcaptcha_verify_url, false, $hcaptcha_context);
    $hcaptcha_verify_data = json_decode($hcaptcha_verify_result, true);

    if (!$hcaptcha_verify_data['success']) {
        header("HTTP/1.1 400 Bad Request");
        exit("hCaptcha verification failed!");
    }

    $gender = null;

    $utilClass = new Utility;

    $birthdayunix = $utilClass->convertDateToUnixTimestamp($_POST["birthday"]);

    if ($_POST["gender"] == 2) {
        $gender = "male";
    } elseif ($_POST["gender"] == 3) {
        $gender = "female";
    }

    if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST["username"])) {
        header("HTTP/1.1 400 Bad Request");
        exit("Invalid username! Only letters and numbers are allowed.");
    }

    $username = $_POST["username"];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user) {
        header("HTTP/1.1 400 Bad Request");
        exit("Username already exists!, please choose another one.");
    }

    $auth = new Auth();
    if ($auth->register($username, $_POST["password"], $gender, $birthdayunix)) {
        $auth->login($username, $_POST["password"]);
        exit("success");
    } else {
        header("HTTP/1.1 400 Bad Request");
        exit("A username and password (with confirmation of password) is required for signing up.");
    }
} else {
    header("HTTP/1.1 400 Bad Request");
    exit("Invalid request.");
}