<?php
$title = "Search";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$query = htmlspecialchars(isset($_GET["q"]) ? $_GET["q"] : "");
$page = isset($_GET["page"]) ? $_GET["page"] : 1;

$users = null;
$games = null;
$totalpages = 0;

$searchType = isset($_GET["type"]) ? $_GET["type"] : "game";

if ($searchType == "game") {
    $gameclass = new Game;

    $gamestotal = $gameclass::searchTotal($query);

    $totalpages = ceil($gamestotal / 10);

    $offset = ($page - 1) * 10;

    $games = $gameclass::search($query, 10, $offset);
} else {
    $userclass = new User;

    $userstotal = $userclass::searchTotal($query);

    $totalpages = ceil($userstotal / 10);

    $offset = ($page - 1) * 10;

    $users = $userclass::search($query, 10, $offset);
}

?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="container">
    <h1>Searching for <?= $query ?> in <?= $searchType === "game" ? "games" : "users" ?></h1>
    <div class="<?= $searchType === "game" ? "games-search-list gap-2 flex-wrap d-flex bg-body-secondary rounded" : "row" ?>">
        <?php if ($searchType === "game") { ?>
            <?php foreach ($games as $game) { ?>
                <div class="game-search-item p-3 m-0 position-relative text-body text-decoration-none" style="max-width: 180px;">
                    <div data-testid="game-tile">
                        <a class="game-card-link" href="/games/<?= htmlspecialchars($game["id"]) ?>">
                            <span class="thumbnail-2d-container game-card-thumb-container rounded">
                                <img class="rounded" src="/img/pending.png" alt="<?= htmlspecialchars($game["title"]) ?>" width="150" height="150">
                            </span>
                            <div class="game-card-name game-name-title" title="<?= htmlspecialchars($game["title"]) ?>"><?= htmlspecialchars($game["title"]) ?></div>
                            <div class="game-card-info" data-testid="game-tile-stats">
                                <span class="info-label icon-votes-gray"></span>
                                <span class="info-label vote-percentage-label">90%</span>
                                <span class="info-label icon-playing-counts-gray"></span>
                                <span class="info-label playing-counts-label">10.9K</span>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <?php foreach ($users as $user) : ?>
                <div class="user-search-item col col-12 bg-body-tertiary p-3 m-0 position-relative">
                    <div class="d-flex align-items-center">
                        <div class="profile-icon mr-3">
                            <img src="/img/pending.png" alt="Profile Icon" class="img-fluid rounded-circle" width="40" height="40">
                        </div>
                        <div>
                            <h4 class="m-0 ms-3">
                                <?= htmlspecialchars($user["username"]) ?>
                            </h4>
                            <a class="w-100 h-100 position-absolute left-0 top-0" href="/user?id=<?= htmlspecialchars($user["id"]) ?>"></a>
                        </div>
                        <div class="ms-auto z-1">
                            <button class="btn btn-primary btn-sm">Send Friend Request</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php } ?>
    </div>
    <nav aria-label="Page navigation" class="d-flex justify-content-center mt-3">
        <ul class="pagination">
            <?php for ($i = 1; $i <= $totalpages; $i++) : ?>
                <li class="page-item <?= $i == $page ? "active" : "" ?>">
                    <a class="page-link" href="/search?q=<?= $query ?>&type=<?= $searchType ?>&page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>

<?php echo PageBuilder::buildFooter(); ?>