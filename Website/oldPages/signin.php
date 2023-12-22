<?php
$title = "Sign In";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (isset($_SESSION["user"])) {
    header("Location: /home");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        exit("Empty fields!");
    }
    $auth = new Auth();
    if ($auth->login($_POST["username"], $_POST["password"])) {
        exit("success");
    } else {
        exit("Invalid username or password");
    }
}


?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="begin rounded shadow p-4 col-sm-6">
    <img class="mb-3" src="/img/logoFull.png" alt="site logo" width="200">

    <h4>Sign In</h4>

    <form method="post">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="username" id="username" placeholder="">
            <label for="username">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="">
            <label for="password">Password</label>
        </div>

        <button type="submit" class="btn btn-primary" onclick="login(event)">Sign In</button>
    </form>
</div>


<script>
    function login(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/signin",
            data: {
                username: $("#username").val(),
                password: $("#password").val()
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