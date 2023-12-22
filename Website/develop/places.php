<?php
$title = "Develop";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}

$page = "places";
?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="container mt-5 p-3 bg-body-secondary rounded shadow">
    <h2>Develop</h2>
    <hr>
    <div class="d-flex align-items-start">
        <?php
        include_once "sidebar.php";

        // Ensure that you validate and sanitize user data before using it
        $creatorId = $_SESSION["user"]["id"];

        $stmt = $pdo->prepare("SELECT * FROM games WHERE creator_id = :creator_id");
        $stmt->bindParam(":creator_id", $creatorId, PDO::PARAM_INT);
        $stmt->execute();

        $games = $stmt->fetchAll();

        foreach ($games as $game) {
        ?>
            <div class="game-search-item p-3 m-0 position-relative" style="max-width: 180px;">
                <div data-testid="game-tile">
                    <a class="game-card-link" href="/games/<?= $game["id"] ?>">
                        <span class="d-block thumbnail-2d-container game-card-thumb-container rounded" style="width: fit-content; height: fit-content;">
                            <img class="rounded bg-secondary" src="<?= $game["icon"] !== "" ? $game["icon"] : "/img/DefaultPlaceIcon.jpg" ?>" alt="<?= htmlspecialchars($game["title"]) ?>" width="150" height="150">
                        </span>
                        <div class="game-card-name game-name-title" title="<?= htmlspecialchars($game["title"]) ?>"><?= htmlspecialchars($game["title"]) ?></div>
                        <div class="game-card-info" data-testid="game-tile-stats">
                            <span class="info-label"><i class="bi bi-hand-thumbs-up"></i></span>
                            <span class="info-label">--%</span>
                            <span class="info-label"><i class="bi bi-person"></i></span>
                            <span class="info-label">--</span>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php echo PageBuilder::buildFooter(); ?>