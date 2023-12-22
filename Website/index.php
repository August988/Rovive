<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (isset($_SESSION["user"])) {
    header("Location: /home");
}

$robloxMessage = "";

$signupEnabled = true;


?>

<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
    <!-- MachineID: WEB169 -->
    <title>Rovive</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rovive Corporation" />
    <meta name="description" content="Rovive is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive games. These games range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration." />
    <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine" />
    <meta name="apple-itunes-app" content="app-id=431946152" />
    <meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY" />
    <meta property="og:site_name" content="Rovive" />
    <meta property="og:title" content="Rovive" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.rovive.pro/" />
    <meta property="og:description" content="Rovive is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive games. These games range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration." />
    <meta property="og:image" content="/img/fb70fd2b56107a0d43f2f98658885702.jpg" />
    <meta property="fb:app_id" content="190191627665278">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Rovive">
    <meta name="twitter:title" content="Rovive">
    <meta name="twitter:description" content="Rovive is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive games. These games range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration.">
    <meta name="twitter:creator">
    <meta name=twitter:image1 content="/img/fb70fd2b56107a0d43f2f98658885702.jpg" />
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="Rovive Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone">
    <meta name="twitter:app:name:ipad" content="Rovive Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad">
    <meta name="twitter:app:name:googleplay" content="Rovive">
    <meta name="twitter:app:id:googleplay" content="com.rbx2016client">
    <meta name="twitter:app:url:googleplay" />


    <link href="/img/favicon.ico" rel="icon" />
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">

    <link rel="canonical" href="https://www.rovive.pro/" />


    <link rel='stylesheet' href='/css/leanbase___1dcd1e0de30c586ac1ff4e343528e881_m.css' />



    <link rel='stylesheet' href='/css/page___7a8c9c78f95c59dfd147a65d6a5c1b34_m.css' />




    <!--  -->
    <link rel="stylesheet" href="/css/main.css">
    <script type='text/javascript' src='/shut/realtime.js'></script>
    <script type='text/javascript' src='/js/jquery-1.11.1.min.js'></script>
    <script type='text/javascript'>
        window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")
    </script>
    <script type='text/javascript' src='/js/jquery-migrate-1.2.1.min.js'></script>
    <script type='text/javascript'>
        window.jQuery || document.write(
            "<script type='text/javascript' src='/js/jquery-migrate-1.2.1.js'><\/script>")
    </script>



    <script type='text/javascript' src='/js/86411e39f51e0ef39c7fa2f1f92fe7b3.js'></script>


    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>




    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->







    <script type="text/javascript">
        if (typeof(Roblox) === "undefined") {
            Roblox = {};
        }
        Roblox.Endpoints = Roblox.Endpoints || {};
        Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
        Roblox.Endpoints.Urls['/api/item.ashx'] = 'https://www.rovive.pro/api/item.ashx';
        Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.rovive.pro/asset/';
        Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.rovive.pro/client-status/set';
        Roblox.Endpoints.Urls['/client-status'] = 'https://www.rovive.pro/client-status';
        Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.rovive.pro/game/';
        Roblox.Endpoints.Urls['/game-auth/getauthticket'] = 'https://www.rovive.pro/game-auth/getauthticket';
        Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.rovive.pro/game/edit.ashx';
        Roblox.Endpoints.Urls['/game/getauthticket'] = 'https://assetgame.rovive.pro/game/getauthticket';
        Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.rovive.pro/game/placelauncher.ashx';
        Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.rovive.pro/game/preloader';
        Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.rovive.pro/game/report-stats';
        Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.rovive.pro/game/report-event';
        Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.rovive.pro/game/updateprerollcount';
        Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.rovive.pro/login/default.aspx';
        Roblox.Endpoints.Urls['/my/avatar'] = 'https://www.rovive.pro/my/avatar';
        Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.rovive.pro/my/money.aspx';
        Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.rovive.pro/chat/chat';
        Roblox.Endpoints.Urls['/presence/users'] = 'https://www.rovive.pro/presence/users';
        Roblox.Endpoints.Urls['/presence/user'] = 'https://www.rovive.pro/presence/user';
        Roblox.Endpoints.Urls['/friends/list'] = 'https://www.rovive.pro/friends/list';
        Roblox.Endpoints.Urls['/navigation/getCount'] = 'https://www.rovive.pro/navigation/getCount';
        Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.rovive.pro/catalog/browse.aspx';
        Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.rovive.pro/catalog/html';
        Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.rovive.pro/catalog/json';
        Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.rovive.pro/catalog/contents';
        Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.rovive.pro/catalog/lists.aspx';
        Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] =
            'https://assetgame.rovive.pro/asset-hash-thumbnail/image';
        Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.rovive.pro/asset-hash-thumbnail/json';
        Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.rovive.pro/asset-thumbnail-3d/json';
        Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.rovive.pro/asset-thumbnail/image';
        Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.rovive.pro/asset-thumbnail/json';
        Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.rovive.pro/asset-thumbnail/url';
        Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] =
            'https://assetgame.rovive.pro/asset/request-thumbnail-fix';
        Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://www.rovive.pro/avatar-thumbnail-3d/json';
        Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://www.rovive.pro/avatar-thumbnail/image';
        Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://www.rovive.pro/avatar-thumbnail/json';
        Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://www.rovive.pro/avatar-thumbnails';
        Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.rovive.pro/avatar/request-thumbnail-fix';
        Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.rovive.pro/bust-thumbnail/json';
        Roblox.Endpoints.Urls['/group-thumbnails'] = 'https://www.rovive.pro/group-thumbnails';
        Roblox.Endpoints.Urls['/groups/getprimarygroupinfo.ashx'] =
            'https://www.rovive.pro/groups/getprimarygroupinfo.ashx';
        Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.rovive.pro/headshot-thumbnail/json';
        Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.rovive.pro/item-thumbnails';
        Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.rovive.pro/outfit-thumbnail/json';
        Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.rovive.pro/place-thumbnails';
        Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.rovive.pro/thumbnail/asset/';
        Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://www.rovive.pro/thumbnail/avatar-headshot';
        Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://www.rovive.pro/thumbnail/avatar-headshots';
        Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.rovive.pro/thumbnail/user-avatar';
        Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.rovive.pro/thumbnail/resolve-hash';
        Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://www.rovive.pro/thumbnail/place';
        Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.rovive.pro/thumbnail/get-asset-media';
        Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.rovive.pro/thumbnail/remove-asset-media';
        Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] =
            'https://www.rovive.pro/thumbnail/set-asset-media-sort-order';
        Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://www.rovive.pro/thumbnail/place-thumbnails';
        Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] =
            'https://www.rovive.pro/thumbnail/place-thumbnails-partial';
        Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://www.rovive.pro/thumbnail_holder/g';
        Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://www.rovive.pro/users/{id}/profile';
        Roblox.Endpoints.Urls['/service-workers/push-notifications'] =
            'https://www.rovive.pro/service-workers/push-notifications';
        Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] =
            'https://www.rovive.pro/notification-stream/notification-stream-data';
        Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] =
            'https://www.rovive.pro/api/friends/acceptfriendrequest';
        Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] =
            'https://www.rovive.pro/api/friends/declinefriendrequest';
        Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
    </script>

    <script type="text/javascript">
        if (typeof(Roblox) === "undefined") {
            Roblox = {};
        }
        Roblox.Endpoints = Roblox.Endpoints || {};
        Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
    </script>


    <!-- <link rel='stylesheet' class="dark-theme" href='/css/dark.css' /> -->

