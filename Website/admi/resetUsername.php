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

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"])) {
        $randomString = bin2hex(random_bytes(3));
        $username = "Username reset (" . $randomString . ")";

        $user = $userclass::getUserByUsername($_POST["username"]);

        $userclass->changeUsername($user["id"], $username); // moderate the user specified with the type
    } else {
        $error = "All fields are required"; // admin forgot to fill it in lolz
    }
    if (empty($error)) { // only if there are no errors that have to be seen
        header("Location: " . $_SERVER["REQUEST_URI"]); // Redirect to the same page so that the request cannot be repeated
        exit;
    }
}

?>

<?php echo PageBuilder::buildHeader(); ?>
<?php echo PageBuilder::buildAdminNavbar(); ?>

<div class="content">

    <?php if (!empty($error)) : ?>
        <div class="alert alert-warning" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <h1 class="mt-3">Account username reset</h1>

    <form method="post">
        <div class="form-group mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>

        <button type="submit" class="btn-secondary-md">Submit</button>
    </form>
</div>

<?php echo PageBuilder::buildFooter(); ?>