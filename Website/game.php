<?php

if (!isset($_GET["id"])) {
    header("Location: /home");
    exit;
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$gameclass = new Game;
$game = $gameclass::getGame($_GET['id']);

$creator_id = 0;

if ($game) {
    header("HTTP/1.1 404 Not Found");

    $creator_id = $game["creator_id"];

    $title = $game["title"];
}

$userclass = new User;

$creator = $userclass::getUser($creator_id);

// TODO: make this dynamic

$canPlay = false;
$canManage = false;
$canEdit = false;
$canCopy = false;
$isPlayServiceDown = true;

$visits = 0;
$favorites = 0;
$likes = 0;
$dislikes = 0;

$badgesCount = 10;

$userVoted = "Liked";
$userFavorited = true;



?>

<?php echo PageBuilder::buildHeader(); ?>

<script type="text/javascript" src="https://web.archive.org/web/20160721001325js_/http://js.rbxcdn.com/af5ff966d3c4f285d2272fdca56d2cd6.js"></script>

<link rel='stylesheet' href='/css/page___389ed0a988813a08f7ca9def2107173b_m.css' />

<div class="content">
    <div id="game-detail-page" class="row page-content">
        <div class="col-xs-12 section-content game-main-content">
            <div class="game-thumb-container">
                <script>
                    var Roblox = Roblox || {};
                    Roblox.Carousel = function() {
                        var carouselId = "#carousel-game-details";
                        var checkedForVideo = false;
                        var isMobile = false;

                        var initialize = function() {
                            // acquire isMobile setting from DOM
                            isMobile = $(carouselId).data('is-mobile');

                            // set up carousel
                            if (!isMobile) {
                                $(carouselId).carousel({
                                    interval: 6000,
                                    pause: "hover"
                                });
                            } else {
                                // do not cycle automatically on mobile because user might be playing video
                                $(carouselId).carousel({
                                    interval: false,
                                    pause: "hover"
                                });
                            }


                            // bindings
                            $(carouselId)
                                .on("slide.bs.carousel", function() {
                                    // pause ALL the videos
                                    Roblox.Carousel.pauseAllVideos();
                                    // restart the carousel sliding
                                    $(carouselId).carousel('cycle');
                                })
                                .hover(
                                    function() {
                                        $(this).addClass("hover");
                                    },
                                    function() {
                                        $(this).removeClass("hover");
                                    }
                                );

                            // hide controls when there's only one slide
                            if ($(carouselId + " .item").length < 2) {
                                $(carouselId).find(".carousel-control").css("display", "none");
                            }

                            $(document).on("playButton:gamePlayIntent", function() {
                                // we pressed the play button - stop playing the video
                                Roblox.Carousel.pauseAllVideos();
                            });

                            Roblox.Carousel.setUpYouTubeAPI();

                            // retry thumbnails in carousel
                            $(function() {
                                $(carouselId + " .item span").loadRobloxThumbnails();
                            });
                        }

                        var setUpYouTubeAPI = function() {
                            var tag = document.createElement('script');

                            tag.src = "https://www.youtube.com/iframe_api";
                            var firstScriptTag = document.getElementsByTagName('script')[0];
                            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


                        }

                        var toggleVideo = function(state) {
                            var div = $('.flex-video');
                            if (div.length > 0) {
                                var iframe = div.find('iframe')[0].contentWindow;
                                var func = state == 'hide' ? 'pauseVideo' : 'playVideo';
                                iframe.postMessage('{"event":"command","func":"' + func + '","args":""}', '*');
                            }
                        }

                        var pauseVideoAtIndex = function(idx) {
                            if (rbxplayer && rbxplayer.length > 0 && !isMobile) {
                                try {
                                    rbxplayer[idx].pauseVideo();
                                } catch (e) {
                                    // tried to pause before player was ready
                                }

                            } else {
                                return false;
                            }
                        }

                        var playVideoAtIndex = function(idx) {
                            if (rbxplayer && rbxplayer.length > 0 && rbxplayer[idx] && !isMobile) {
                                rbxplayer[idx].playVideo();
                                return true;
                            } else {
                                return false;
                            }
                        }

                        var pauseAllVideos = function() {
                            // pause ALL the videos
                            if (rbxplayer && rbxplayer.length > 0) {
                                var rbxplayerlen = rbxplayer.length;
                                for (var i = 0; i < rbxplayerlen; i++) {
                                    Roblox.Carousel.pauseVideoAtIndex(i);
                                }
                            }
                        }

                        var checkForVideo = function() {
                            if (checkedForVideo) {
                                return false;
                            }
                            var carousel = $(carouselId);
                            carousel.find('.item').each(function(idx, val) {
                                if ($(val).find('.flex-video').length > 0) {
                                    carousel.carousel(idx);
                                    carousel.carousel("pause");
                                    var successfulPlay = Roblox.Carousel.playVideoAtIndex(0);
                                    checkedForVideo = successfulPlay;
                                    return false; // stop
                                } else {
                                    return true; // keep going
                                }
                            });
                        }
                        var onPlayerReady = function() {
                            // This first moment get the video and auto-play it
                            var autoplay = $(carouselId).data('is-video-autoplayed-on-ready');
                            if (autoplay && !isMobile) {
                                Roblox.Carousel.checkForVideo();
                            }
                        }
                        var onPlayerPlaying = function() {
                            // We are playing the video. Stop the carousel.
                            var carousel = $(carouselId);
                            carousel.carousel("pause");
                        }


                        return {
                            initialize: initialize,
                            toggleVideo: toggleVideo,
                            checkForVideo: checkForVideo,
                            setUpYouTubeAPI: setUpYouTubeAPI,
                            onPlayerReady: onPlayerReady,
                            onPlayerPlaying: onPlayerPlaying,
                            pauseVideoAtIndex: pauseVideoAtIndex,
                            playVideoAtIndex: playVideoAtIndex,
                            pauseAllVideos: pauseAllVideos
                        }

                    }();

                    // For YouTube API. Must be global.

                    var rbxplayer = [];

                    function onYouTubeIframeAPIReady() {
                        var carouselId = "#carousel-game-details";
                        $(carouselId).find(".flex-video").each(function(idx, el) {
                            youTubeId = $(el).find("iframe").attr("id");
                            rbxplayer[rbxplayer.length] = new YT.Player(youTubeId, {});
                        });

                        // listen for postMessage from YouTube
                        $(window).on("message", function(e) {
                            var originalData = e.originalEvent.data;

                            // data is not JSON
                            if (originalData.charAt(0) != "{") {
                                return;
                            }
                            var data = $.parseJSON(originalData);

                            if (data.event == "onReady") {
                                Roblox.Carousel.onPlayerReady();
                            }
                            if (data.event == "infoDelivery" && data.info.playerState && data.info.playerState == 1) {
                                Roblox.Carousel.onPlayerPlaying();
                            }
                        });
                    }


                    $(document).ready(function() {
                        Roblox.Carousel.initialize();
                    });
                </script>



                <div id="carousel-game-details" class="carousel slide" data-ride="carousel" data-is-video-autoplayed-on-ready="true" data-is-mobile="false">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <span><img class="carousel-thumb" src="https://web.archive.org/web/20160721001325im_/http://t7.rbxcdn.com/0e8c3eb4ffd4711942b69bc597e391a6"></span>
                        </div>
                        <div class="item">
                            <span><img class="carousel-thumb" src="https://web.archive.org/web/20160721001325im_/http://t2.rbxcdn.com/2fab10c5e984d3a4145dd7980026f038"></span>
                        </div>
                        <div class="item">
                            <span><img class="carousel-thumb" src="https://web.archive.org/web/20160721001325im_/http://t4.rbxcdn.com/930161b3c066f1dd00a9ca317d2b9e36"></span>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-game-details" role="button" data-slide="prev">
                        <span class="icon-carousel-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-game-details" role="button" data-slide="next">
                        <span class="icon-carousel-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>
            <div class="game-calls-to-action">

                <?php if ($canManage || $canCopy) { ?>
                    <div id="game-context-menu">
                        <a class="rbx-menu-item" data-toggle="popover" data-bind="game-context-menu" data-original-title="" title="" data-viewport=".game-calls-to-action">
                            <span class="icon-more"></span>
                        </a>
                        <div class="rbx-popover-content" data-toggle="game-context-menu">
                            <ul class="dropdown-menu" role="menu">
                                <?php if ($canEdit) { ?>
                                    <li>
                                        <div class="VisitButton VisitButtonEditGLI" placeid="<?= $game["id"] ?>" data-universeid="<?= $game["id"] ?>" data-allowupload="true">
                                            <a>Edit</a>
                                        </div>
                                    </li>

                                    <?php if ($canManage) { ?>
                                        <li id="configure">
                                            <a href="https://www.nonrev.pro/places/<?= $game["id"] ?>/update">Configure this
                                                Place</a>
                                        </li>
                                        <li id="rbx-configure-game">
                                            <a href="https://www.nonrev.pro/universes/configure?id=<?= $game["id"] ?>">Configure
                                                this
                                                Game</a>
                                        </li>
                                        <li>
                                            <div id="toggle-profile" data-place-id="<?= $game["id"] ?>" class="rbx-context-menu-toggle-profile"><a><?php if ($gameOnProfile) { ?>Remove from Profile<? } else { ?>Add to Profile<?php } ?></a></div>
                                        </li>
                                        <li>
                                            <div role="button" id="shutdown-all-button" data-place-id="<?= $game["id"] ?>" class="rbx-context-menu-shutdown-all">
                                                <a>
                                                    Shut Down All Servers
                                                </a>
                                            </div>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <script>
                        $(function() {
                            if (typeof Roblox === "undefined") {
                                Roblox = {};
                            }
                            if (typeof Roblox.Showcases === "undefined") {
                                Roblox.Showcases = {};
                            }

                            Roblox.Showcases.InShowcase = $("#game-context-menu").find(
                                ".rbx-context-menu-toggle-profile").data("in-showcase") === "True";

                            $("#game-context-menu ").on("click", ".rbx-context-menu-toggle-profile",
                                function(evt) {
                                    evt.preventDefault();
                                    var el = $(this);
                                    var placeId = el.data("place-id");
                                    $("#game-context-menu").find(".rbx-menu-item").popover('hide');
                                    $.post("/game/toggle-profile", {
                                        placeId: placeId,
                                        addToProfile: !Roblox.Showcases.InShowcase
                                    }, function(json) {
                                        if (json.isValid) {
                                            Roblox.Showcases.InShowcase = json.data.inShowcase;
                                            $("#game-context-menu").find(
                                                    ".rbx-context-menu-toggle-profile a")
                                                .text(Roblox.Showcases.InShowcase ?
                                                    "Remove from Profile" : "Add to Profile");
                                        }
                                    });
                                });
                            $("#game-context-menu ").on("click", ".rbx-context-menu-shutdown-all",
                                function(evt) {
                                    evt.preventDefault();
                                    var placeId = $(this).data("place-id");
                                    $("#game-context-menu").find(".rbx-menu-item").popover('hide');

                                    Roblox.GenericConfirmation.open({
                                        titleText: "Shut Down Servers",
                                        bodyContent: "Are you sure you want to shut down all servers for this place?",
                                        onAccept: function() {
                                            $.ajax({
                                                type: "POST",
                                                url: "/Games/shutdown-all-instances",
                                                data: {
                                                    placeId: placeId
                                                },
                                                error: function() {
                                                    Roblox.GenericConfirmation
                                                        .open({
                                                            titleText: Roblox
                                                                .BuildPage
                                                                .Resources
                                                                .errorOccurred,
                                                            bodyContent: "Could not shut down servers.",
                                                            acceptText: Roblox
                                                                .BuildPage
                                                                .Resources
                                                                .ok,
                                                            acceptColor: Roblox
                                                                .GenericConfirmation
                                                                .blue,
                                                            declineColor: Roblox
                                                                .GenericConfirmation
                                                                .none,
                                                            allowHtmlContentInBody: true,
                                                            dismissable: true
                                                        });
                                                }
                                            });
                                        },
                                        acceptColor: Roblox.GenericConfirmation.blue,
                                        acceptText: "Yes",
                                        declineText: "No",
                                        allowHtmlContentInBody: true
                                    });
                                });

                            $("#game-context-menu").on("click", ".VisitButtonEditGLI", function(evt) {
                                $("#game-context-menu").find(".rbx-menu-item").popover('hide');
                                var el = $(this);
                                var placeId = el.attr("placeid");
                                var universeId = el.data("universeid");
                                var allowUpload = el.data("allowupload") ? true : false;
                                Roblox.GameLauncher.editGameInStudio(placeId, universeId,
                                    allowUpload);
                            });
                        });
                    </script>

                <?php } ?>

                <div class="game-title-container">
                    <h2 class="game-name" title="<?= htmlspecialchars($game["title"]) ?>">
                        <?= htmlspecialchars($game["title"]) ?>
                    </h2>
                    <div class="game-creator"><span class="text-label">By</span> <a class="text-name" href="https://www.nonrev.pro/users/<?= $creator_id ?>/profile"><?= htmlspecialchars($creator["username"]) ?></a>
                    </div>
                </div>
                <div class="game-play-buttons" data-autoplay="false">

                    <?php if ($canPlay) { ?>
                        <div id="MultiplayerVisitButton" class="VisitButton VisitButtonPlayGLI" placeid="<?= $game["id"] ?>" data-action="play" data-is-membership-level-ok="true">
                            <a class="btn-primary-lg">Play</a>
                        </div>
                        <div id="MultiplayerVisitButtonAndroid" style="display: none;">
                            <a class="btn-primary-lg" href="/games/start?placeid=<?= $game["id"] ?>" id="AndroidPlayButton">Play</a>
                        </div>
                        <script>
                            const userAgent = navigator.userAgent.toLowerCase();
                            const Android = userAgent.indexOf("android") > -1;
                            if (Android) {
                                document.getElementById("MultiplayerVisitButton").style.display = "none";
                                document.getElementById("MultiplayerVisitButtonAndroid").style.display = "block";
                            }
                        </script>
                    <?php } elseif ($isPlayServiceDown) { ?>
                        Sorry, games are temporarily disabled.
                    <?php } else { ?>
                        Sorry, this place is currently closed to visitors.
                    <?php } ?>


                    <script type="text/javascript">
                        Roblox = Roblox || {};

                        Roblox.BCUpsellModal = function() {
                            var resources = {
                                //<sl:translate>
                                title: "Builders Club Only",
                                body: "This is a premium feature only available to our Builders Club members.",
                                accept: "Upgrade Now"
                                //</sl:translate>
                            };

                            var open = function() {
                                var options = {
                                    titleText: Roblox.BCUpsellModal.Resources.title,
                                    bodyContent: Roblox.BCUpsellModal.Resources.body,
                                    footerText: "",
                                    acceptText: Roblox.BCUpsellModal.Resources.accept,
                                    declineText: Roblox.Resources.GenericConfirmation.No,
                                    acceptColor: Roblox.GenericConfirmation.green,
                                    onAccept: function() {
                                        window.location.href =
                                            '/premium/membership?ctx=bc-only-game';
                                    },
                                    imageUrl: '/img/43ac54175f3f3cd403536fedd9170c10.png'
                                };

                                Roblox.GenericConfirmation.open(
                                    options
                                );
                            };

                            return {
                                open: open,
                                Resources: resources
                            };
                        }();
                    </script>
                </div>


                <ul class="share-rate-favorite">

                    <li class="favorite-button-container">
                        <div class="tooltip-container" data-toggle="tooltip" title="" data-original-title="Add to Favorites">
                            <a id="toggle-favorite" data-toggle-url="/favorite/toggle" data-assetid="<?= $game["id"] ?>" data-isguest="False" data-signin-url="https://www.nonrev.pro/newlogin">
                                <span title="<?= $favorites ?>" class="text-favorite favoriteCount <?= $favorites ?>" id="result"><?= $favorites ?></span>
                                <div id="favorite-icon" class="icon-favorite <?php if ($userFavorited) { ?>favorited<?php } ?>"></div>
                            </a>
                        </div>
                    </li>



                    <li id="voting-section" class="voting-panel body new-design" data-asset-id="<?= $game["id"] ?>" data-total-up-votes="<?= $likes ?>" data-total-down-votes="<?= $dislikes ?>" data-vote-modal="" data-user-authenticated="True">
                        <div class="loading"></div>
                        <div class="vote-summary">
                            <div class="voting-details">
                                <div class="users-vote ">

                                    <div class="upvote">
                                        <span class="icon-like <?php if ($userVoted == "Liked") { ?>selected<?php } ?>"></span>
                                    </div>

                                    <div class="vote-details">
                                        <div class="vote-container">
                                            <div class="vote-background"></div>
                                            <div class="vote-percentage"></div>
                                            <div class="vote-mask">
                                                <div class="segment seg-1"></div>
                                                <div class="segment seg-2"></div>
                                                <div class="segment seg-3"></div>
                                                <div class="segment seg-4"></div>
                                            </div>
                                        </div>

                                        <div class="vote-numbers">
                                            <div class="count-left">
                                                <span id="vote-up-text" title="<?= $likes ?>" class="vote-text"><?= $likes ?></span>
                                            </div>
                                            <div class="count-right">
                                                <span id="vote-down-text" title="<?= $dislikes ?>" class="vote-text"><?= $dislikes ?></span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="downvote">
                                        <span class="icon-dislike <?php if ($userVoted == "Disliked") { ?>selected<?php } ?>"></span>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </li>


                    <li class="social-media-share">

                    </li><!-- .social-media-share -->
                </ul><!-- .share-rate-favorite-->
            </div>
        </div>

        <div class="col-xs-12 rbx-tabs-horizontal" data-place-id="<?= $game["id"] ?>">
            <ul id="horizontal-tabs" class="nav nav-tabs" role="tablist">
                <li id="tab-about" class="rbx-tab tab-about active">
                    <a class="rbx-tab-heading" href="#about">
                        <span class="text-lead">About</span>
                    </a>
                </li>
                <li id="tab-store" class="rbx-tab tab-store">
                    <a class="rbx-tab-heading" href="#store">
                        <span class="text-lead">Store</span>
                    </a>
                </li>
                <li id="tab-game-instances" class="rbx-tab tab-game-instances">
                    <a class="rbx-tab-heading" href="#game-instances">
                        <span class="text-lead">Servers</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content rbx-tab-content">
                <div class="tab-pane active" id="about">
                    <div class="section game-about-container">
                        <h3>Description</h3>
                        <div class="section-content">
                            <p class="game-description linkify"><?= $game["description"] ?></p>

                            <ul class="game-stats-container">
                                <li class="game-stat">
                                    <p class="text-label">Visits</p>
                                    <p class="text-lead" title="<?= $visits ?>"><?= $visits ?></p>
                                </li>
                                <li class="game-stat">
                                    <p class="text-label">Created</p>
                                    <p class="text-lead"><?= date("m/d/Y", $game["created_at"]) ?></p>
                                </li>
                                <li class="game-stat">
                                    <p class="text-label">Updated</p>
                                    <p class="text-lead"><?= date("m/d/Y", $game["updated_at"]) ?></p>
                                </li>
                                <li class="game-stat">
                                    <p class="text-label">Max Players</p>
                                    <p class="text-lead"><?= $game["server_size"] ?></p>
                                </li>
                                <li class="game-stat">
                                    <p class="text-label">Genre</p>
                                    <p class="text-lead">
                                        <a class="text-name" href="https://www.nonrev.pro/games?GenreFilter=1"><?= $game["genre"] ?></a>
                                    </p>
                                </li>
                                <li class="game-stat">
                                    <p class="text-label">Allowed Gear types</p>
                                    <p class="text-lead stat-gears">
                                        <span class="icon-nogear" data-toggle="tooltip" data-original-title="No Gear Allowed"></span>
                                    </p>
                                </li>
                            </ul>
                            <div class="game-stat-footer">

                                <span class="game-report-abuse"><a class="text-report" href="https://www.nonrev.pro/abusereport/asset?id=<?= $game["id"] ?>">Report
                                        Abuse</a></span>
                            </div>
                        </div>
                    </div>


                    <script>
                        var Roblox = Roblox || {};

                        Roblox.PrivateServers = Roblox.PrivateServers || {};
                        //<sl:translate>
                        Roblox.PrivateServers.RenewRecurringTitle = "Renew Private Server";
                        Roblox.PrivateServers.RenewRecurringBody =
                            "Are you sure you want to enable future payments for your private VIP version of " +
                            "<?= $game["title"] ?> by <?= $creator["username"] ?>?<br><br>This VIP Server will start renewing every month at " +
                            "<span class=\"icon-robux-16x16\"></span><span class=\"text-robux\">100</span> until you cancel.";
                        Roblox.PrivateServers.RenewRecurringAcceptText = "Renew";
                        Roblox.PrivateServers.RenewRecurringDeclineText = "Cancel";
                        Roblox.PrivateServers.UserProfileAbsoluteUrlPattern =
                            "https://www.nonrev.pro/users/0/profile";
                        //<sl:translate>
                    </script>

                    <div class="stack badge-container">
                        <?php if ($badgesCount > 0) { ?>
                            <div class="container-header">
                                <h3>Game Badges</h3>
                            </div>
                            <ul class="stack-list">
                                <%- badges %>
                                <?php if ($badgesCount > 3) { ?>
                                    <li>
                                        <button type="button" class="btn-full-width btn-control-sm" id="badges-see-more">See More</button>
                                    </li>
                                <?php } ?>

                            </ul>
                        <?php } ?>


                    </div>



                </div>
                <div class="tab-pane store" id="store">


                    <%- gamepassesHtml %>





                    <input name="__RequestVerificationToken" type="hidden" value="<%= xcsrftoken %>" />

                    <div id="DeleteProductPromotionModal" class="PurchaseModal">
                        <div id="simplemodal-close" class="simplemodal-close">
                            <a></a>
                        </div>
                        <div class="titleBar" style="text-align: center">
                        </div>
                        <div class="PurchaseModalBody">
                            <div class="PurchaseModalMessage">
                                <div class="PurchaseModalMessageImage">
                                    <div class="thumbs-up-green">
                                    </div>
                                </div>
                                <div class="PurchaseModalMessageText">
                                </div>
                            </div>
                            <div class="PurchaseModalButtonContainer">
                                <div class="ImageButton btn-blue-ok-sharp simplemodal-close"></div>
                            </div>
                            <div class="PurchaseModalFooter"></div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane game-instances" id="game-instances">



                    <div id="rbx-running-games" class="stack" data-placeid="<?= $game["id"] ?>" data-showshutdown data-avatar-headshot-enabled=true>
                        <div class="container-header">
                            <h3>Running Servers</h3>
                            <span class="btn-fixed-width btn-control-xs btn-more rbx-running-games-refresh">Refresh</span>
                        </div>
                        <ul id="rbx-game-server-item-container" class="section rbx-game-server-item-container stack-list">

                        </ul>
                        <div class="rbx-running-games-footer">
                            <button type="button" class="btn-control-sm btn-full-width rbx-running-games-load-more hidden">Load
                                More</button>

                        </div>
                        <div class="rbx-game-server-template">
                            <li class="stack-row rbx-game-server-item">
                                <div class="section-header">
                                    <div class="link-menu rbx-game-server-menu"></div>
                                </div>
                                <div class="section-left rbx-game-server-details">
                                    <div class="rbx-game-status rbx-game-server-status">x of y players max</div>
                                    <div class="rbx-game-server-alert">
                                        <span class="icon-remove"></span>Slow Game
                                    </div>
                                    <a class="btn-full-width btn-control-xs rbx-game-server-join" href="#" data-placeid>Join</a>

                                </div>
                                <div class="section-right rbx-game-server-players">
                                </div>
                            </li>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>



    <div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
        <div class="Title"></div>
        <div class="GenericModalBody">
            <div>
                <div class="ImageContainer">
                    <img class="GenericModalImage" alt="generic image" />
                </div>
                <div class="Message"></div>
            </div>
            <div class="clear"></div>
            <div id="GenericModalButtonContainer" class="GenericModalButtonContainer">
                <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
            </div>
        </div>
    </div>



    <div id="ItemPurchaseAjaxData" data-has-currency-service-error="False" data-currency-service-error-message="" data-authenticateduser-isnull="False" data-user-balance-robux="<%= robux %>" data-user-balance-tickets="<%= tix %>" data-user-bc="0" data-continueshopping-url="https://www.nonrev.pro/games/<?= $game["id"] ?>/<%= gamename2 %>" data-imageurl="" data-alerturl="/img/b7353602bbf9b927d572d5887f97d452.svg" data-inSufficentFundsurl="/img/b80339ddf867ccfe6ab23a2c263d8000.png">

    </div>


    <div id="BCOnlyModal" class="modal-dialog" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" onclick="$.modal.close();">
                    <span aria-hidden="true">
                        <span class="icon-close"></span>
                    </span>
                    <span class="sr-only">Close</span>
                </button>
                <h5>Builders Club Only</h5>
            </div>
            <div class="modal-body">
                <div id="BCMessageDiv">
                    This is a premium item only available to our Builders Club members.
                </div>
                <div class="modal-image-container">
                    <span class="icon-default-bc upgrade-icon-bc"></span>
                </div>
            </div>
            <div class="modal-footer">
                <a href="https://www.nonrev.pro/premium/membership?ctx=bc-only-item" class="btn-primary-md">Upgrade Now</a>
                <button type="button" class="btn-control-md" onclick="$.modal.close();">Cancel</button>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function showBCOnlyModal(modalId) {
            var modalProperties = {
                overlayClose: true,
                escClose: true,
                opacity: 80,
                overlayCss: {
                    backgroundColor: "#000"
                }
            };
            if (typeof modalId === "undefined")
                $("#BCOnlyModal").modal(modalProperties);
            else
                $("#" + modalId).modal(modalProperties);
        }
        $(document).ready(function() {
            $('#VOID').click(function() {
                showBCOnlyModal("BCOnlyModal");
                return false;
            });
        });
    </script>
</div>