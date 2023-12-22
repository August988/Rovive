<?php
$title = "404 | Page Not Found";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="content">
    <div class="request-error-page-content">
        <div class="default-error-page">
            <div class="message-container">
                <h3 class="error-title">Page cannot be found or no longer exists</h3>
                <h4 class="error-message">404 <span>|</span>Page Not found</h4>

            </div>
            <img src="/img/9281912c23312bc0d08ab750afa588cc.png" class="error-image" alt="Error Image" />
            <div class="action-buttons">
                <a class="btn-primary-md btn-fixed-width" title="Go to Previous Page" onclick="history.back();return false;" href="#">Back</a>
                <a class="btn-control-md btn-fixed-width" title="Return Home" href="https://www.rovive.pro/">Home</a>
            </div>
        </div>
    </div>
</div>

<?php echo PageBuilder::buildFooter(); ?>