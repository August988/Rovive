<?php
$title = "Admin Panel";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$userclass = new User;

$adminlevel = 0;

if (isset($_SESSION["user"])) {
    $user = $userclass::getUser($_SESSION["user"]["id"]);
    $adminlevel = $user["admin"];

    if ($adminlevel < 1) {
        header("Location: /");
        exit;
    }
} else {
    header("Location: /");
    exit;
}

$limit = 10;

$page = isset($_GET["page"]) ? $_GET["page"] : 1;

$offset = ($page - 1) * $limit;

$totalpages = $pdo->prepare("SELECT COUNT(*) FROM users WHERE ongoing_action_id IS NOT NULL");
$totalpages->execute();
$totalpages = $totalpages->fetchColumn();

$totalpages = ceil($totalpages / $limit);

$stmt = $pdo->prepare("SELECT * FROM users WHERE ongoing_action_id IS NOT NULL ORDER BY id DESC LIMIT :limit OFFSET :offset");
$stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
$stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
$stmt->execute();

$users = $stmt->fetchAll();


$actionToType = [
    1 => "Warning",
    2 => "Ban for 1 day",
    3 => "Ban for 3 days",
    4 => "Ban for 7 days",
    5 => "Ban for 14 days",
    6 => "Account deletion"
];


function getCurrentModerationActionTypeInText($id)
{
    global $pdo;
    global $actionToType;

    $stmt = $pdo->prepare("SELECT action FROM moderation_actions WHERE user_id = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    return $actionToType[$stmt->fetchColumn()];
}

function getCurrentModerationActionReasonInText($id)
{
    global $pdo;

    $stmt = $pdo->prepare("SELECT reason FROM moderation_actions WHERE user_id = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchColumn();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["undoAction"]) && isset($_POST["userid"])) {
    $stmt = $pdo->prepare("UPDATE users SET ongoing_action_id = NULL WHERE id = :id");
    $stmt->bindParam(":id", $_POST["userid"], PDO::PARAM_INT);
    $stmt->execute();

    $stmt = $pdo->prepare("DELETE FROM moderation_actions WHERE user_id = :id");
    $stmt->bindParam(":id", $_POST["userid"], PDO::PARAM_INT);
    $stmt->execute();

    header("Location: " . $_SERVER["REQUEST_URI"]);
}



?>

<?php echo PageBuilder::buildHeader(); ?>
<?php echo PageBuilder::buildAdminNavbar(); ?>

<div class="container">
    <h1 class="mt-3">Account moderation actions overview</h1>


    <div class="row">
        <div class="col">
            <?php foreach ($users as $user) : ?>
                <div class="user-search-item col col-12 bg-body-tertiary p-3 m-0 position-relative">
                    <h4 class="m-0">
                        <?= htmlspecialchars($user["username"]) ?>
                    </h4>
                    <p>
                        Type: <?= getCurrentModerationActionTypeInText($user["id"]); ?>
                    </p>
                    <p>
                        Reason: <?= getCurrentModerationActionReasonInText($user["id"]); ?>
                    </p>
                    <form method="POST">
                        <input type="hidden" name="userid" value="<?= htmlspecialchars($user["id"]) ?>">
                        <button type="submit" class="btn-secondary-md" name="undoAction">Undo action</button>
                    </form>
                </div>
            <?php endforeach; ?>
            <?php if (empty($users)) : ?>
                <p>No users currently are ongoing moderation action</p>
            <?php endif; ?>
            <nav aria-label="Page navigation" class="mt-3 d-flex justify-content-center">
                <ul class="pagination">
                    <?php for ($i = 1; $i <= $totalpages; $i++) : ?>
                        <li class="page-item <?= $page == $i ? "active" : "" ?>">
                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>

</div>

<?php echo PageBuilder::buildFooter(); ?>