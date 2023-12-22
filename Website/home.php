<?php
$title = "Home";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}
?>

<?php echo PageBuilder::buildHeader(); ?>

<link rel="stylesheet" href="/css/page___532f8fc30ac54e7ea2b94313bac1040e_m.css" />
<link rel="stylesheet" href="/css/page___91a92cde8068f8f83e91716d43aef526_m.css" />

<div class=content>
    <div id=HomeContainer class="row home-container">
        <div class="col-xs-12 home-header">
            <a href="/users/<?= $_SESSION["user"]["id"] ?>/profile" class="avatar avatar-headshot-lg">
                <img alt="avatar" src="/api/getProfilePicture?id=<?= $_SESSION["user"]["id"] ?>" id="home-avatar-thumb" class="avatar-card-image">
            </a>
            <div class="home-header-content non-bc">
                <h1><a href="/users/<?= $_SESSION["user"]["id"] ?>/profile"> Hello, <?= htmlspecialchars($_SESSION["user"]["username"]) ?>! </a></h1>
            </div>
        </div>
        <div id="people-list-container" people-list-container></div>
        <div id="places-list-container" ng-hide=isPlacesListNotAvailable>
            <div class="col-xs-12 container-list places-list-placeholder" ng-hide="isPlacesListLoaded"><span class="spinner spinner-default"></span></div>
            <div places-list-container></div>
        </div>
    </div>
</div>


<?php echo PageBuilder::buildFooter(); ?>