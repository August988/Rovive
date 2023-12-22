<?php
if (isset($_GET['id']) && $_GET["id"] == 1818) {
    header("Location: /config/1818.rbxl");
    exit;
}
if (isset($_GET['id'])) {
    header('Location: https://assetdelivery.roblox.com/v1/asset?id=' . $_GET['id']);
}