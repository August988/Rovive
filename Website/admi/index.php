<?php
$title = "Admin Panel";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$userclass = new User;

$adminlevel = 0;

if (isset($_SESSION["user"])) {
    $user = $userclass::getUser($_SESSION["user"]["id"]);
    $adminlevel = $user["admin"];

    if ($adminlevel < 1) {
        header("Location: /");
        exit;
    }
} else {
    header("Location: /");
    exit;
}
?>

<?php echo PageBuilder::buildHeader(); ?>
<?php echo PageBuilder::buildAdminNavbar(); ?>

<div class="content">
    <h1 class="mt-3">Admin Panel</h1>

    <a href="moderation" class="btn-secondary-md">Moderation Actions</a>
    <a href="viewmoderation" class="btn-secondary-md">Moderation Actions overview</a>
    <a href="resetUsername" class="btn-secondary-md">Account username reset</a>
</div>

<?php echo PageBuilder::buildFooter(); ?>

