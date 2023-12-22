<?php
$title = "Not Approved";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$userclass = new User;

$accountAction = $userclass->getAccountAction($_SESSION["user"]["id"]);

$actionToType = [
    1 => "Warning",
    2 => "Ban for 1 Day",
    3 => "Ban for 3 Days",
    4 => "Ban for 7 Days",
    5 => "Ban for 14 Days",
    6 => "Account Deleted"
];

$type = $actionToType[$accountAction["action"]];

if (!isset($_SESSION["user"]) && !isset($_SESSION["user"][""])) {
    header("Location: /");
    exit;
}

if (isset($_GET["logout"])) { // since the user cannot access anything else than this page
    require_once "logout.php";
    exit;
}

$canReactivate = false;

$expires = $accountAction["expiresAt"];

if ($expires < time() && $accountAction["action"] != 6) {
    $canReactivate = true;
}

if (isset($_GET["reactivate"]) && $canReactivate) {
    $userclass->removeModeration($_SESSION["user"]["id"]);
    header("Location: /home");
    exit;
}

?>

<?php echo PageBuilder::buildHeader(); ?>

<link rel="stylesheet" href="/css/page___54a90a103086d5ffeb5549d4d9d1c1c5_m.css">

<div class="content">
    <div class="not-approved-page-content">
        <div class="not-approved-page" <?php if ($accountAction["action"] == 1 || $canReactivate) { ?>style="height: 32em;" <?php } ?>>
            <div class="message-container">

                <h3 class="error-title"><?= $type ?></h3>
                <p class="message-section">Our content monitors have determined that your behavior at Roblox has
                    been in violation of our <a href="/info/terms" target="_blank">Terms
                        of Use</a>.</p>
                <p class="message-section" id="punishment-created">Reviewed: <b><?= date("d/m/Y H:i", $accountAction["createdAt"]) ?></b> (UTC)</p>

                <div class="punishment-section">
                    <p class="message-section">Reason: <b><?= htmlspecialchars($accountAction["reason"]) ?></b></p>
                </div>


                <p class="message-section" id="punishment-description">
                    <?php if ($accountAction["action"] == 1 || $canReactivate) { ?>
                        You may re-activate your account by agreeing to our Terms of Service.
                    <?php } elseif ($accountAction["action"] == 6) { ?>
                        Your account has been terminated.
                    <?php } else { ?>
                        Your account has been disabled. You may re-activate it after <?= date("d/m/Y H:i", $expires) ?> (UTC).
                    <?php } ?>
                </p>


                <p class="message-section">If you wish to appeal, please contact us via the <a href="/discord" target="_blank" rel="noopener noreferrer">discord server</a>.</p>

            </div>
            <div class="action-buttons">
                <?php if ($canReactivate || $accountAction["action"] == 1) { ?>
                    <div>
                        <style>
                            .checkbox-container {
                                position: relative;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                margin-bottom: 5px;
                                margin-left: auto;
                                margin-right: auto;
                                text-align: center;
                                gap: 5px;
                            }
                        </style>
                        <div class="checkbox-container">
                            <input type="checkbox" id="agreeCheckbox" name="checkbox" value="1">
                            <label for="agreeCheckbox"> I Agree</label>
                        </div>
                        <button type="button" class="btn-control-md btn-min-width" id="reactivate-button">Reactivate My Account</button><br>
                        <a type="button" class="btn-control-md btn-min-width" href="?logout">Logout</a>
                    </div>
                    <script>
                        const agreeCheckbox = document.getElementById('agreeCheckbox');
                        const reactivateButton = document.getElementById('reactivate-button');
                        reactivateButton.disabled = true;
                        agreeCheckbox.addEventListener('change', (event) => {
                            reactivateButton.disabled = !event.target.checked;
                        });
                        reactivateButton.addEventListener('click', () => {
                            window.location.href = '?reactivate';
                        });
                    </script>
                <?php } else { ?>
                    <div>
                        <a type="button" class="btn-control-md btn-min-width" href="?logout">Logout</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php echo PageBuilder::buildFooter(); ?>