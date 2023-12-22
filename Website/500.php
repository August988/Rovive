<?php
$title = "500 | Internal Server Error";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="content">
    <div class="request-error-page-content">
        <div class="default-error-page">
            <div class="message-container">
                <h3 class="error-title">Internal Server Error</h3>
                <h4 class="error-message">500 <span>|</span>An unexpected error occurred</h4>

            </div>
            <img src="/img/52b5e003c896c50caec4ab1027168cc6.png" class="error-image" alt="Error Image" />
            <div class="action-buttons">
                <a class="btn-primary-md btn-fixed-width" title="Go to Previous Page" onclick="history.back();return false;" href="#">Back</a>
                <a class="btn-control-md btn-fixed-width" title="Return Home" href="https://www.rovive.pro/">Home</a>
            </div>
        </div>
    </div>
</div>

<?php echo PageBuilder::buildFooter(); ?>