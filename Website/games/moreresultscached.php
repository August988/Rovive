<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

// Parse query string parameters
$sortFilter = isset($_GET['SortFilter']) ? intval($_GET['SortFilter']) : 1;
$timeFilter = isset($_GET['TimeFilter']) ? intval($_GET['TimeFilter']) : 0;
$regionFilter = isset($_GET['RegionFilter']) ? $_GET['RegionFilter'] : '';
$genreID = isset($_GET['GenreID']) ? intval($_GET['GenreID']) : 1;
$gameFilter = isset($_GET['GameFilter']) ? intval($_GET['GameFilter']) : 1;
$minBCLevel = isset($_GET['MinBCLevel']) ? intval($_GET['MinBCLevel']) : 0;
$maxRows = isset($_GET['MaxRows']) ? intval($_GET['MaxRows']) : 10;

// Calculate the limit and offset based on MaxRows and StartRows
$limit = $maxRows;
$offset = isset($_GET['StartRows']) ? intval($_GET['StartRows']) : 0;

// Create an instance of the Game class
$gameclass = new Game;

// Use the query string parameters and calculated limit/offset values
$games = $gameclass->getPopularGames($limit, $offset);

$userclass = new User;
function getCreatorName($id) {
    global $userclass;
    return $userclass->getUser($id)["username"];
}


?>

<div class="hidden-item hidden" id=keyword></div>
<div class="hidden-item hidden" id=gamesListResponseModel data-next-page-start="<?= $offset ?>"></div>

<?php foreach ($games as $game) {
    $title = $game['title'];
    $creator_name = getCreatorName($game['creator_id']);
    if (strlen($title) > 30) {
        $title = substr($title, 0, 30) . '...';
    }
    if (strlen($creator_name) > 15) {
        $creator_name = substr($creator_name, 0, 30) . '...';
    }

    $thumb = $game["icon"] == "" ? "/img/DefaultPlaceIcon.jpg" : $game["icon"];
?>
    <li class="list-item game-card">
        <div class=game-card-container> <a href="/games/<?= $game['id'] ?>" class=game-card-link>
                <div class=game-card-thumb-container> <img class="game-card-thumb" src="<?= $thumb ?>"> </div>
                <div class="text-overflow game-card-name" title="<?= htmlspecialchars($title) ?>" ng-non-bindable><?= htmlspecialchars($title) ?></div>
                <div class=game-card-name-secondary>-- Playing</div>
                <div class=game-card-vote>
                    <div class=vote-bar data-voting-processed=false>
                        <div class=vote-thumbs-up> <span class=icon-like-gray-16x16></span> </div>
                        <div class=vote-container data-upvotes=0 data-downvotes=0>
                            <div id=vote-background class=vote-background></div>
                            <div class=vote-percentage></div>
                            <div class=vote-mask>
                                <div class="segment seg-1"></div>
                                <div class="segment seg-2"></div>
                                <div class="segment seg-3"></div>
                                <div class="segment seg-4"></div>
                            </div>
                        </div>
                        <div class=vote-thumbs-down> <span class=icon-dislike-gray-16x16></span> </div>
                    </div>
                    <div class=vote-counts>
                        <div id=vote-down-count class=vote-down-count>0</div>
                        <div id=vote-up-count class=vote-up-count>0</div>
                    </div>
                </div>
            </a>
            <div class=game-card-footer>
                <div class=creator> <span class="text-label xsmall text-overflow"> By <a class=text-link href="/users/<?= $game['creator_id'] ?>/profile" ng-non-bindable><?= htmlspecialchars($creator_name) ?></a> </span> </div>
            </div>
        </div>
    </li>
<?php } ?>