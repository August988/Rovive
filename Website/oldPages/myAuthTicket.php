<?php
$title = "Auth ticket";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}

?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="container mt-3">
    <h4 class="text-center">Your auth ticket is:</h4>
    <p class="text-center"><?php echo htmlspecialchars($_COOKIE["_ROBLOSECURITY"]); ?></p>
    <p class="text-center">To use it, simply put it in the -t "token" argument in the join.bat script</p>
</div>

<?php echo PageBuilder::buildFooter(); ?>