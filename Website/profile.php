<?php

if (str_ends_with($_SERVER['REQUEST_URI'], 'inventory')) {
    require_once "inventory.php";
    exit;
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$userid = isset($_GET["id"]) ? intval($_GET["id"]) : 0;

$userclass = new User;
$user = $userclass::getUser($userid);

if ($user) {
    $title =  $user["username"] . "'s Profile";
} else {
    header("HTTP/1.1 404 Not Found");
    $title = "404 Not Found";
}

$gameclass = new Game;

$games = $gameclass::getGamesByUserId($userid);

// TODO: make this dynamic

$followersCount = 0;
$followingsCount = 0;
$friendsCount = 0;
$usermembership = 0;

$badgescount = 11;

?>

<?php echo PageBuilder::buildHeader(); ?>

<link rel="stylesheet" href="/css/page___9b1354f6392e505305c1aa8a1f7931d6_m.css" />
<script type='text/javascript' src='/js/86411e39f51e0ef39c7fa2f1f92fe7b3.js'></script>

<div class="content">
    <script type="text/javascript">
        var Roblox = Roblox || {};
    </script>

    <div class="profile-container" ng-modules="robloxApp, profile, robloxApp.helpers">


        <div class="section profile-header">

            <div class="section-content profile-header-content" ng-controller="profileHeaderController">



                <div data-userid="<?= $userid ?>" data-profileuserid="<?= $userid ?>" data-profileusername="<?= htmlspecialchars($user["username"]) ?>" data-friendscount="0" data-followerscount="0" data-followingscount="0" data-acceptfriendrequesturl="/api/friends/acceptfriendrequest" data-incomingfriendrequestid="0" data-arefriends="false" data-friendurl="https://www.rovive.pro/users/
                                                                <?= $userid ?>/friends#!/friends" data-incomingfriendrequestpending="false" data-maysendfriendinvitation="false" data-sendfriendrequesturl="/api/friends/sendfriendrequest" data-removefriendrequesturl="/api/friends/removefriend" data-mayfollow=false data-isfollowing=false data-followurl="/user/follow" data-unfollowurl="/api/user/unfollow" data-canmessage=false data-messageurl="/messages/compose?recipientId=<?= $userid ?>" data-canbefollowed=false data-cantrade=false data-isblockbuttonvisible="false" data-getfollowscript="Roblox.GameLauncher.followPlayerIntoGame(
                                                                <?= $userid ?>);" data-ismorebtnvisible="true" data-isvieweeblocked="false" data-mayimpersonate="false" data-impersonateurl="" data-mayupdatestatus="false" data-updatestatusurl="" data-statustext="" data-editstatusmaxlength=" 254" data-isfriendshiprealtimeupdateenabled="true" data-getfriendshipcounturl="https://api.rovive.pro/user/get-friendship-count" data-inapp="false" data-isAndroid="false" profile-header-data profile-header-layout="profileHeaderLayout" class="hidden"></div>
                <div class="profile-header-top">
                    <div class="avatar avatar-headshot-lg card-plain profile-avatar-image">
                        <span class="avatar-card-link avatar-image-link">
                            <img alt="<?= htmlspecialchars($user["username"]) ?>" class="avatar-card-image profile-avatar-thumb" ng-src="{{ '/api/getProfilePicture?id=<?= $userid ?>' }}" src="/api/getProfilePicture?id=<?= $userid ?>" thumbnail='{"Final":true,"Url":"/api/getProfilePicture?id=<?= $userid ?>","RetryUrl":null}' image-retry>
                        </span>
                        <div ng-non-bindable>
                            <span class="avatar-status <%= icon %> profile-avatar-status icon-<%= icon %>" title="<%= icontitle %>"></span>
                        </div>
                    </div>

                    <div class="header-caption">
                        <div class="header-title">
                            <h2>
                                <?= htmlspecialchars($user["username"]) ?>
                            </h2>
                            <?php if ($usermembership == 1) { ?>
                                <span class="icon-bc" style="position: relative; top: 0.175em;"></span>
                            <?php } elseif ($usermembership == 2) { ?>
                                <span class="icon-tbc" style="position: relative; top: 0.175em;"></span>
                            <?php } elseif ($usermembership == 3) { ?>
                                <span class="icon-obc" style="position: relative; top: 0.175em;"></span>
                            <?php } ?>
                        </div>
                        <style>
                            .header-details a {
                                display: inline !important;
                            }
                        </style>
                        <div class="header-details">
                            <ul class="details-info">
                                <li>
                                    <div class="text-label">Friends</div>
                                    <a class="text-name" href="https://www.rovive.pro/users/<?= $userid ?>/friends#!/friends" ng-cloak>
                                        <h3>
                                            <?= $friendsCount ?>
                                        </h3>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-label">Followers</div>
                                    <a class="text-name" href="https://www.rovive.pro/users/<?= $userid ?>/friends#!/followers" ng-cloak>
                                        <h3>
                                            <?= $followersCount ?>
                                        </h3>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-label">Following</div>
                                    <a class="text-name" href="https://www.rovive.pro/users/<?= $userid ?>/friends#!/following" ng-cloak>
                                        <h3>
                                            <?= $followingsCount ?>
                                        </h3>
                                    </a>
                                </li>
                            </ul>
                            <ul class="details-actions desktop-action">
                                <li class="btn-friends" ng-if="!profileHeaderLayout.areFriends" ng-cloak>
                                    <button ng-if="profileHeaderLayout.incomingFriendRequestPending" ng-cloak class="btn-control-md" data-target-url="/api/friends/acceptfriendrequest" data-friend-request-id="0" data-target-user-id="<?= $userid ?>" data-friends-url="https://www.rovive.pro/users/<?= $userid ?>/friends#!/friends" ng-click="acceptFriendRequest()">
                                        Accept
                                    </button>
                                    <button ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                                && profileHeaderLayout.maySendFriendInvitation" ng-cloak class="btn-control-md" ng-click="sendFriendRequest()">
                                        Add Friend
                                    </button>
                                    <button ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                            && !profileHeaderLayout.maySendFriendInvitation
                                            && profileHeaderLayout.friendRequestPending" ng-cloak class="btn-control-md disabled">
                                        Pending
                                    </button>
                                    <button ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                            && !profileHeaderLayout.maySendFriendInvitation
                                            && !profileHeaderLayout.friendRequestPending" ng-cloak class="btn-control-md disabled" disabled="disabled">
                                        Add Friend
                                    </button>
                                </li>
                                <li class="btn-friends" ng-if="profileHeaderLayout.areFriends" ng-cloak>
                                    <button class="btn-control-md" id="unfriend-btn" data-target-url="/api/friends/removefriend" data-target-user-id="<?= $userid ?>" ng-mouseenter="hover = true" ng-mouseleave="hover =false" ng-class="{'btn-unfollow': hover}" ng-click="removeFriend()">
                                        Unfriend
                                    </button>
                                </li>
                                <li class="btn-messages">
                                    <button class="btn-control-md" ng-disabled="!profileHeaderLayout.enableMessageBtn" ng-show="profileHeaderLayout.showMessageBtn" ng-click="sendMessage()" ng-cloak>
                                        Message
                                    </button>
                                </li>
                                <li class="btn-messages" ng-show="profileHeaderLayout.showChatBtn">
                                    <button class="btn-control-md" ng-click="chat()" ng-cloak>
                                        Message
                                    </button>
                                </li>
                                <li class="btn-join-game" ng-if="profileHeaderLayout.canBeFollowed">
                                    <button class="profile-join-game btn-primary-md" ng-cloak>
                                        Join Game
                                    </button>
                                </li>
                            </ul>
                            <ul class="details-actions mobile-action" ng-class="{'three-item-list': profileHeaderLayout.canBeFollowed}">
                                <li class="btn-friends" ng-if="!profileHeaderLayout.areFriends" ng-cloak>
                                    <a ng-if="profileHeaderLayout.incomingFriendRequestPending" ng-cloak data-target-url="/api/friends/acceptfriendrequest" data-friend-request-id="0" data-target-user-id="<?= $userid ?>" data-friends-url="https://www.rovive.pro/users/<?= $userid ?>/friends#!/friends" class="action-add-friend" ng-click="acceptFriendRequest()">
                                        <div class="icon-add-friend"></div>
                                        <div class="text-label small">Accept</div>
                                    </a>
                                    <a ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                && profileHeaderLayout.maySendFriendInvitation" class="action-add-friend" ng-cloak ng-click="sendFriendRequest()">
                                        <div class="icon-add-friend"></div>
                                        <div class="text-label small">Add Friend</div>
                                    </a>
                                    <a ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                            && !profileHeaderLayout.maySendFriendInvitation
                                            && profileHeaderLayout.friendRequestPending" ng-cloak class="action-friend-pending">
                                        <div class="icon-friend-pending"></div>
                                        <div class="text-label small">Pending</div>
                                    </a>
                                    <a ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                            && !profileHeaderLayout.maySendFriendInvitation
                                            && !profileHeaderLayout.friendRequestPending" ng-cloak class="action-friend-pending" disabled="disabled">
                                        <div class="icon-friend-pending"></div>
                                        <div class="text-label small">Add Friend</div>
                                    </a>
                                </li>
                                <li class="btn-friends" ng-if="profileHeaderLayout.areFriends" ng-cloak>
                                    <a data-target-url="/api/friends/removefriend" data-target-user-id="<?= $userid ?>" ng-mouseenter="hover = true" ng-mouseleave="hover =false" ng-class="{'btn-unfollow': hover}" ng-click="removeFriend()" class="action-remove-friend">
                                        <div class="icon-remove-friend"></div>
                                        <div class="text-label small">Unfriend</div>
                                    </a>
                                </li>
                                <li class="btn-messages center-icon" ng-if="profileHeaderLayout.showMessageBtn" ng-cloak>
                                    <div ng-if="!profileHeaderLayout.enableMessageBtn" class="action-message-disabled" ng-cloak>
                                        <div class="icon-send-message-disabled"></div>
                                        <div class="text-label small">Message</div>
                                    </div>
                                    <a ng-if="profileHeaderLayout.enableMessageBtn" ng-click="sendMessage()" class="action-message" ng-cloak>
                                        <div class="icon-send-message"></div>
                                        <div class="text-label small">Message</div>
                                    </a>
                                </li>
                                <li class="btn-messages center-icon" ng-if="profileHeaderLayout.showChatBtn" ng-cloak>
                                    <div class="action-message-disabled" ng-click="chat()" ng-cloak>
                                        <div class="icon-start-chat"></div>
                                        <div class="text-label small">Message</div>
                                    </div>
                                </li>
                                <li class="btn-join-game last-icon" ng-if="profileHeaderLayout.canBeFollowed">
                                    <a class="profile-join-game action-join-game" ng-cloak>
                                        <div class="icon-join-game"></div>
                                        <div class="text-label small">Join Game</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--header-details-->
                        <?php if ($userid == $_SESSION["user"]["id"]) { ?>
                            <div class="header-userstatus">
                                <div class="header-userstatus-text" ng-hide="profileHeaderLayout.statusFormShown">
                                    <span id="userStatusText" class="text-overflow" ng-class="{'userstatus-editable' : profileHeaderLayout.mayUpdateStatus}" ng-bind="profileHeaderLayout.statusText | statusfilter" ng-click="revealStatusForm()" ng-cloak></span>
                                </div>
                                <div class="form-horizontal ng-hide" id="statusForm" role="form" ng-show="profileHeaderLayout.statusFormShown" ng-class="{&#39;form-has-error&#39;: profileHeaderLayout.hasError }">
                                    <div class="form-group">
                                        <input class="form-control input-field ng-pristine ng-valid" id="txtStatusMessage" maxlength="254" placeholder="What are you up to?" ng-model="profileHeaderLayout.statusTextInput" status-input-element="" key-press-enter="updateStatus(true)" key-press-escape="blurStatusForm($event)">
                                    </div>
                                    <button class="btn-fixed-width btn-control-xs header-userstatus-share-button" ng-click="updateStatus(true)" ng-hide="profileHeaderLayout.statusFormSending">
                                        Save
                                    </button>
                                    <img id="loadingImage" class="header-userstatus-share-progress ng-hide" ng-show="profileHeaderLayout.statusFormSending" alt="Sharing..." src="/img/4bed93c91f909002b1f17f05c0ce13d1.gif">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <p ng-show="profileHeaderLayout.hasError" ng-cloak class="small text-error header-details-error">{{profileHeaderLayout.errorMsg}}
                </p>
                <div id="profile-header-more" class="profile-header-more" ng-show="profileHeaderLayout.isMoreBtnVisible" ng-cloak>
                    <a id="popover-link" class="rbx-menu-item" data-toggle="popover" data-bind="profile-header-popover-content">
                        <span class="icon-more"></span>
                    </a>
                    <div id="popover-content" class="rbx-popover-content" data-toggle="profile-header-popover-content">
                        <ul class="dropdown-menu" role="menu">
                            <li ng-hide="profileHeaderLayout.showMessageBtn">
                                <a id="profile-message" ng-click="sendMessage()" ng-cloak>
                                    Message
                                </a>
                            </li>
                            <li ng-show="profileHeaderLayout.mayFollow" ng-cloak>
                                <a ng-bind="profileHeaderLayout.isFollowing ? 'Unfollow' : 'Follow'" ng-click="follow()" id="profile-follow-user" ng-cloak></a>
                            </li>
                            <li ng-show="profileHeaderLayout.canTrade" ng-cloak><a ng-click="tradeItems()" id="profile-trade-items">Trade Items</a>
                            </li>
                            <li ng-show="profileHeaderLayout.isBlockButtonVisible" ng-cloak>
                                <a ng-bind="!profileHeaderLayout.isVieweeBlocked ? 'Block User' : 'Unblock User'" ng-click="blockUser()" id="profile-block-user" ng-cloak></a>
                            </li>
                            <li ng-show="profileHeaderLayout.mayUpdateStatus" class="">
                                <a ng-click="revealStatusForm()" id="profile-header-update-status">Update
                                    Status</a>
                            </li>
                            <li>
                                <a href="https://www.rovive.pro/users/<?= $userid ?>/inventory/">Inventory</a>
                            </li>
                            <li>
                                <a href="https://www.rovive.pro/users/<?= $userid ?>/favorites#!/places">Favorites</a>
                            </li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        $(function() {
                            $(".details-actions, .mobile-details-actions").on("click",
                                ".profile-join-game",
                                function(e) {
                                    e.preventDefault();
                                    e.stopPropagation();
                                    // NOTE: global var set due to legacy game launch code.
                                    play_placeId = 0;

                                    return false;
                                });
                        });
                    </script>
                    <div>
                        <script type="text/javascript">
                            Roblox.uiBootstrap = Roblox.uiBootstrap || {};
                            Roblox.uiBootstrap.modalBackdropTemplateLink =
                                "/viewapp/common/template/modal/backdrop.html";
                            Roblox.uiBootstrap.modalWindowTemplateLink =
                                "/viewapp/common/template/modal/window.html";
                        </script>
                    </div>
                    <div>
                        <script type="text/javascript">
                            Roblox.uiBootstrap = Roblox.uiBootstrap || {};
                            Roblox.uiBootstrap.modalBackdropTemplateLink =
                                "/viewapp/common/template/modal/backdrop.html";
                            Roblox.uiBootstrap.modalWindowTemplateLink =
                                "/viewapp/common/template/modal/window.html";
                        </script>
                    </div>
                </div>
            </div>
            <!--profile-header-content-->
        </div><!-- profile-header -->
        <div class="rbx-tabs-horizontal">
            <ul id="horizontal-tabs" class="nav nav-tabs" role="tablist">
                <li class="rbx-tab active">
                    <a class="rbx-tab-heading" href="#about" id="tab-about">
                        <span class="text-lead">About</span>
                        <span class="rbx-tab-subtitle"></span>
                    </a>
                </li>
                <li class="rbx-tab">
                    <a class="rbx-tab-heading" href="#creations" id="tab-creations">
                        <span class="text-lead">Creations</span>
                        <span class="rbx-tab-subtitle"></span>
                    </a>
                </li>
            </ul>
            <div class="tab-content rbx-tab-content">
                <div class="tab-pane active" id="about">
                    <div class="section profile-about" ng-controller="profileUtilitiesController">
                        <div class="container-header">
                            <h3>About</h3>
                        </div>
                        <div class="section-content">
                            <div class="profile-about-content">
                                <p class="para-overflow-toggle para-height para-overflow-page-loading">
                                    <span class="profile-about-content-text" ng-non-bindable></span>
                                    <span class="toggle-para">Read More</span>
                                </p>
                            </div>
                            <div class="profile-about-footer">

                                <a href="https://www.rovive.pro/abusereport/UserProfile?id=<?= $userid ?>" class="abuse-report-link">
                                    <span class="text-error">Report Abuse</span>
                                </a>


                                <div>
                                    <script type="text/javascript">
                                        Roblox.uiBootstrap = Roblox.uiBootstrap || {};
                                        Roblox.uiBootstrap.modalBackdropTemplateLink =
                                            "/viewapp/common/template/modal/backdrop.html";
                                        Roblox.uiBootstrap.modalWindowTemplateLink =
                                            "/viewapp/common/template/modal/window.html";
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if ($badgescount > 0) { ?>
                        <div class="container-header">
                            <h3>Roblox Badges (<?= $badgescount ?>)</h3>
                        </div>
                    <?php } elseif ($badgescount > 6) { ?>
                        <div class="btn-secondary-md " id="seebtn" style="width: 5.5em; height: 1.5em; float: right; margin-top: -2em;">
                            <a style="position: relative; bottom: 0.45em; font-size: 0.85em;" id="seebtnt">See More</a>
                        </div>
                        <script>
                            const btn = document.getElementById("seebtn");
                            const btnt = document.getElementById("seebtnt");
                            btn.onclick = function() {
                                const extraBadgerow = document.getElementById("badgerow-2");
                                if (btnt.innerText == "See More") {
                                    extraBadgerow.style.display = "block";
                                    btnt.innerText = "See Less";
                                } else {
                                    extraBadgerow.style.display = "none";
                                    btnt.innerText = "See More";
                                }
                            }
                        </script>
                    <?php } ?>

                    <div class="section-content">
                        <div class="row d-none d-lg-flex">
                            <div class="col-12">
                                <div class="card pt-4 pb-4 pe-4 ps-4">
                                    <ul class="hlist badge-list ng-isolate-scope" truncate="" layout-content="layoutContent" ng-class="{'badge-list-more': !layoutContent.showMore}">
                                        <li class="list-item badge-item asset-item" ng-non-bindable="">
                                            <a href="/Badges.aspx#Badge6" class="badge-link" title="Homestead">
                                                <span class="icon-homestead" title="Homestead"></span>
                                                <span class="text-overflow item-name">Homestead</span>
                                            </a>
                                        </li>
                                        <li class="list-item badge-item asset-item" ng-non-bindable="">
                                            <a href="/Badges.aspx#Badge7" class="badge-link" title="Bricksmith">
                                                <span class="icon-bricksmith" title="Bricksmith"></span>
                                                <span class="text-overflow item-name">Bricksmith</span>
                                            </a>
                                        </li>
                                        <li class="list-item badge-item asset-item" ng-non-bindable="">
                                            <a href="/Badges.aspx#Badge3" class="badge-link" title="Combat Initiation">
                                                <span class="icon-combat-initiation" title="Combat Initiation"></span>
                                                <span class="text-overflow item-name">Combat Initiation</span>
                                            </a>
                                        </li>
                                        <li class="list-item badge-item asset-item" ng-non-bindable="">
                                            <a href="/Badges.aspx#Badge12" class="badge-link" title="Veteran">
                                                <span class="icon-veteran" title="Veteran"></span>
                                                <span class="text-overflow item-name">Veteran</span>
                                            </a>
                                        </li>
                                        <li class="list-item badge-item asset-item" ng-non-bindable="">
                                            <a href="/Badges.aspx#Badge4" class="badge-link" title="Warrior">
                                                <span class="icon-warrior" title="Warrior"></span>
                                                <span class="text-overflow item-name">Warrior</span>
                                            </a>
                                        </li>
                                        <li class="list-item badge-item asset-item" ng-non-bindable="">
                                            <a href="/Badges.aspx#Badge2" class="badge-link" title="Friendship">
                                                <span class="icon-friendship" title="Friendship"></span>
                                                <span class="text-overflow item-name">Friendship</span>
                                            </a>
                                        </li>
                                        <li class="list-item badge-item asset-item" ng-non-bindable="">
                                            <a href="/Badges.aspx#Badge5" class="badge-link" title="Bloxxer">
                                                <span class="icon-bloxxer" title="Bloxxer"></span>
                                                <span class="text-overflow item-name">Bloxxer</span>
                                            </a>
                                        </li>
                                        <li class="list-item badge-item asset-item" ng-non-bindable="">
                                            <a href="/Badges.aspx#Badge8" class="badge-link" title="Inviter">
                                                <span class="icon-inviter" title="Inviter"></span>
                                                <span class="text-overflow item-name">Inviter</span>
                                            </a>
                                        </li>
                                        <li class="list-item badge-item asset-item" ng-non-bindable="">
                                            <a href="/Badges.aspx#Badge1" class="badge-link" title="Administrator">
                                                <span class="icon-administrator" title="Administrator"></span>
                                                <span class="text-overflow item-name">Administrator</span>
                                            </a>
                                        </li>
                                        <li class="list-item badge-item asset-item" ng-non-bindable="">
                                            <a href="/Badges.aspx#Badge18" class="badge-link" title="Welcome To The Club">
                                                <span class="icon-welcome-to-the-club" title="Welcome To The Club"></span>
                                                <span class="text-overflow item-name">Welcome To The Club</span>
                                            </a>
                                        </li>
                                        <li class="list-item badge-item asset-item" ng-non-bindable="">
                                            <a href="/Badges.aspx#Badge16" class="badge-link" title="Outrageous Builders Club">
                                                <span class="icon-outrageous-builders-club" title="Outrageous Builders Club"></span>
                                                <span class="text-overflow item-name">Outrageous Builders Club</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="section profile-statistics">
                        <h3>Statistics</h3>

                        <div class="section-content">
                            <ul class="profile-stats-container">
                                <li class="profile-stat">
                                    <p class="text-label">Join Date</p>
                                    <p class="text-lead">
                                        <?= date("Y-m-d", $user["created_at"]) ?>
                                    </p>
                                </li>
                                <li class="profile-stat">
                                    <p class="text-label">Place Visits</p>
                                    <p class="text-lead">
                                        0
                                    </p>
                                </li>
                                <li class="profile-stat">
                                    <p class="text-label">Forum Posts</p>
                                    <p class="text-lead">0</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="creations" profile-empty-tab>
                    <?php if (empty($games)) { ?>
                        <div class="col-xs-12 section-content-off section-content">
                            <?= htmlspecialchars($user["username"]) ?> has no creations.
                        </div>
                    <? } else { ?>
                        <div class="profile-game" ng-controller="profileGridController" ng-init="init('game-cards','game-container')">
                            <div class="container-header">
                                <h3 ng-non-bindable>Games</h3>
                                <div class="container-buttons">
                                    <button class="profile-view-selector" title="Slideshow View" type="button" ng-click="updateDisplay(false)" ng-class="{'btn-secondary-xs': !isGridOn, 'btn-control-xs': isGridOn}">
                                        <span class="icon-slideshow" ng-class="{'selected': !isGridOn}"></span>
                                    </button>
                                    <button class="profile-view-selector" title="Grid View" type="button" ng-click="updateDisplay(true)" ng-class="{'btn-secondary-xs': isGridOn, 'btn-control-xs': !isGridOn}">
                                        <span class="icon-grid" ng-class="{'selected': isGridOn}"></span>
                                    </button>
                                </div>
                            </div>
                            <div ng-show="isGridOn" class="game-grid">
                                <ul class="hlist game-cards ">


                                    <li class="list-item game-card">
                                        <div class="game-card-container">
                                            <a href="https://web.archive.org/web/20160720142050/https://www.roblox.com/games/refer?SortFilter=5&amp;PlaceId=318699760&amp;Position=1&amp;PageType=Profile" class="game-card-link">
                                                <div class="game-card-thumb-container">
                                                    <img class="game-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20160720142050im_/https://t4.rbxcdn.com/d7d40f0e67e31784482342e5616f297f" alt="Trump [Badge!!]" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t4.rbxcdn.com/d7d40f0e67e31784482342e5616f297f&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
                                                </div>
                                                <div class="text-overflow game-card-name" title="Trump [Badge!!]" ng-non-bindable="">
                                                    Trump [Badge!!]
                                                </div>
                                                <div class="game-card-name-secondary">
                                                    1 Playing
                                                </div>
                                                <div class="game-card-vote">
                                                    <div class="vote-bar">
                                                        <div class="vote-thumbs-up">
                                                            <span class="icon-thumbs-up"></span>
                                                        </div>
                                                        <div class="vote-container" data-upvotes="3591" data-downvotes="932" data-voting-processed="true">
                                                            <div class="vote-background "></div>
                                                            <div class="vote-percentage" style="width: 79%;"></div>
                                                            <div class="vote-mask">
                                                                <div class="segment seg-1"></div>
                                                                <div class="segment seg-2"></div>
                                                                <div class="segment seg-3"></div>
                                                                <div class="segment seg-4"></div>
                                                            </div>
                                                        </div>
                                                        <div class="vote-thumbs-down">
                                                            <span class="icon-thumbs-down"></span>
                                                        </div>
                                                    </div>
                                                    <div class="vote-counts">
                                                        <div class="vote-down-count">932</div>
                                                        <div class="vote-up-count">3,591</div>

                                                    </div>
                                                </div>
                                            </a>
                                            <span class="game-card-footer">
                                                <span class="text-label xsmall">By </span>
                                                <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160720142050/https://www.roblox.com/users/35245691/profile">seansy</a>
                                            </span>
                                        </div>
                                    </li>



                                    <li class="list-item game-card">
                                        <div class="game-card-container">
                                            <a href="https://web.archive.org/web/20160720142050/https://www.roblox.com/games/refer?SortFilter=5&amp;PlaceId=423092066&amp;Position=2&amp;PageType=Profile" class="game-card-link">
                                                <div class="game-card-thumb-container">
                                                    <img class="game-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20160720142050im_/https://t2.rbxcdn.com/0f9047e9fff1c910877ed4231f3d4eb6" alt="Game Development Tycoon" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t2.rbxcdn.com/0f9047e9fff1c910877ed4231f3d4eb6&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
                                                </div>
                                                <div class="text-overflow game-card-name" title="Game Development Tycoon" ng-non-bindable="">
                                                    Game Development Tycoon
                                                </div>
                                                <div class="game-card-name-secondary">
                                                    442 Playing
                                                </div>
                                                <div class="game-card-vote">
                                                    <div class="vote-bar">
                                                        <div class="vote-thumbs-up">
                                                            <span class="icon-thumbs-up"></span>
                                                        </div>
                                                        <div class="vote-container" data-upvotes="7036" data-downvotes="1129" data-voting-processed="true">
                                                            <div class="vote-background "></div>
                                                            <div class="vote-percentage" style="width: 86%;"></div>
                                                            <div class="vote-mask">
                                                                <div class="segment seg-1"></div>
                                                                <div class="segment seg-2"></div>
                                                                <div class="segment seg-3"></div>
                                                                <div class="segment seg-4"></div>
                                                            </div>
                                                        </div>
                                                        <div class="vote-thumbs-down">
                                                            <span class="icon-thumbs-down"></span>
                                                        </div>
                                                    </div>
                                                    <div class="vote-counts">
                                                        <div class="vote-down-count">1,129</div>
                                                        <div class="vote-up-count">7,036</div>

                                                    </div>
                                                </div>
                                            </a>
                                            <span class="game-card-footer">
                                                <span class="text-label xsmall">By </span>
                                                <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160720142050/https://www.roblox.com/groups/group.aspx?gid=2846643">Dominute Games</a>
                                            </span>
                                        </div>
                                    </li>



                                    <li class="list-item game-card">
                                        <div class="game-card-container">
                                            <a href="https://web.archive.org/web/20160720142050/https://www.roblox.com/games/refer?SortFilter=5&amp;PlaceId=426600052&amp;Position=3&amp;PageType=Profile" class="game-card-link">
                                                <div class="game-card-thumb-container">
                                                    <img class="game-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20160720142050im_/https://t0.rbxcdn.com/bdf34f5f68428b6c1d4b2b90c055f9bf" alt="Pinewood SCTMV" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t0.rbxcdn.com/bdf34f5f68428b6c1d4b2b90c055f9bf&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
                                                </div>
                                                <div class="text-overflow game-card-name" title="Pinewood SCTMV" ng-non-bindable="">
                                                    Pinewood SCTMV
                                                </div>
                                                <div class="game-card-name-secondary">
                                                    0 Playing
                                                </div>
                                                <div class="game-card-vote">
                                                    <div class="vote-bar">
                                                        <div class="vote-thumbs-up">
                                                            <span class="icon-thumbs-up"></span>
                                                        </div>
                                                        <div class="vote-container" data-upvotes="10" data-downvotes="1" data-voting-processed="true">
                                                            <div class="vote-background "></div>
                                                            <div class="vote-percentage" style="width: 90%;"></div>
                                                            <div class="vote-mask">
                                                                <div class="segment seg-1"></div>
                                                                <div class="segment seg-2"></div>
                                                                <div class="segment seg-3"></div>
                                                                <div class="segment seg-4"></div>
                                                            </div>
                                                        </div>
                                                        <div class="vote-thumbs-down">
                                                            <span class="icon-thumbs-down"></span>
                                                        </div>
                                                    </div>
                                                    <div class="vote-counts">
                                                        <div class="vote-down-count">1</div>
                                                        <div class="vote-up-count">10</div>

                                                    </div>
                                                </div>
                                            </a>
                                            <span class="game-card-footer">
                                                <span class="text-label xsmall">By </span>
                                                <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160720142050/https://www.roblox.com/users/2445004/profile">Momolivia</a>
                                            </span>
                                        </div>
                                    </li>



                                    <li class="list-item game-card">
                                        <div class="game-card-container">
                                            <a href="https://web.archive.org/web/20160720142050/https://www.roblox.com/games/refer?SortFilter=5&amp;PlaceId=410100789&amp;Position=4&amp;PageType=Profile" class="game-card-link">
                                                <div class="game-card-thumb-container">
                                                    <img class="game-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20160720142050im_/https://t1.rbxcdn.com/3e551476703f1e03a3634386bd37d8de" alt="Trial By Combat [ALPHA] [MAINTENENCE]" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t1.rbxcdn.com/3e551476703f1e03a3634386bd37d8de&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
                                                </div>
                                                <div class="text-overflow game-card-name" title="Trial By Combat [ALPHA] [MAINTENENCE]" ng-non-bindable="">
                                                    Trial By Combat [ALPHA] [MAINTENENCE]
                                                </div>
                                                <div class="game-card-name-secondary">
                                                    0 Playing
                                                </div>
                                                <div class="game-card-vote">
                                                    <div class="vote-bar">
                                                        <div class="vote-thumbs-up">
                                                            <span class="icon-thumbs-up"></span>
                                                        </div>
                                                        <div class="vote-container" data-upvotes="11" data-downvotes="0" data-voting-processed="true">
                                                            <div class="vote-background "></div>
                                                            <div class="vote-percentage" style="width: 100%;"></div>
                                                            <div class="vote-mask">
                                                                <div class="segment seg-1"></div>
                                                                <div class="segment seg-2"></div>
                                                                <div class="segment seg-3"></div>
                                                                <div class="segment seg-4"></div>
                                                            </div>
                                                        </div>
                                                        <div class="vote-thumbs-down">
                                                            <span class="icon-thumbs-down"></span>
                                                        </div>
                                                    </div>
                                                    <div class="vote-counts">
                                                        <div class="vote-down-count">0</div>
                                                        <div class="vote-up-count">11</div>

                                                    </div>
                                                </div>
                                            </a>
                                            <span class="game-card-footer">
                                                <span class="text-label xsmall">By </span>
                                                <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160720142050/https://www.roblox.com/users/37854398/profile">xBlueSparks</a>
                                            </span>
                                        </div>
                                    </li>



                                    <li class="list-item game-card">
                                        <div class="game-card-container">
                                            <a href="https://web.archive.org/web/20160720142050/https://www.roblox.com/games/refer?SortFilter=5&amp;PlaceId=284076212&amp;Position=5&amp;PageType=Profile" class="game-card-link">
                                                <div class="game-card-thumb-container">
                                                    <img class="game-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20160720142050im_/https://t2.rbxcdn.com/3cf6046f4f6a5112fddf4e23b55221ff" alt="Retail Tycoon 1.1.2" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t2.rbxcdn.com/3cf6046f4f6a5112fddf4e23b55221ff&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
                                                </div>
                                                <div class="text-overflow game-card-name" title="Retail Tycoon 1.1.2" ng-non-bindable="">
                                                    Retail Tycoon 1.1.2
                                                </div>
                                                <div class="game-card-name-secondary">
                                                    2,149 Playing
                                                </div>
                                                <div class="game-card-vote">
                                                    <div class="vote-bar">
                                                        <div class="vote-thumbs-up">
                                                            <span class="icon-thumbs-up"></span>
                                                        </div>
                                                        <div class="vote-container" data-upvotes="96902" data-downvotes="21896" data-voting-processed="true">
                                                            <div class="vote-background "></div>
                                                            <div class="vote-percentage" style="width: 81%;"></div>
                                                            <div class="vote-mask">
                                                                <div class="segment seg-1"></div>
                                                                <div class="segment seg-2"></div>
                                                                <div class="segment seg-3"></div>
                                                                <div class="segment seg-4"></div>
                                                            </div>
                                                        </div>
                                                        <div class="vote-thumbs-down">
                                                            <span class="icon-thumbs-down"></span>
                                                        </div>
                                                    </div>
                                                    <div class="vote-counts">
                                                        <div class="vote-down-count">21,896</div>
                                                        <div class="vote-up-count">96,902</div>

                                                    </div>
                                                </div>
                                            </a>
                                            <span class="game-card-footer">
                                                <span class="text-label xsmall">By </span>
                                                <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160720142050/https://www.roblox.com/users/282988/profile">Haggie125</a>
                                            </span>
                                        </div>
                                    </li>



                                    <li class="list-item game-card">
                                        <div class="game-card-container">
                                            <a href="https://web.archive.org/web/20160720142050/https://www.roblox.com/games/refer?SortFilter=5&amp;PlaceId=162720902&amp;Position=6&amp;PageType=Profile" class="game-card-link">
                                                <div class="game-card-thumb-container">
                                                    <img class="game-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20160720142050im_/https://t5.rbxcdn.com/073c238651267b044278b6a66800be77" alt="Pinewood Debate Center [READ DESCRIPTION]" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t5.rbxcdn.com/073c238651267b044278b6a66800be77&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
                                                </div>
                                                <div class="text-overflow game-card-name" title="Pinewood Debate Center [READ DESCRIPTION]" ng-non-bindable="">
                                                    Pinewood Debate Center [READ DESCRIPTION
                                                </div>
                                                <div class="game-card-name-secondary">
                                                    0 Playing
                                                </div>
                                                <div class="game-card-vote">
                                                    <div class="vote-bar">
                                                        <div class="vote-thumbs-up">
                                                            <span class="icon-thumbs-up"></span>
                                                        </div>
                                                        <div class="vote-container" data-upvotes="20" data-downvotes="7" data-voting-processed="true">
                                                            <div class="vote-background "></div>
                                                            <div class="vote-percentage" style="width: 74%;"></div>
                                                            <div class="vote-mask">
                                                                <div class="segment seg-1"></div>
                                                                <div class="segment seg-2"></div>
                                                                <div class="segment seg-3"></div>
                                                                <div class="segment seg-4"></div>
                                                            </div>
                                                        </div>
                                                        <div class="vote-thumbs-down">
                                                            <span class="icon-thumbs-down"></span>
                                                        </div>
                                                    </div>
                                                    <div class="vote-counts">
                                                        <div class="vote-down-count">7</div>
                                                        <div class="vote-up-count">20</div>

                                                    </div>
                                                </div>
                                            </a>
                                            <span class="game-card-footer">
                                                <span class="text-label xsmall">By </span>
                                                <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160720142050/https://www.roblox.com/users/31648167/profile">Woofmacht</a>
                                            </span>
                                        </div>
                                    </li>

                                </ul>

                                <a ng-click="loadMore()" class="btn btn-control-xs load-more-button" ng-show="7 > 6 * NumberOfVisibleRows">Load More</a>
                            </div>
                            <div id="games-switcher" class="switcher slide-switcher games" ng-hide="isGridOn" switcher itemscount="switcher.games.itemsCount" currpage="switcher.games.currPage">
                                <?php if (!empty($games)) { ?>
                                    <ul class="slide-items-container switcher-items hlist">

                                        <%- games2 %>

                                    </ul>
                                <?php } ?>

                            </div>
                        </div>
                    <?php } ?>

                    <a class="carousel-control left" data-switch="prev"><span class="icon-carousel-left"></span></a>
                    <a class="carousel-control right" data-switch="next"><span class="icon-carousel-right"></span></a>

                </div>


            </div>
        </div>
    </div>
</div>

<?php echo PageBuilder::buildFooter(); ?>