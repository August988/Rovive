<?php

// sorry we need another config file, we need to import some shit seperately haha so funny

define(
    "SITE_CONFIG",
    [
        "database" =>
        [
            "host" => "localhost",
            "schema" => "roviveSitetest1",
            "username" => "admin",
            "password" => "justSomeSuperDuperSecretPassword123"
        ],

        "site" =>
        [
            "name" => "Rovive",
            "name_secondary" => "Rovive",
            "currencyName" => "Robux",
            "isSitetest" => false
        ],

        "captcha" => // used for hCaptcha
        [
            "siteKey" => "f872976f-d658-4f51-93dd-07b64f03071e",
            "privateKey" => "0x92cA5Ff92Df62693169330106C70494f870bbD36"
        ]
    ]
);

// database connection (PDO, cuz it kewl)

try {
    $pdo = new PDO('mysql:host=' . SITE_CONFIG["database"]["host"] . ';dbname=' . SITE_CONFIG["database"]["schema"], SITE_CONFIG["database"]["username"], SITE_CONFIG["database"]["password"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Uh oh! It seems like we threw too much milk into our servers. They're made of potatos obviously! message: " . $e->getMessage()); // oh no moment when this happens
}