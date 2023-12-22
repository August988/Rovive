<?php
$title = "Develop";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}

$page = "overview";
?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="container mt-5 p-3 bg-body-secondary rounded shadow">
    <h2>Develop</h2>
    <hr>
    <div class="d-flex align-items-start">
        <?php include_once "sidebar.php" ?>
        <div>
            <div class="mini-stats-table">
                <h4>Statistics</h4>
                <table class="table">
                    <tr>
                        <td>Total Games</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Gamepasses</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Catalog Items</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Total Games Visits</td>
                        <td>0</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php echo PageBuilder::buildFooter(); ?>