<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/classes/user.php';

$userid = isset($_GET["id"]) ? $_GET["id"] : 0;

$userclass = new User;
$user = $userclass::getUser($userid);

if ($user) {
    $title =  $user["username"] . "'s Profile";
} else {
    header("HTTP/1.1 404 Not Found");
    $title = "404 Not Found";
}


include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$gameclass = new Game;

$games = $gameclass::getGamesByUserId($userid);

?>

<?php echo PageBuilder::buildHeader(); ?>

<?php if ($user) { ?>
    <div class="container mt-3 bg-body-secondary p-3 rounded">
        <div class="p-2 d-flex align-items-center position-relative">
            <img class="bg-body-tertiary rounded-circle object-fit-cover" src="/img/pending.png" alt="site logo" width="150" height="150">
            <h2 class="ms-3"><?= htmlspecialchars($user["username"]) ?> </h2>
            <div class="d-flex align-items-center position-absolute end-0 gap-2">
                <button type="button" class="btn btn-warning">Follow</button>
                <button type="button" class="btn btn-primary">Friend</button>
            </div>
        </div>
    </div>

    <div class="container mt-5 bg-body-secondary p-3 rounded">
        <ul class="nav nav-underline d-flex justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="true">About</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="creations-tab" data-bs-toggle="tab" data-bs-target="#creations-tab-pane" type="button" role="tab" aria-controls="creations-tab-pane" aria-selected="false">Creations</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                <h2 class="mt-3">About</h2>
                <p style="white-space: pre-line;">
                    <?= $user["about"] != "" ? htmlspecialchars($user["about"]) : "Hi! I'm new to Asylum!" ?>
                </p>
            </div>
            <div class="tab-pane fade" id="creations-tab-pane" role="tabpanel" aria-labelledby="creations-tab" tabindex="0">
                <h2 class="mt-3">Creations</h2>
                <div class="games-list d-flex bg-body-secondary rounded">
                    <?php foreach ($games as $game) : ?>
                        <div class="game-search-item p-3 m-0 position-relative" style="max-width: 180px;">
                            <div data-testid="game-tile">
                                <a class="game-card-link" href="/games/<?= $game["id"] ?>">
                                    <span class="d-block thumbnail-2d-container game-card-thumb-container rounded" style="width: fit-content; height: fit-content;">
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
                    <?php endforeach; ?>
                    <?php if (empty($games)) : ?>
                        <h4 class="text-center">No games found</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php } else { ?>
    <h1 class="text-center"></h1>User not found</h1>
<?php } ?>

<?php echo PageBuilder::buildFooter(); ?>
