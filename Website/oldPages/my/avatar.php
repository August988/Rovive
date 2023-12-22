<?php
$title = "Settings";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/classes/about.php';



if (!isset($_SESSION["avatar"])) {
    header("Location: /");
    exit;
}
?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="container mt-5 p-3 bg-body-secondary rounded shadow">
    <h2>Settings</h2>
    <hr>
    <div class="row">
        <div class="col-8 d-flex align-items-center">
            <h4 class="m-0">Change password: </h4>
        </div>
        <div class="col-4 d-flex align-items-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                Change password
            </button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-8 d-flex align-items-center">
            <h4 class="m-0">Change bio: </h4>
        </div>
        <div class="col-4 d-flex align-items-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changeBioModal">
                Change bio
            </button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-8 d-flex align-items-center">
            <h4 class="m-0">Generate invite key: </h4>
        </div>
        <div class="col-4 d-flex align-items-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#generateInviteKey">
                Generate
            </button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-8 d-flex align-items-center">
            <h4 class="m-0">Change email: </h4>
        </div>
        <div class="col-4 d-flex align-items-center">
            <p>Email: <?= isset($_SESSION["user"]["email"]) || $_SESSION["user"]["email"] != "" ? $_SESSION["user"]["email"] : "N/A" ?></p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changeEmail">
                Change
            </button>
        </div>
    </div>

    <div class="modal fade" id="changeBioModal" tabindex="-1" aria-labelledby="changeBioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeBioModalLabel">Change bio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/settings/changepassword" method="post">
                        <div class="mb-3">
                            <label for="newBio" class="form-label">Bio</label>
                            <input type="text" class="form-control" id="newBio" name="newBio">
                        </div>
                        <button type="submit" class="btn btn-primary">Change Bio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Change password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/settings/changepassword" method="post">
                        <div class="mb-3">
                            <label for="currentPassword" class="form-label">Current password</label>
                            <input type="password" class="form-control" id="currentPassword" name="currentPassword">
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">New password</label>
                            <input type="password" class="form-control" id="newPassword" name="newPassword">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Change password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="generateInviteKey" tabindex="-1" aria-labelledby="generateInviteKeyLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="generateInviteKeyLabel">Generate invite key</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/settings/generateinvitekey" method="post">
                        <div class="mb-3">
                            <label for="inviteKey" class="form-label">Invite key</label>
                            <input type="text" class="form-control" id="inviteKey" name="inviteKey" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Generate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="changeEmail" tabindex="-1" aria-labelledby="changeEmailLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeEmailLabel">Change email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/settings/changeemail" method="post">
                        <div class="mb-3">
                            <label for="newEmail" class="form-label">New email</label>
                            <input type="email" class="form-control" id="newEmail" name="newEmail">
                        </div>
                        <button type="submit" class="btn btn-primary">Change email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

</script>

<?php echo PageBuilder::buildFooter(); ?>