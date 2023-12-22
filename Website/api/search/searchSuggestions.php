<?php

$query = $_GET["q"];

?>

<li class="navbar-search-option position-relative m-0 p-2">
    <a href="/search?q=<?= $query ?>" class="text-body text-decoration-none">
        <span><i class="bi bi-controller"></i></span>
        <span><?= htmlspecialchars($query) ?></span>
        <span>in Games</span>
    </a>
</li>
<li class="navbar-search-option position-relative m-0 p-2">
    <a href="/search?q=<?= $query ?>&type=user" class="text-body text-decoration-none">
        <span><i class="bi bi-person"></i></span>
        <span><?= htmlspecialchars($query) ?></span>
        <span>in Users</span>
    </a>
</li>      
<li class="navbar-search-option position-relative m-0 p-2">
    <a href="/search?q=<?= $query ?>&type=library" class="text-body text-decoration-none">
        <span><i class="bi bi-book"></i></span>
        <span><?= htmlspecialchars($query) ?></span>
        <span>in Library</span>
    </a>
</li>
<li class="navbar-search-option position-relative m-0 p-2">
    <a href="/search?q=<?= $query ?>&type=groups" class="text-body text-decoration-none">
        <span><i class="bi bi-people"></i></span>
        <span><?= htmlspecialchars($query) ?></span>
        <span>in Groups</span>
    </a>
</li>
<li class="navbar-search-option position-relative m-0 p-2">
    <a href="/search?q=<?= $query ?>&type=catalog" class="text-body text-decoration-none">
        <span><i class="bi bi-shop"></i></span>
        <span><?= htmlspecialchars($query) ?></span>
        <span>in Catalog</span>
    </a>
</li>