</head>

<body id="rbx-body" class="" data-performance-relative-value="0.000" data-internal-page-name="" data-send-event-percentage="0.00">

    <script>
        // Use matchMedia to check the user preference
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
        const userSystemTheme = prefersDark.matches ? "dark" : "light";

        let theme = "<%= theme %>";
        if (theme == "") {
            theme = userSystemTheme;
        }

        if (theme === "dark") {
            toggleDarkTheme(true);
        }

        // Listen for changes to the prefers-color-scheme media query
        prefersDark.addListener((mediaQuery) => toggleDarkTheme(mediaQuery.matches));

        // Add or remove the "dark" class based on if the media query matches
        function toggleDarkTheme(shouldAdd) {
            if (shouldAdd) {
                const heads = document.getElementsByTagName("head");
                for (let i = 0; i < heads.length; i++) {
                    const head = heads[i];
                    const darkModeStyles = head.querySelector(".dark-theme");
                    if (darkModeStyles == null) {
                        const cssFile = document.createElement('link');
                        cssFile.rel = 'stylesheet';
                        cssFile.href = "/css/dark.css";
                        cssFile.classList.add("dark-theme");
                        head.appendChild(cssFile);
                    }
                }
            } else {
                const darkTheme = document.getElementsByClassName("dark-theme");
                for (let i = 0; i < darkTheme.length; i++) {
                    const element = darkTheme[i];
                    element.remove();
                }
            }
        }
    </script>
    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.idk16\.cf|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm" data-as-http-regex="((blog|wiki|[^.]help|corp|polls|bloxcon|developer|devforum)\.roblox\.com|robloxlabs\.com)">
    </div>
    <div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500">
    </div>
    <div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0">
    </div>


    <style type="text/css">
        .coverSprite {
            background-repeat: no-repeat;
            background-image: url('/img/20e7d1543d2c5caf201184d86530fc35.png');
        }

        #RollerContainer {
            background-image: url('/img/dcbdfaf1c08058e71f65c09f7b98ff04.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .special-dropdown select {
            border: 0 !important;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url('/img/379f4f1018f31cbb62ef52a22d9f2118.png') no-repeat;
            background-position: 92% 40%;
            width: 100px;
            text-indent: 0.01px;
            text-overflow: "";
        }

        #InnerWhatsRobloxContainer1 {
            height: 70%;
            background-image: url('/img/cca69eca62f23ca413fc920549e936ea.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 30% center;
            color: white;
        }

        #GameImage1 {
            background-image: url('/img/42268b6264d89827401ef912f174f288.jpg');
            margin-right: 5px;
        }

        #GameImage2 {
            background-image: url('/img/04baeb33ef66ef1395cd5464309fece6.jpg');
            margin-right: 5px;
        }

        #GameImage3 {
            background-image: url('/img/e8b89d14690203420d64b5b2fda0b461.jpg');
            margin-right: -10px;
            width: calc(33.333333% - 10px);
        }

        .input-field {
            outline: none !important;
        }
    </style>
    <div class="navbar navbar-landing navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="navbar-header col-md-6">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#LandingNavbar">
                        Log In
                    </button>
                    <div class="navbar-brand hidden-xs">
                        <img alt="Rovive Logo" class="robloxLogo" src="/img/RoviveLetter.png" />
                    </div>
                    <ul id="TopLeftNavLinks" class="nav navbar-nav">
                        <li id="PlayLink" class="pull-left"><a href="#RollerContainer" onclick="return scrollTo(1, '#RollerContainer');">Play</a></li>
                        <li id="AboutLink" class="pull-left"><a href="#WhatsRobloxContainer" onclick="return scrollTo(2, '#WhatsRobloxContainer');">About</a></li>
                        <li id="PlatformLink" class="pull-left"><a href="#RobloxDeviceText" onclick="return scrollTo(3, '#RobloxDeviceText');">Platforms</a></li>
                        <li id="magic-line"></li>
                    </ul>
                </div>


                <div class="collapse navbar-collapse col-sm-6" id="LandingNavbar" ng-modules="roblox.formEvents">
                    <form id="LogInForm" class="navbar-form form-inline navbar-right" rbx-form-context context="RollerCoaster" novalidate>
                        <div class="form-group" id="LoginUsernameParent">
                            <input id="LoginUsername" type="text" placeholder="Username" class="form-control" name="username" rbx-form-interaction />
                        </div>
                        <div class="form-group" id="LoginPasswordParent">
                            <input id="LoginPassword" type="password" placeholder="Password" class="form-control" name="password" rbx-form-interaction />
                        </div>
                        <div class="form-group">
                            <input type="submit" id="LoginButton" class="form-control" value="Log In" rbx-form-interaction name="submitLogin" />
                        </div>
                        <a id="HeaderForgotPassword" class="navbar-link" href="https://www.rovive.pro/Login/ResetPasswordRequest">Forgot Username/Password?</a>
                        <input id="ReturnUrl" name="ReturnUrl" type="hidden" value="" />
                    </form>
                </div>

                <script>
                    // login code
                    var loginForm = document.getElementById("LogInForm");

                    loginForm.addEventListener("submit", function(e) {
                        e.preventDefault();

                        var username = document.getElementById("LoginUsername").value;
                        var password = document.getElementById("LoginPassword").value;

                        if (username.length == 0 && password.length == 0) {
                            return;
                        }

                        $.ajax({
                            type: "POST",
                            url: "/api/login",
                            data: {
                                username: username,
                                password: password,
                            },
                            success: function(data) {
                                if (data == "success") {
                                    window.location = "/home";
                                } else {
                                    alert(data);
                                }
                            },
                            error: function(xhr) {
                                alert(xhr.responseText);
                            }
                        });
                    });
                </script>
            </div>
        </div>
        <!-- sitetest exclusive warning -->
        <?php if (SITE_CONFIG["site"]["isSitetest"]) { ?>
            <div class="alert alert-info" style="margin-top: 5px;" role="alert">
                You are currently on the testing site and it may be unstable. Feel free to mess around and report bugs.
            </div>
        <?php } ?>
    </div>


    <div class="container-fluid">
        <!-- Roller Coaster-->
        <section class="row full-height-section" id="RollerContainer">
            <div class="col-md-12 inner-full-height-section" id="InnerRollerContainer">
                <div id="MainCenterContainer" class="row">
                    <div class="col-xs-12 col-md-6">
                        <div id="MainLogo" class="text-right">
                            <div id="LogoAndSlogan" class="text-center">
                                <img id="MainLogoImage" title="Rovive" class="center-block img-responsive" src="/img/logoFull.png" alt="Rovive logo" />
                                <div class="clearfix"></div>
                                <h1>Re-experience old Roblox</h1>
                            </div>
                        </div>
                    </div>



                    <!-- Modal -->
                    <div id="BootstrapConfirmationModal" data-modal-handle="bootstrap-confirmation" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" id="roblox-close-btn" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                                        <img class="GenericModalImage" alt="generic image" />
                                    </div>
                                    <p class="modal-body-text"></p>
                                    <p id="roblox-captcha-error" class="text-center text-danger"></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="roblox-decline-btn" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" id="roblox-confirm-btn" class="btn btn-primary">Save
                                        changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>

                    <script type="text/javascript">
                        Roblox = Roblox || {};
                        Roblox.Resources = Roblox.Resources || {};

                        //<sl:translate>
                        Roblox.Resources.GenericConfirmation = {
                            yes: "Yes",
                            No: "No",
                            Confirm: "Confirm",
                            Cancel: "Cancel"
                        };
                        //</sl:translate>
                    </script>

                    <div class="clearfix visible-sm"></div>
                    <div class="col-xs-12 col-md-6">
                        <div id="SignUpFormContainer" data-return-url="">

                            <div class="" data-parent-url="" data-is-from-studio="false" data-is-facebook-button-shown="false">
                                <div class="rbx-login-partial-legacy">
                                    <h3 class="text-center signup-header">
                                        Sign up and start having fun!
                                    </h3>
                                    <h3 class="text-center login-header" style="display: none;">
                                        Log in and start having fun!
                                    </h3>
                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


                                    <style type="text/css">
                                        .male {
                                            background-image: url('/img/856241927a2ac609e3033feada3ef9f9.png');
                                            background-repeat: no-repeat;
                                        }

                                        .female {
                                            background-image: url('/img/a0afd0556163477e1023c5aa55d1b9f6.png');
                                            background-repeat: no-repeat;
                                        }
                                    </style>

                                    <div class="signup-or-log-in new-username-pwd-rule" ng-modules="SignupOrLogin" ng-controller="SignupOrLoginController" data-metadata-params="{&quot;isEligibleForHideAdsAbTest&quot;:&quot;True&quot;}" data-v2-username-password-rules-enabled="1" data-is-login-default-section="false">


                                        <?php if ($signupEnabled) { ?>
                                            <div class="signup-container" ng-controller="SignupController">
                                                <div class="signup-input-area" ng-form name="signupForm" rbx-form-context context="RollerCoaster">

                                                    <img src="/timg/rbx.png" style="position: absolute" alt="" />
                                                    <div class="form-group" ng-class="{'has-error' : (badSubmit || signupForm.username.$dirty) && signupForm.username.$invalid, 'has-success': (signupForm.username.$dirty && signupForm.username.$valid) }">
                                                        <input id="signup-username" ng-trim="false" ng-change="onChange()" name="username" class="form-control input-field" type="text" tabindex="1" rbx-valid-username rbx-form-interaction rbx-form-validation placeholder="Username (don&#39;t use your real name)" value="" ng-model="signup.username" />
                                                        <p id="signup-usernameInputValidation" class="form-control-label input-validation text-error" ng-bind="(badSubmit || signupForm.username.$dirty) ? signupForm.username.$validationMessage : ''">
                                                        </p>
                                                    </div>
                                                    <div class="form-group" ng-class="{'has-error' : (badSubmit || signupForm.password.$dirty) && signupForm.password.$invalid, 'has-success': (signupForm.password.$dirty && signupForm.password.$valid) }">
                                                        <input id="signup-password" ng-trim="false" name="password" class="form-control input-field" type="password" tabindex="2" rbx-valid-password rbx-form-interaction rbx-form-validation rbx-form-validation-redact-input placeholder="Password (minimum length 8)" ng-model="signup.password">
                                                        <p id="signup-passwordInputValidation" class="form-control-label input-validation text-error" ng-bind="(badSubmit || signupForm.password.$dirty) ? signupForm.password.$validationMessage : ''">
                                                        </p>
                                                    </div>
                                                    <div class="form-group" ng-class="{'has-error' : (badSubmit || signupForm.passwordConfirm.$dirty) && signupForm.passwordConfirm.$invalid, 'has-success': (signupForm.passwordConfirm.$dirty && signupForm.passwordConfirm.$valid) }">
                                                        <input id="signup-password-confirm" ng-trim="false" name="passwordConfirm" class="form-control input-field" match="signup.password" rbx-valid-password-confirm rbx-form-interaction rbx-form-validation rbx-form-validation-redact-input type="password" tabindex="3" placeholder="Confirm Password" ng-model="signup.passwordConfirm" />
                                                        <p id="signup-passwordConfirmInputValidation" class="form-control-label input-validation text-error" ng-bind="(badSubmit || signupForm.passwordConfirm.$dirty) ? signupForm.passwordConfirm.$validationMessage : ''">
                                                        </p>
                                                    </div>
                                                    <div class="birthday-container">
                                                        <div class="form-group" ng-class="{'has-error' : showBirthdayValidation(), 'has-success' : signupForm.birthdayMonth.$dirty && signupForm.birthdayDay.$dirty && signupForm.birthdayYear.$dirty && !showBirthdayValidation() }">
                                                            <div class="form-control fake-input-lg">
                                                                <label class="birthday-label">Birthday</label>
                                                                <div class="rbx-select-group month">
                                                                    <select class="input-field rbx-select" id="MonthDropdown" tabindex="4" rbx-valid-birthday rbx-form-interaction rbx-form-validation name="birthdayMonth" ng-model="signup.birthdayMonth">
                                                                        <option value="" disabled selected>Month</option>
                                                                        <option value="Jan">January</option>
                                                                        <option value="Feb">February</option>
                                                                        <option value="Mar">March</option>
                                                                        <option value="Apr">April</option>
                                                                        <option value="May">May</option>
                                                                        <option value="Jun">June</option>
                                                                        <option value="Jul">July</option>
                                                                        <option value="Aug">August</option>
                                                                        <option value="Sep">September</option>
                                                                        <option value="Oct">October</option>
                                                                        <option value="Nov">November</option>
                                                                        <option value="Dec">December</option>
                                                                    </select>
                                                                </div>
                                                                <div class="rbx-select-group day">
                                                                    <select class="input-field rbx-select" id="DayDropdown" tabindex="5" rbx-valid-birthday rbx-form-interaction rbx-form-validation name="birthdayDay" ng-model="signup.birthdayDay">
                                                                        <option value="" disabled selected>Day</option>
                                                                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                                            <option value="<?php echo $i; ?>">
                                                                                <?php echo $i; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="rbx-select-group year">
                                                                    <select class="input-field rbx-select" id="YearDropdown" rbx-valid-birthday rbx-form-interaction rbx-form-validation tabindex="6" name="birthdayYear" ng-model="signup.birthdayYear">
                                                                        <option value="" disabled selected>Year</option>
                                                                        <?php for ($i = date("Y"); $i >= date("Y") - 99; $i--) { ?>
                                                                            <option value="<?php echo $i; ?>">
                                                                                <?php echo $i; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <p id="signup-BirthdayInputValidation" class="form-control-label input-validation text-error" ng-bind="showBirthdayValidation() ? 'Invalid birthday' : ''">
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <div class="gender-container">
                                                        <div class="form-group" ng-class="{'has-error' : (badSubmit && !(signup.gender == 2 || signup.gender == 3)), 'has-success': signup.gender == 2 || signup.gender == 3 }">
                                                            <div class="form-control fake-input-lg">
                                                                <label>Gender</label>
                                                                <div id="FemaleButton" class="gender-circle" tabindex="7" rbx-form-interaction name="genderFemale" ng-class="{ 'selected-gender': signup.gender == 3 }" ng-click="setGender($event, 3)" ng-keypress="setGender($event, 3)">
                                                                    <div class="cover-sprite gender female"></div>
                                                                </div>
                                                                <div id="MaleButton" class="gender-circle" tabindex="8" rbx-form-interaction name="genderMale" ng-class="{ 'selected-gender': signup.gender == 2 }" ng-click="setGender($event, 2)" ng-keypress="setGender($event, 2)">
                                                                    <div class="cover-sprite gender male"></div>
                                                                </div>
                                                            </div>
                                                            <p id="signup-GenderInputValidation" class="form-control-label input-validation text-error" ng-bind="(badSubmit && !(signup.gender == 2 || signup.gender == 3)) ? 'Gender is required' : ''">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" ng-class="{'has-error' : (badSubmit || signupForm.captcha.$dirty) && signupForm.captcha.$invalid, 'has-success': (signupForm.captcha.$dirty && signupForm.captcha.$valid) }">
                                                        <div class="h-captcha" id="signup-captcha" data-sitekey="<?= SITE_CONFIG["captcha"]["siteKey"] ?>"></div>
                                                    </div>
                                                    <div class="legal-text-container">
                                                        By signing up you agree to our <a href="https://www.rovive.pro/info/terms-of-service" target="_blank">Terms</a> and <a href="https://www.rovive.pro/Info/Privacy.aspx" target="_blank">Privacy Policy</a>
                                                    </div>

                                                    <button id="signup-button" type="button" tabindex="9" class="btn-primary-md signup-submit-button" rbx-form-interaction name="signupSubmit" ng-disabled="isSubmitting" ng-show="isSectionShown">Sign Up</button>

                                                    <script>
                                                        function reEnableButton() {
                                                            // Re-enable the signup button
                                                            $("#signup-button").attr("disabled", false);
                                                            $("#signup-button").css("opacity", "1");
                                                        }

                                                        $("#signup-button").on("click", function() {
                                                            $("#signup-button").attr("disabled", true);
                                                            $("#signup-button").css("opacity", "0.5");
                                                            $("#GeneralErrorText").css("display", "none");

                                                            let username = $("#signup-username").val();
                                                            let password = $("#signup-password").val();
                                                            let confirmPassword = $("#signup-password-confirm").val();

                                                            let birthday = $("#YearDropdown").val() + " " + $("#MonthDropdown").val() + " " + $("#DayDropdown").val();

                                                            let gender = $(".selected-gender").attr("id") == "MaleButton" ? 2 : 3;

                                                            if (!$(".selected-gender").length || username == "" || password == "" || confirmPassword == "" || password != confirmPassword || birthday == "  ") {
                                                                reEnableButton();
                                                                return;
                                                            }

                                                            // Execute hCaptcha
                                                            let captchaResponse = $("#signup-captcha iframe").attr("data-hcaptcha-response");

                                                            // Check if hCaptcha response is available
                                                            if (captchaResponse) {
                                                                // Make the AJAX request with hCaptcha response
                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "/api/signup",
                                                                    data: {
                                                                        username: username,
                                                                        password: password,
                                                                        birthday: birthday,
                                                                        gender: gender,
                                                                        captchaResponse: captchaResponse,
                                                                    },
                                                                    success: function(response) {
                                                                        // Handle successful response
                                                                        console.log(response);
                                                                        window.location.href = "/";
                                                                    },
                                                                    error: function(xhr, status, error) {
                                                                        // Handle error response
                                                                        console.error(xhr.responseText);
                                                                        $("#GeneralErrorText").css("display", "block");
                                                                        $("#GeneralErrorText").html(xhr.responseText);
                                                                        reEnableButton();
                                                                    },
                                                                });
                                                            } else {
                                                                console.error("Client-Side: hCaptcha verification failed!");
                                                                $("#GeneralErrorText").css("display", "block");
                                                                $("#GeneralErrorText").html("Please verify that you are not a robot.");
                                                                reEnableButton();
                                                            }
                                                        });
                                                    </script>

                                                    <noscript>
                                                        <div class="text-danger">
                                                            <strong>JavaScript is required to submit this form.</strong>
                                                        </div>
                                                    </noscript>
                                                    <?php if ($robloxMessage && $robloxMessage != "") { ?>
                                                        <div class="alert-info" role="alert">
                                                            <b>
                                                                <?= htmlspecialchars($robloxMessage); ?>
                                                            </b>
                                                        </div>
                                                    <?php } ?>

                                                    <div id="GeneralErrorText" class="input-validation-large alert-warning font-bold" style="display: none">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                <?php } else { ?>
                                    <link rel="stylesheet" href="https://www.rovive.pro/css/indexcss.css">
                                    <div class="signup-container" ng-controller="SignupController">
                                        <div class="signup-input-area" ng-form name="signupForm" rbx-form-context context="RollerCoaster">
                                            <img src="/timg/rbx.png" style="position: absolute" alt="" />
                                            <div class="col-xs-12 section-content-off section-content">
                                                Signup is currently disabled. Please come back later.
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="attribution hidden-xs">
                <span class="notranslate">Game: Rovive Point</span><br>
                Developer: <span class="notranslate">StarMarine614</span>
            </div>
        </section>

        <section class="row full-height-section" id="WhatsRobloxContainer">

            <div class="col-md-12 inner-full-height-section">

                <div class="row" id="InnerWhatsRobloxContainer1">
                    <div id="WhatIsRobloxTextBg" class="col-sm-5 col-sm-offset-6 col-xs-8 col-xs-offset-2">
                        <h1 class="text-center">WHAT IS ROVIVE?</h1>
                        <p class="lead text-justify">
                            Rovive is an old Roblox revival, the best revival to experience old Roblox on.
                            We currently plan to have 2016 and 2018, possibly 2019 or 2021.
                        </p>
                    </div>
                </div>

                <div class="row" id="InnerWhatsRobloxContainer2">
                    <div id="GameImage1" class="col-sm-4 col-xs-12 game-image"></div>
                    <div id="GameImage2" class="hidden-xs col-sm-4 game-image"></div>
                    <div id="GameImage3" class="col-sm-4 hidden-xs game-image"></div>
                </div>

            </div>
        </section>
        <div class="clearfix"></div>

        <section id="DeviceSection">
            <div class="row" id="RobloxDeviceText">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2>ROVIVE ON YOUR DEVICE</h2>
                    <p class="lead center-block">
                        You can access Rovive on PC, soon Android and iOS.
                    </p>
                </div>
            </div>

            <div class="row" id="DeviceImageContainer">
                <div class="col-md-12">
                    <div class="row text-center">
                        <img id="ComputerImgSmall" class="center-block img-responsive hidden-lg ComputerImg" src="/img/0ad1ae4bf929fb82cad6f30fdf03b6db.png" alt="" />
                        <img class="center-block img-responsive visible-lg-block ComputerImg" src="/img/9edeef823842e76479587a57c05cb5bc.png" alt="" />
                    </div>
                </div>
            </div>
            <ul id="AppStoreContainer" class="row text-center app-store-container row-five">
                <li>
                    <a href="https://itunes.apple.com/us/app/roblox-mobile/id431946152" target="_blank" class="app-store-link-apple">
                        <img class="app-store-logo" src="/img/9819a104fc46fb90d183387ba81065a0.png" title="Rovive on App Store" alt="" />
                    </a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.rbx2016client&hl=en&utm_source=global_co&utm_medium=prtnr&utm_content=Mar2515&utm_campaign=PartBadge&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" target="_blank" class="app-store-link-android">
                        <img class="app-store-logo android" src="/img/c3f1d2562c735775d7fa2fc3ddb0dfdd.png" title="Get it on Google Play" alt="Get it on Google Play" />
                    </a>
                </li>
                <li>
                    <a href="http://amzn.com/B00NUF4YOA" target="_blank" class="app-store-link-amazon">
                        <img class="app-store-logo" src="/img/29d56f5d7a8c1d6d4a267b28134e221d.png" title="Rovive on Amazon Store" alt="" />
                    </a>
                </li>
                <li>
                    <a href="http://store.xbox.com/en-US/Xbox-One/Games/Rovive/c79323fd-00f8-462a-a97a-39a0eb61791e" target="_blank" class="app-store-link-xbox">
                        <img class="app-store-logo" src="/img/cfbff08ccdfe3e51898dfecf5635dc2a.png" title="Rovive on Xbox Store" alt="" />
                    </a>
                </li>
                <li>
                    <a href="https://www.microsoft.com/en-us/store/games/roblox/9nblgggzm6wm" target="_blank" class="app-store-link-windows10">
                        <img class="app-store-logo" src="/img/6e6e44a25ac2fc28a678880c2fec24a9.png" title="Rovive on Windows Store" alt="" />
                    </a>
                </li>
            </ul>
        </section>


        <footer class="container-footer">
            <div class="footer">
                <ul class="row footer-links">
                    <li class="col-4 col-xs-1 footer-link">
                        <a href="https://www.rovive.pro/Info/about-us" class="text-footer-nav roblox-interstitial" target="_blank">
                            About Us
                        </a>
                    </li>
                    <li class="col-4 col-xs-1 footer-link">
                        <a href="https://www.rovive.pro/Info/terms-of-service" class="text-footer-nav" target="_blank">
                            Terms
                        </a>
                    </li>
                    <li class="col-4 col-xs-1 footer-link">
                        <a href="https://www.rovive.pro/Info/Privacy.aspx" class="text-footer-nav privacy" target="_blank">
                            Privacy
                        </a>
                    </li>
                </ul>
                <p class="text-footer footer-note">
                    ©<?= date('Y') ?> Rovive
                </p>
            </div>
        </footer>

    </div>


    <img src="/timg/rbx.png" style="position: absolute" />


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Roblox",
            "url": "http://www.rovive.pro/",
            "logo": "/img/RoviveLetter.png",
            "sameAs": [
                "https://www.facebook.com/Rovive/",
                "https://twitter.com/roblox",
                "https://www.linkedin.com/company/147977",
                "https://www.instagram.com/roblox/",
                "https://www.youtube.com/user/roblox",
                "https://plus.google.com/+roblox",
                "https://www.twitch.tv/roblox"
            ]
        }
    </script>



    <script type='text/javascript' src='/js/6df9bc0534efbd8f409e764c1c275374.js'></script>



    <script type='text/javascript' src='/js/3b0c540bca77f11051d6358184298348.js'></script>
    <div ng-modules="baseTemplateApp">
        <script type="text/javascript" src="/js/eccdbe4a2de694b92fc35ce9ecb30d6c.js"></script>
    </div>
    <div ng-modules="pageTemplateApp">
        <!-- Template bundle: page -->
        <script type="text/javascript">
            "use strict";
            angular.module("pageTemplateApp", []).run(['$templateCache', function($templateCache) {

            }]);
        </script>

    </div>



    <script type='text/javascript'>
        Roblox.config.externalResources = [""];
        Roblox.config.paths['Pages.Catalog'] = '/js/943dbead6327ef7e601925fc45ffbeb0.js';
        Roblox.config.paths['Pages.CatalogShared'] = '/js/496e8f05b3aabfcd72a147ddb49aaf1e.js';
        Roblox.config.paths['Widgets.AvatarImage'] = '/js/6bac93e9bb6716f32f09db749cec330b.js';
        Roblox.config.paths['Widgets.DropdownMenu'] = '/js/7b436bae917789c0b84f40fdebd25d97.js';
        Roblox.config.paths['Widgets.GroupImage'] = '/js/33d82b98045d49ec5a1f635d14cc7010.js';
        Roblox.config.paths['Widgets.HierarchicalDropdown'] =
            '/js/3368571372da9b2e1713bb54ca42a65a.js';
        Roblox.config.paths['Widgets.ItemImage'] = '/js/e79fc9c586a76e2eabcddc240298e52c.js';
        Roblox.config.paths['Widgets.PlaceImage'] = '/js/31df1ed92170ebf3231defcd9b841008.js';
        Roblox.config.paths['Widgets.SurveyModal'] = '/js/d6e979598c460090eafb6d38231159f6.js';
    </script>


    <script>
        $(function() {
            Roblox.DeveloperConsoleWarning.showWarning();
        });
    </script>

    <script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

        Roblox.UpsellAdModal.Resources = {
            //<sl:translate>
            title: "Remove Ads Like This",
            body: "Builders Club members do not see external ads like these.",
            accept: "Upgrade Now",
            decline: "No, thanks"
            //</sl:translate>
        };
    </script>


    <script type='text/javascript' src='/js/f0b07e9a299b010e3b2bdc2d5fa3f7b1.js'></script>
</body>

</html>