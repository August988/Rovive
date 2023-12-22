<?php
$title = "403 | Access Denied";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="content">
    <div class="request-error-page-content">
        <div class="default-error-page">
            <div class="message-container">
                <h3 class="error-title">Access Denied</h3>
                <h4 class="error-message">403 <span>|</span>You don&#39;t have permission to view this page</h4>

            </div>
            <img src="/img/efd096773732e26a1833ea227d088e3b.png" class="error-image" alt="Error Image" />
            <div class="action-buttons">
                <a class="btn-primary-md btn-fixed-width" title="Go to Previous Page" onclick="history.back();return false;" href="#">Back</a>
                <a class="btn-control-md btn-fixed-width" title="Return Home" href="https://www.rovive.pro/">Home</a>
            </div>
        </div>
    </div>
</div>

<?php echo PageBuilder::buildFooter(); ?>