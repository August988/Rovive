<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/classes/game.php';

if (!isset($_GET["id"])) {
    header("Location: /home");
    exit;
}

$gameclass = new Game;
$game = $gameclass::getGame($_GET['id']);

$creator_id = 0;

if ($game) {
    header("HTTP/1.1 404 Not Found");

    $creator_id = $game["creator_id"];

    $title = $game["title"];
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$userclass = new User;

$creator = $userclass::getUser($creator_id);

?>

<?php echo PageBuilder::buildHeader(); ?>

<?php if ($game) { ?>
    <div class="container bg-body-tertiary mx-auto p-5 rounded mt-5">
        <div class="row">
            <div class="col-8">
                <img class="d-block bg-body-tertiary rounded-1 object-fit-cover img-fluid mx-auto" src="<?= $game["thumbnail"] !== "" ? $game["thumbnail"] : "/img/DefaultThumb.png" ?>" alt="site logo" width="500" style="aspect-ratio: 16/9;">
            </div>
            <div class="col-4">
                <h2><?= htmlspecialchars($game["title"]) ?></h2>
                <p>Creator: <a class="text-decoration-none" href="/user?id=<?= $game["creator_id"] ?>"><?= $creator["username"] ?></a></p>
                <button onclick="play()" type="button" class="btn btn-lg mt-5 btn-success d-block mx-auto" style="width: 50%;">Play</button>
            </div>
        </div>
    </div>
    <div class="container bg-body-tertiary mx-auto p-2 rounded mt-2">
        <ul class="nav justify-content-center nav-underline" id="tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="gamepasses-tab" data-bs-toggle="tab" href="#gamepasses" role="tab" aria-controls="gamepasses" aria-selected="false">Game Passes</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="servers-tab" data-bs-toggle="tab" href="#servers" role="tab" aria-controls="servers" aria-selected="false">Servers</a>
            </li>
        </ul>
    </div>
    <div class="container bg-body-tertiary mx-auto p-5 rounded mt-2">
        <div class="tab-content" id="tabsContent">
            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                <div class="container mt-4">
                    <h2>Description</h2>
                    <p style="white-space: pre-line;">
                        <?= htmlspecialchars($game["description"]) ?>
                    </p>
                    <hr />
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <p class="fs-5">Active players</p>
                            <p>--</p>
                        </div>
                    </div>
                    <hr />
                </div>
            </div>

            <div class="tab-pane fade" id="gamepasses" role="tabpanel" aria-labelledby="gamepasses-tab">
                <!-- Game Passes Tab Content -->
                Not yet implemented.
            </div>

            <div class="tab-pane fade" id="servers" role="tabpanel" aria-labelledby="servers-tab">
                <!-- Servers Tab Content -->
                Not yet implemented.
            </div>
        </div>
    </div>
    <script>
        function play() {
            const token = "<?= $_COOKIE["_ROBLOSECURITY"] ?>"
            const placeId = <?= $game["id"] ?>;
            const launchTime = new Date().getTime();
            const launcherUrl = `http://www.rovive.pro/Game/PlaceLauncher.ashx?placeId=${placeId}`;

            const launchParams = `asylum-launcher:1+launchmode:play+gameinfo:${token}+launchtime:${launchTime}+placelauncherurl:${launcherUrl}+browsertrackerid:false+robloxLocale:en_us+gameLocale:en_us`;

            window.location.href = launchParams;
        }
    </script>
    </div>
<?php } else { ?>
    <div class="container mt-3 bg-body-tertiary p-3 rounded">
        <h1>Error 404</h1>
        <p>This game does not exist or has been deleted</p>
    </div>
<?php } ?>

<?php echo PageBuilder::buildFooter(); ?>