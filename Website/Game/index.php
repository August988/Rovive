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
<div class="container bg-white mx-auto p-5 rounded mt-5">
    <div class="row">
        <div class="col-8">
            <img class="d-block bg-body-tertiary rounded-1 object-fit-cover img-fluid mx-auto" src="<?= $game["thumbnail"] !== "" ? $game["thumbnail"] : "/img/DefaultThumb.png" ?>" alt="site logo" width="500" style="aspect-ratio: 16/9;">
        </div>
        <div class="col-4">
            <h2><?= htmlspecialchars($game["title"]) ?></h2>
            <p>Creator: <a class="text-decoration-none" href="/user?id=<?= $game["creator_id"] ?>"><?= $creator["username"] ?></a></p>
            <button onclick="play()" type="button" class="btn btn-lg mt-5 btn-success d-block mx-auto" style="width: 50%;">Play</button>
            <button onclick="window.location.href='games/start?placeid=1';" type="button" class="btn btn-lg mt-5 btn-success d-block mx-auto" style="width: 50%;">Play (mobile edition, does not work)</button>
        </div>
    </div>

    
    <ul class="nav nav-tabs mt-4" id="myTabs" role="tablist">
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
    
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">   
    
    <div class="container mt-4">
        <h2>Description</h2>
        <p style="white-space: pre-line;">
            <?= htmlspecialchars($game["description"]) ?>
        </p>
    </div>
        
      <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Game Details</h5>
            <ul class="list-unstyled">
                <li><strong>Active:</strong> 0</li>
                <li><strong>Favorites:</strong> 0</li>
                <li><strong>Visits:</strong> 0</li>
                <li><strong>Created:</strong> 7/23/2023</li>
                <li><strong>Updated:</strong> 8/1/2023</li>
                <li><strong>Server Size:</strong> 50</li>
                <li><strong>Genre:</strong>Unknown</li>
            </ul>
        </div>
    </div>
      
        <div class="tab-pane fade" id="gamepasses" role="tabpanel" aria-labelledby="gamepasses-tab">
            <!-- Game Passes Tab Content -->
        </div>
        
        <div class="tab-pane fade" id="servers" role="tabpanel" aria-labelledby="servers-tab">
            <!-- Servers Tab Content -->
        </div>
    </div>
</div>
<script>
    function play() {
        const token = "<?= $_COOKIE["token"] ?>"
        const placeId = <?= $game["id"] ?>;
        const launchTime = new Date().getTime();
        const launcherUrl = `http://www.rovive.pro/Game/PlaceLauncher.ashx?placeId=${placeId}`;
        
        const launchParams = `nonerev-launcher:1+launchmode:play+gameinfo:${token}+launchtime:${launchTime}+placelauncherurl:${launcherUrl}+browsertrackerid:false+robloxLocale:en_us+gameLocale:en_us`;
        
        window.location.href = launchParams;
    }
</script>

<?php } else { ?>
    <h1 class="text-center"></h1>Game not found</h1>
<?php } ?>

<?php echo PageBuilder::buildFooter(); ?>
