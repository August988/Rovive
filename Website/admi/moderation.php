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
    if (!empty($_POST["type"]) && !empty($_POST["reason"]) && !empty($_POST["username"])) {
        $type = $_POST["type"];
        $reason = $_POST["reason"];
        $username = $_POST["username"];

        // Define a mapping of type values to moderation action values
        $typeToAction = [
            "warning" => 1,
            "ban1d" => 2,
            "ban3d" => 3,
            "ban7d" => 4,
            "ban14d" => 5,
            "account_deletion" => 6
        ];

        $actionToTime = [
            1 => 0,
            2 => 86400,
            3 => 259200,
            4 => 604800,
            5 => 1209600,
            6 => 0
        ];

        if (isset($typeToAction[$type])) {
            $action = $typeToAction[$type]; // get the type from array
            $userclass::moderate($username, $action, $reason, time() + $actionToTime[$action]); // moderate the user specified with the type
        } else {
            $error = "Invalid action type: ".$type; // ehh, this error is not good
        }
    } else {
        $error = "All fields are required"; // admin forgot to fill it in lolz
    }
    if (empty($error)) { // only if there are no errors that have to be seen
        header("Location: ".$_SERVER["REQUEST_URI"]); // Redirect to the same page so that the request cannot be repeated
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

    <h1 class="mt-3">Account moderation actions</h1>

    <p>please for the love of god, dont ban yourself</p>

    <a href="viewmoderation" class="btn-secondary-md">View moderation actions</a>

    <form method="post">

        <div class="form-group mb-3">
            <label for="type">Moderation type</label>
            <select class="form-control" id="type" name="type">
                <option value="warning">Warning</option>
                <option value="ban1d">Ban for 1 day</option>
                <option value="ban3d">Ban for 3 days</option>
                <option value="ban7d">Ban for 7 days</option>
                <option value="ban14d">Ban for 14 days</option>
                <option value="account_deletion">Account deletion</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="reason">Reason</label>
            <input type="text" class="form-control" id="reason" name="reason">
        </div>

        <div class="form-group mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>

        <button type="submit" class="btn-secondary-md">Submit</button>
    </form>
</div>

<?php echo PageBuilder::buildFooter(); ?>