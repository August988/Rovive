<?php
$title = "Sign Up";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (isset($_SESSION["user"])) {
    header("Location: /home");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["confirmpassword"])) {

    if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["confirmpassword"])) {
        exit("Empty fields!");
    }
    if ($_POST["password"] != $_POST["confirmpassword"]) {
        exit("Passwords do not match!");
    }

    if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST["username"])) {
        exit("Invalid username! Only letters and numbers are allowed.");
    }

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$_POST["username"]]);
    $user = $stmt->fetch();

    if ($user) {
        exit("Username already exists!, please choose another one.");
    }

    $auth = new Auth();
    if ($auth->register($_POST["username"], $_POST["password"])) {
        exit("success");
    } else {
        exit("A username and password (with confirmation of password) is required for signing up.");
    }
}


?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="begin rounded shadow p-4 col-sm-6">
    <img class="mb-3" src="/img/logoFull.png" alt="site logo" width="200">

    <h4>Sign Up</h4>

    <form method="post">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="username" id="username" placeholder="">
            <label for="username">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="">
            <label for="password">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="">
            <label for="confirmpassword">Confirm Password</label>
        </div>
        <button type="submit" class="btn btn-primary" onclick="signup(event)">Sign Up</button>
    </form>
</div>


<script>
    function signup(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/signup",
            data: {
                username: $("#username").val(),
                password: $("#password").val(),
                confirmpassword: $("#confirmpassword").val(),
            },
            success: function(data) {
                if (data == "success") {
                    window.location.href = "/";
                } else {
                    alert(data);
                }
            }
        });
    }
</script>

<?php echo PageBuilder::buildFooter(); ?>