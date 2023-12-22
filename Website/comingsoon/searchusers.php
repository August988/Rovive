<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
    <!-- MachineID: WEB400 -->
    <title>Users - ROBLOX</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ROBLOX Corporation" />
    <meta name="description"
        content="ROBLOX is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive games. These games range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration." />
    <meta name="keywords"
        content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine" />
    <meta name="apple-itunes-app" content="app-id=431946152" />
    <meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY" />

    <style id="server-side-styles">
        .imgDesktop-0-2-7 {
            width: 118px;
            height: 30px;
            display: none;
            background-size: auto 30px;
            background-image: url(/img/logoFull.png);
        }

        @media(min-width: 1301px) {
            .imgDesktop-0-2-7 {
                display: block;
            }
        }

        .imgMobile-0-2-8 {
            width: 30px;
            height: 30px;
            display: block;
            background-size: 30px;
            background-image: url(/img/RoviveLetter.png);
        }

        @media(min-width: 1301px) {
            .imgMobile-0-2-8 {
                display: none;
            }
        }

        .imgMobileWrapper-0-2-9 {
            margin-left: 40px;
        }

        .col-0-2-10 {
            max-width: 140px;
        }

        .openSideNavMobile-0-2-11 {
            display: none;
        }

        @media(max-width: 1300px) {
            .openSideNavMobile-0-2-11 {
                float: left;
                width: 30px;
                cursor: pointer;
                height: 30px;
                display: block;
            }
        }

        .container-0-2-12 {
            margin-top: 3px;
            padding-left: 0;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .navItem-0-2-14 {
            padding-right: 2rem;
        }

        @media(max-width: 1300px) {
            .navItem-0-2-14 {
                padding-right: 1.75rem;
            }
        }

        @media(max-width: 1250px) {
            .navItem-0-2-14 {
                padding-right: 1.5rem;
            }
        }

        @media(max-width: 1175px) {
            .navItem-0-2-14 {
                padding-right: 1rem;
            }
        }

        .col-0-2-15 {
            margin-left: 0;
            padding-left: 0;
        }

        .icon-0-2-18 {
            float: right;
            margin-top: -24px;
            padding-top: 0;
        }

        .searchInput-0-2-17 {
            width: 100%;
            border: none;
            padding-top: 0;
            padding-bottom: 0;
        }

        .searchInput-0-2-17:focus {
            border: none !important;
            box-shadow: none !important;
        }

        .navbar-0-2-1 {
            padding-top: 6px;
            padding-bottom: 3px;
        }

        .navContainer-0-2-2 {
            max-width: 100% !important;
            padding-top: 0;
            padding-bottom: 0;
        }

        .leftContainer-0-2-3 {}

        .row-0-2-4 {
            width: 100%;
        }

        .wrapper-0-2-5 {
            overflow: auto;
            max-width: 100vw;
            margin-bottom: 40px;
        }

        @media(max-width: 991px) {
            .wrapper-0-2-5 {
                margin-bottom: 98px;
            }
        }

        .navbar-d0-0-2-6 {
            background-color: #0074BD;
        }

        .link-0-2-47 {
            font-size: 21px;
            text-align: center;
            font-weight: 300;
            text-decoration: none;
        }

        .link-0-2-47:hover {
            color: #191919;
        }

        .footerContainer-0-2-49 {
            padding-top: 5px;
            padding-bottom: 20px;
        }

        .main-0-2-23 {
            min-height: 95vh;
        }

        .alertLink-0-2-21:hover {
            text-decoration: underline;
        }

        .fakeAlert-0-2-22 {
            width: 100%;
            height: 40px;
            position: relative;
        }

        .buyButton-0-2-30 {
            width: 100%;
            background: linear-gradient(0deg, rgba(0, 113, 0, 1) 0%, rgba(64, 193, 64, 1) 100%);
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .buyButton-0-2-30:hover {
            background: linear-gradient(0deg, rgba(71, 232, 71, 1) 0%, rgba(71, 232, 71, 1) 100%);
        }

        .normal-0-2-31 {
            width: auto !important;
        }

        .cancelButton-0-2-32 {
            width: 100%;
            border: 1px solid #404041;
            background: linear-gradient(0deg, rgba(69, 69, 69, 1) 0%, rgba(140, 140, 140, 1) 100%);
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .cancelButton-0-2-32:hover {
            background: grey !important;
        }

        .continueButton-0-2-33 {
            width: 100%;
            border: 1px solid #084ea6;
            background: linear-gradient(0deg, rgba(8, 79, 192, 1) 0%, rgba(5, 103, 234, 1) 100%);
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .continueButton-0-2-33:hover {
            background: linear-gradient(0deg, rgba(2, 73, 198, 1) 0%, rgba(7, 147, 253, 1) 100%);
            ;
        }

        .badPurchaseRow-0-2-34 {
            margin-top: 70px;
        }

        .btn-0-2-35 {
            color: white;
            border: 1px solid #357ebd;
            margin: 0 auto;
            display: block;
            padding: 1px 13px 3px 13px;
            font-size: 20px;
            text-align: center;
            font-weight: normal;
        }

        .btn-0-2-35:disabled {
            opacity: 0.5;
        }

        .defaultBg-0-2-37 {
            background: linear-gradient(0deg, rgba(0, 113, 0, 1) 0%, rgba(64, 193, 64, 1) 100%);
        }

        .defaultBg-0-2-37:hover {
            background: linear-gradient(0deg, rgba(71, 232, 71, 1) 0%, rgba(71, 232, 71, 1) 100%);
        }

        .adImage-0-2-25 {
            width: 100%;
            height: auto;
            margin: 0 auto;
            display: block;
        }

        @media(max-width: 800px) {
            .adImage-0-2-25 {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }

        .column-0-2-27 {
            display: inline-block;
        }

        .input-0-2-28 {
            width: 100%;
        }

        .searchButton-0-2-29 {
            font-size: 16px;
            padding-left: 6px;
            padding-right: 6px;
        }

        .textRight-0-2-38 {
            text-align: right;
        }

        .unknownStatus-0-2-39 {
            color: #494949;
        }

        .onlineStatus-0-2-40 {
            color: #00bf00;
        }

        .offlineStatus-0-2-41 {
            color: red;
        }

        .status-0-2-42 {
            top: -65px;
            height: 0;
            display: block;
            position: relative;
            font-size: 80px;
        }

        .username-0-2-43 {
            margin-left: 20px;
        }

        .fw-bold {
            font-weight: 700 !important
        }

        .fw-bolder {
            font-weight: bolder !important
        }

        .userRow-0-2-44 {
            color: inherit;
            border-top: 1px solid #c3c3c3;
            padding-top: 20px;
            padding-bottom: 20px;
        }
    </style>

    <link href="/img/favicon.ico" rel="icon" />
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700" rel="stylesheet" type="text/css">

    <link rel="canonical" href="https://www.rovive.pro/search/users" />


    <link rel='stylesheet' href='/css/leanbase___9b9fc145916d65f94e610d1f02775894_m.css' />

    <link rel='stylesheet' href='/css/page___7b95eca911917eae0bbb3bdc9aec6011_m.css' />

    <link rel='stylesheet' href='/css/cba6a03d6b3adf64.css' />

    <script id="__NEXT_DATA__" type="application/json">
        {
            "props": {
                "pageProps": {}
            },
            "page": "/Forum/ShowForum.aspx",
            "query": {},
            "buildId": "iC-ZhOVhJeI6F7sFSjMPa",
            "runtimeConfig": {
                "backend": {
                    "proxyEnabled": true,
                    "flags": {
                        "myAccountPage2016Enabled": true,
                        "catalogGenreFilterSupported": false,
                        "catalogPageLimit": 28,
                        "catalogSaleCountVisibleFromDetailsEndpoint": false,
                        "catalogDetailsPageResellerLimit": 10,
                        "avatarPageInventoryLimit": 10,
                        "friendsPageLimit": 25,
                        "settingsPageThemeSelectorEnabled": true,
                        "tradeWindowInventoryCollectibleLimit": 10,
                        "moneyPagePromotionTabVisible": false,
                        "gameGenreFilterMethod": "keyword",
                        "gameGenreFilterSupported": true,
                        "avatarPageOutfitCreatedAtAvailable": false,
                        "catalogDetailsPageOwnersTabEnabled": false,
                        "launchUsingEsURI": true
                    },
                    "baseUrl": "https://www.roblox.com",
                    "apiFormat": "https://{0}.roblox.com{1}"
                }
            },
            "nextExport": true,
            "autoExport": true,
            "isFallback": false,
            "scriptLoader": []
        }
    </script>

    <script defer="" nomodule="" src="/polyfills-c67a75d1b6f99dc8.js"></script>
    <script src="/webpack-2608fe0b963b8982.js" defer=""></script>
    <script src="/framework-4556c45dd113b893.js" defer=""></script>
    <script src="/main-a19d41ac16dbce80.js" defer=""></script>
    <script src="/_app-2a6f2821b37f865e.js" defer=""></script>
    <script src="/211-4330eecd2439c41d.js" defer=""></script>
    <script src="/_buildManifest.js" defer=""></script>
    <script src="/_ssgManifest.js" defer=""></script>
    <script src="/avatar-0fce9971bfedf491.js" defer=""></script>

    <style id="server-side-styles">
        .imgDesktop-0-2-7 {
            width: 118px;
            height: 30px;
            display: none;
            background-size: auto 30px;
            background-image: url(/img/logoFull.png);
        }

        @media(min-width: 1301px) {
            .imgDesktop-0-2-7 {
                display: block;
            }
        }

        .imgMobile-0-2-8 {
            width: 30px;
            height: 30px;
            display: block;
            background-size: 30px;
            background-image: url(/img/RoviveLetter.png);
        }

        @media(min-width: 1301px) {
            .imgMobile-0-2-8 {
                display: none;
            }
        }

        .imgMobileWrapper-0-2-9 {
            margin-left: 40px;
        }

        .col-0-2-10 {
            max-width: 140px;
        }

        .openSideNavMobile-0-2-11 {
            display: none;
        }

        @media(max-width: 1300px) {
            .openSideNavMobile-0-2-11 {
                float: left;
                width: 30px;
                cursor: pointer;
                height: 30px;
                display: block;
            }
        }

        .container-0-2-12 {
            margin-top: 3px;
            padding-left: 0;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .linkEntry-0-2-13 {
            color: white;
            padding: 4px 8px;
            font-size: 16px;
            text-align: center;
            transition: none;
            font-weight: 400;
            margin-bottom: 0;
            padding-bottom: 0;
            text-decoration: none;
        }

        .linkEntry-0-2-13:hover {
            color: white;
            cursor: pointer;
            background: rgba(25, 25, 25, 0.1);
            transition: none;
            border-radius: 4px;
        }

        .navItem-0-2-14 {
            padding-right: 2rem;
        }

        @media(max-width: 1300px) {
            .navItem-0-2-14 {
                padding-right: 1.75rem;
            }
        }

        @media(max-width: 1250px) {
            .navItem-0-2-14 {
                padding-right: 1.5rem;
            }
        }

        @media(max-width: 1175px) {
            .navItem-0-2-14 {
                padding-right: 1rem;
            }
        }

        .col-0-2-15 {
            margin-left: 0;
            padding-left: 0;
        }

        .icon-0-2-18 {
            float: right;
            margin-top: -24px;
            padding-top: 0;
        }

        .wrapper-0-2-16 {
            width: 100%;
            border: 1px solid #c3c3c3;
            padding: 4px 2px;
            background: white;
            border-radius: 2px;
        }

        .searchInput-0-2-17 {
            width: 100%;
            border: none;
            padding-top: 0;
            padding-bottom: 0;
        }

        .searchInput-0-2-17:focus {
            border: none !important;
            box-shadow: none !important;
        }

        .navbar-0-2-1 {
            padding-top: 6px;
            padding-bottom: 3px;
        }

        .navContainer-0-2-2 {
            max-width: 100% !important;
            padding-top: 0;
            padding-bottom: 0;
        }

        .leftContainer-0-2-3 {}

        .row-0-2-4 {
            width: 100%;
        }

        .wrapper-0-2-5 {
            overflow: auto;
            max-width: 100vw;
            margin-bottom: 40px;
        }

        @media(max-width: 991px) {
            .wrapper-0-2-5 {
                margin-bottom: 98px;
            }
        }

        .navbar-d0-0-2-6 {
            background-color: #0074BD;
        }

        .text-0-2-24 {
            color: #B8B8B8;
            font-size: 12px;
            font-weight: 400;
        }

        .link-0-2-25 {
            font-size: 21px;
            text-align: center;
            font-weight: 300;
            text-decoration: none;
        }

        .link-0-2-25:hover {
            color: #191919;
        }

        .footer-0-2-26 {
            background: #ffffff;
        }

        .footerContainer-0-2-27 {
            padding-top: 5px;
            padding-bottom: 20px;
        }

        .main-0-2-23 {
            min-height: 95vh;
        }

        .alertBg-0-2-19 {
            background: #F68802;
        }

        .alertText-0-2-20 {
            color: #fff;
            padding: 12px 0;
            font-size: 18px;
            text-align: center;
            font-weight: bold;
        }

        .alertLink-0-2-21 {
            color: #fff;
        }

        .alertLink-0-2-21:hover {
            text-decoration: underline;
        }

        .fakeAlert-0-2-22 {
            width: 100%;
            height: 40px;
            position: relative;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .container-0-2-42 {
            top: 0;
            left: 0;
            z-index: 999;
            position: fixed;
        }

        .card-0-2-43 {
            width: 175px;
            height: 100vh;
            background: #f2f2f2;
            padding-left: 10px;
            padding-right: 10px;
        }

        .username-0-2-44 {
            color: #1e1e1f;
            font-size: 18px;
            padding-top: 8px;
            margin-bottom: 0;
            padding-bottom: 5px;
        }

        .divider-0-2-45 {
            width: 100%;
            height: 2px;
            border-bottom: 2px solid #c3c3c3;
        }

        .upgradeNowButton-0-2-46 {
            color: white;
            width: 100%;
            font-size: 15px;
            background: #01a2fd;
            margin-top: 10px;
            text-align: center;
            font-weight: 500;
            padding-top: 8px;
            border-radius: 4px;
            padding-bottom: 8px;
        }

        .upgradeNowButton-0-2-46:hover {
            background: #3ab8ff;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .text-0-2-36 {
            color: white;
            display: inline;
            font-size: 16px;
            margin-top: 2px;
            text-align: right;
            font-weight: 400;
            white-space: nowrap;
            border-bottom: 0;
            margin-bottom: 0;
        }

        .link-0-2-37 {
            color: white;
            padding: 4px 8px;
            text-decoration: none;
        }

        .link-0-2-37:hover {
            color: white;
            cursor: pointer;
            background: rgba(25, 25, 25, 0.1);
            border-radius: 4px;
        }

        .settingsIcon-0-2-38 {
            float: right;
        }

        .linkContainerCol-0-2-40 {
            float: right;
            max-width: 250px;
        }

        .robuxText-0-2-41 {
            margin-left: 5px;
            margin-right: 20px;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .imgDesktop-0-2-7 {
            width: 118px;
            height: 30px;
            display: none;
            background-size: auto 30px;
            background-image: url(/img/logoFull.png);
        }

        @media(min-width: 1301px) {
            .imgDesktop-0-2-7 {
                display: block;
            }
        }

        .imgMobile-0-2-8 {
            width: 30px;
            height: 30px;
            display: block;
            background-size: 30px;
            background-image: url(/img/RoviveLetter.png);
        }

        @media(min-width: 1301px) {
            .imgMobile-0-2-8 {
                display: none;
            }
        }

        .imgMobileWrapper-0-2-9 {
            margin-left: 40px;
        }

        .col-0-2-10 {
            max-width: 140px;
        }

        .openSideNavMobile-0-2-11 {
            display: none;
        }

        @media(max-width: 1300px) {
            .openSideNavMobile-0-2-11 {
                float: left;
                width: 30px;
                cursor: pointer;
                height: 30px;
                display: block;
            }
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .container-0-2-12 {
            margin-top: 3px;
            padding-left: 0;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .linkEntry-0-2-13 {
            color: white;
            padding: 4px 8px;
            font-size: 16px;
            text-align: center;
            transition: none;
            font-weight: 400;
            margin-bottom: 0;
            padding-bottom: 0;
            text-decoration: none;
        }

        .linkEntry-0-2-13:hover {
            color: white;
            cursor: pointer;
            background: rgba(25, 25, 25, 0.1);
            transition: none;
            border-radius: 4px;
        }

        .navItem-0-2-14 {
            padding-right: 2rem;
        }

        @media(max-width: 1300px) {
            .navItem-0-2-14 {
                padding-right: 1.75rem;
            }
        }

        @media(max-width: 1250px) {
            .navItem-0-2-14 {
                padding-right: 1.5rem;
            }
        }

        @media(max-width: 1175px) {
            .navItem-0-2-14 {
                padding-right: 1rem;
            }
        }

        .col-0-2-15 {
            margin-left: 0;
            padding-left: 0;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .icon-0-2-18 {
            float: right;
            margin-top: -24px;
            padding-top: 0;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .wrapper-0-2-16 {
            width: 100%;
            border: 1px solid #c3c3c3;
            padding: 4px 2px;
            background: white;
            border-radius: 2px;
        }

        .searchInput-0-2-17 {
            width: 100%;
            border: none;
            padding-top: 0;
            padding-bottom: 0;
        }

        .searchInput-0-2-17:focus {
            border: none !important;
            box-shadow: none !important;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
    </style>
    <style data-jss="" data-meta="Unthemed">
        .text-0-2-24 {
            color: #B8B8B8;
            font-size: 12px;
            font-weight: 400;
        }

        .link-0-2-25 {
            font-size: 21px;
            text-align: center;
            font-weight: 300;
            text-decoration: none;
        }

        .link-0-2-25:hover {
            color: #191919;
        }

        .footer-0-2-26 {
            background: #ffffff;
        }

        .footerContainer-0-2-27 {
            padding-top: 5px;
            padding-bottom: 20px;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .main-0-2-23 {
            min-height: 95vh;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .alertBg-0-2-19 {
            background: #F68802;
        }

        .alertText-0-2-20 {
            color: #fff;
            padding: 12px 0;
            font-size: 18px;
            text-align: center;
            font-weight: bold;
        }

        .alertLink-0-2-21 {
            color: #fff;
        }

        .alertLink-0-2-21:hover {
            text-decoration: underline;
        }

        .fakeAlert-0-2-22 {
            width: 100%;
            height: 40px;
            position: relative;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .adImage-0-2-35 {
            width: 100%;
            height: auto;
            margin: 0 auto;
            display: block;
        }

        @media(max-width: 800px) {
            .adImage-0-2-35 {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .image-0-2-55 {
            width: 100%;
            height: auto;
            margin: 0 auto;
            display: block;
            max-width: 728px;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .vTab-0-2-77 {
            cursor: pointer;
            display: inline-block;
            border-top: 1px solid #9e9e9e;
            border-left: 1px solid #9e9e9e;
            border-right: 1px solid #9e9e9e;
            margin-right: 4px;
        }

        .vTabLabel-0-2-78 {
            padding: 10px 5px 8px 5px;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 0;
        }

        .buttonCol-0-2-80 {
            border-bottom: 2px solid #c3c3c3;
        }

        .btnBottomSeperator-0-2-81 {
            width: 100%;
            height: 5px;
            background: white;
            margin-bottom: -5px;
        }

        .vTabUnselected-0-2-82 {
            background: #d6d6d6;
            padding-top: 7px;
        }

        .vTabUnselected-0-2-82:hover {
            background: #e8e8e8;
        }

        .count-0-2-83 {
            border: 1px solid #84a5c9;
            background: #e0f1fc;
            padding-left: 4px;
            padding-right: 4px;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .buyButton-0-2-59 {
            width: 100%;
            background: linear-gradient(0deg, rgba(0, 113, 0, 1) 0%, rgba(64, 193, 64, 1) 100%);
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .buyButton-0-2-59:hover {
            background: linear-gradient(0deg, rgba(71, 232, 71, 1) 0%, rgba(71, 232, 71, 1) 100%);
        }

        .normal-0-2-60 {
            width: auto !important;
        }

        .cancelButton-0-2-61 {
            width: 100%;
            border: 1px solid #404041;
            background: linear-gradient(0deg, rgba(69, 69, 69, 1) 0%, rgba(140, 140, 140, 1) 100%);
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .cancelButton-0-2-61:hover {
            background: grey !important;
        }

        .continueButton-0-2-62 {
            width: 100%;
            border: 1px solid #084ea6;
            background: linear-gradient(0deg, rgba(8, 79, 192, 1) 0%, rgba(5, 103, 234, 1) 100%);
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .continueButton-0-2-62:hover {
            background: linear-gradient(0deg, rgba(2, 73, 198, 1) 0%, rgba(7, 147, 253, 1) 100%);
            ;
        }

        .badPurchaseRow-0-2-63 {
            margin-top: 70px;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .btn-0-2-99 {
            color: white;
            border: 1px solid #357ebd;
            margin: 0 auto;
            display: block;
            padding: 1px 13px 3px 13px;
            font-size: 20px;
            text-align: center;
            font-weight: normal;
        }

        .btn-0-2-99:disabled {
            opacity: 0.5;
        }

        .wrapper-0-2-100 {
            width: 100%;
            border: 1px solid #a7a7a7;
            background: #e1e1e1;
        }

        .defaultBg-0-2-101 {
            background: linear-gradient(0deg, rgba(0, 113, 0, 1) 0%, rgba(64, 193, 64, 1) 100%);
        }

        .defaultBg-0-2-101:hover {
            background: linear-gradient(0deg, rgba(71, 232, 71, 1) 0%, rgba(71, 232, 71, 1) 100%);
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .image-0-2-64 {
            width: 100%;
            height: auto;
            margin: 0 auto;
            display: block;
            max-width: 400px;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .header-0-2-56 {
            font-size: 24px;
        }

        .renderButtonWrapper-0-2-57 {
            float: left;
            margin-bottom: 20px;
        }

        .renderButton-0-2-58 {
            font-size: 14px;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .head-0-2-65 {
            width: 60px;
            border: 1px solid #dededd;
            cursor: pointer;
            height: 50px;
            margin: 0 auto;
            display: block;
        }

        .torso-0-2-66 {
            width: 120px;
            border: 1px solid #dededd;
            cursor: pointer;
            height: 110px;
            margin: 0 auto;
            display: block;
            margin-top: 10px;
        }

        .leftArm-0-2-67 {
            width: 40px;
            border: 1px solid #dededd;
            cursor: pointer;
            height: 110px;
            margin: 0 auto;
            display: block;
            z-index: 99;
            margin-left: -50px;
        }

        .rightArm-0-2-68 {
            width: 40px;
            border: 1px solid #dededd;
            cursor: pointer;
            height: 110px;
            margin: 0 auto;
            display: block;
            z-index: 99;
            margin-top: -110px;
            margin-left: 130px;
        }

        .leftLeg-0-2-69 {
            float: left;
            width: calc(50% - 10px);
            border: 1px solid #dededd;
            cursor: pointer;
            height: 110px;
            margin-right: 10px;
        }

        .rightLeg-0-2-70 {
            float: right;
            width: calc(50% - 10px);
            border: 1px solid #dededd;
            cursor: pointer;
            height: 110px;
            margin-left: 10px;
        }

        .header-0-2-71 {
            margin: 0;
            font-size: 24px;
            font-weight: 400;
        }

        .legs-0-2-72 {
            width: 120px;
            height: 100%;
            margin: 10px auto 0 auto;
            display: block;
        }

        .colorSelectorWrapper-0-2-73 {
            width: 200px;
            border: 1px solid #9e9e9e;
            height: 300px;
            padding: 5px 15px;
            position: absolute;
            background: white;
            overflow-y: auto;
            margin-left: 10px;
        }

        .colorPaletteEntry-0-2-74 {
            width: 25px;
            height: 25px;
            margin: 0 auto;
            display: block;
        }

        .colorPaletteEntry-0-2-74:hover {
            border: 1px solid white;
            cursor: pointer;
        }

        .close-0-2-75 {
            cursor: pointer;
        }

        .row-0-2-76 {
            margin-top: 20px;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .image-0-2-102 {
            width: 100%;
            height: auto;
            margin: 0 auto;
            max-width: 400px;
            padding-top: 20px;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .itemName-0-2-91 {
            height: 36px;
            overflow: hidden;
            font-weight: 700;
            margin-bottom: 0;
        }

        .image-0-2-92 {
            margin: 0 auto;
            display: block;
            max-width: 100px;
        }

        .wearButton-0-2-93 {
            float: right;
            width: auto;
            font-size: 12px;
            padding-top: 2px;
            margin-bottom: -25px;
            padding-bottom: 2px;
        }

        .wearButtonWrapper-0-2-94 {
            position: relative;
        }

        .assetTypeLabel-0-2-95 {
            color: #666;
            font-weight: 600;
        }

        .assetType-0-2-96 {
            color: #0055b3;
        }

        .assetTypeWrapper-0-2-97 {
            font-size: 12px;
        }

        .thumbWrapper-0-2-98 {
            margin-top: -10px;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .subtitle-0-2-90 {
            margin: 0;
            font-size: 24px;
            font-weight: 400;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .categoryEntry-0-2-84 {
            color: #0055b3;
            cursor: pointer;
            text-align: center;
            margin-bottom: 0;
        }

        .categoryWrapper-0-2-85 {
            margin: 0 auto;
        }

        .selected-0-2-86 {
            font-weight: 700;
        }

        .paginationText-0-2-87 {
            text-align: center;
            user-select: none;
            margin-bottom: 0;
        }

        .pageEnabled-0-2-88 {
            color: #0055b3;
            cursor: pointer;
        }

        .pageDisabled-0-2-89 {
            color: inherit;
        }
    </style>
    <style data-jss="" data-meta="Unthemed">
        .header-0-2-53 {
            font-size: 30px;
            margin-top: 0;
            font-weight: 700;
            margin-bottom: 0;
        }

        .characterContainer-0-2-54 {
            padding: 4px 8px;
            overflow: hidden;
            background: #fff;
        }
    </style>

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



    <script type='text/javascript' src='/js/772ab381c3064441d07dc1235c79872c.js'></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link href="/img/favicon.ico" rel="icon" />

    


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    

    <script type="text/javascript">
        if (typeof (Roblox) === "undefined") {
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
        if (typeof (Roblox) === "undefined") {
            Roblox = {};
        }
        Roblox.Endpoints = Roblox.Endpoints || {};
        Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
    </script>

    
        <!-- <link rel='stylesheet' class="dark-theme" href='/css/dark.css' /> -->
    
</head>

<body id="rbx-body" class="" data-performance-relative-value="0.000" data-internal-page-name=""
    data-send-event-percentage="0.00">

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
        } else {
            toggleLightTheme(true);
        }

        // Listen for changes to the prefers-color-scheme media query
        prefersDark.addListener((mediaQuery) => toggleDarkTheme(mediaQuery.matches));

        // Add or remove the "dark" class based on if the media query matches
        function toggleDarkTheme(shouldAdd) {
            const heads = document.getElementsByTagName("head");
            for (let i = 0; i < heads.length; i++) {
                const head = heads[i];
                const cssFile = document.createElement('link');
                cssFile.rel = 'stylesheet';
                cssFile.href = "/css/dark.css";
                head.appendChild(cssFile);
            }
        }

        function toggleLightTheme(shouldAdd) {
            const heads = document.getElementsByTagName("head");
            for (let i = 0; i < heads.length; i++) {
                const head = heads[i];
                const cssFile = document.createElement('link');
                cssFile.rel = 'stylesheet';
                cssFile.href = "/css/light.css";
                head.appendChild(cssFile);
            }
        }
    </script>
    <div id="roblox-linkify" data-enabled="true"
        data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.idk16\.cf|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))"
        data-regex-flags="gm"
        data-as-http-regex="((blog|wiki|[^.]help|corp|polls|bloxcon|developer|devforum)\.roblox\.com|robloxlabs\.com)">
    </div>
    <div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500">
    </div>
    <div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0">
    </div>


    <div id="fb-root"></div>

    <div id="wrap" class="wrap no-gutter-ads logged-in" data-gutter-ads-enabled="false">

        <div id="header" class="navbar-fixed-top rbx-header" data-isfriendshiprealtimeupdateenabled="true"
            role="navigation">
            <div class="container-fluid">
                <div class="rbx-navbar-header">
                    <div data-behavior="nav-notification" class="rbx-nav-collapse" onselectstart="return false;">
                        <span class="icon-nav-menu"></span>

                    </div>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="https://www.rovive.pro/">
                            <span class="icon-logo"></span>
                            <span class="icon-logo-r"></span>
                        </a>
                    </div>
                </div>
                <ul class="nav rbx-navbar hidden-xs hidden-sm col-md-4 col-lg-3">
                    <li>
                        <a class="nav-menu-title" href="https://www.rovive.pro/games">Games</a>
                    </li>
                    <li>
                        <a class="nav-menu-title" href="https://www.rovive.pro/catalog/">Catalog</a>
                    </li>
                    <li>
                        <a class="nav-menu-title" href="https://www.rovive.pro/develop">Develop</a>
                    </li>
                    <li>
                        <a class="buy-robux nav-menu-title"
                            href="https://www.rovive.pro/upgrades/robux?ctx=nav">ROBUX</a>
                    </li>
                </ul>
                <!--rbx-navbar-->
                <div id="navbar-universal-search" class="navbar-left rbx-navbar-search col-xs-5 col-sm-6 col-md-3"
                    data-behavior="univeral-search" role="search">
                    <div class="input-group">

                        <input id="navbar-search-input" class="form-control input-field" type="text"
                            placeholder="Search" maxlength="120" />
                        <div class="input-group-btn">
                            <button id="navbar-search-btn" class="input-addon-btn" type="submit">
                                <span class="icon-nav-search"></span>
                            </button>
                        </div>
                    </div>
                    <ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
                        <li class="rbx-navbar-search-option selected"
                            data-searchurl="https://www.rovive.pro/search/users?keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span>
                                in People</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="https://www.rovive.pro/games/?Keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span>
                                in Games</span>
                        </li>
                        <li class="rbx-navbar-search-option"
                            data-searchurl="https://www.rovive.pro/catalog/browse.aspx?CatalogContext=1&amp;Keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span>
                                in Catalog</span>
                        </li>
                        <li class="rbx-navbar-search-option"
                            data-searchurl="https://www.rovive.pro/groups/search.aspx?val=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span>
                                in Groups</span>
                        </li>
                        <li class="rbx-navbar-search-option"
                            data-searchurl="https://www.rovive.pro/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span>
                                in Library</span>
                        </li>
                    </ul>
                </div>
                <!--rbx-navbar-search-->
                <div class="navbar-right rbx-navbar-right col-xs-4 col-sm-3">
                    <ul class="nav navbar-right rbx-navbar-icon-group">
                        <li id="navbar-setting" class="navbar-icon-item">
                            <a class="rbx-menu-item roblox-popover-close" data-toggle="popover"
                                data-bind="popover-setting" data-viewport="#header" data-original-title="" title="">
                                <span class="icon-nav-settings roblox-popover-close" id="nav-settings"></span>
                                <span class="notification-red nav-setting-highlight hidden">0</span>
                            </a>
                            <div class="rbx-popover-content" data-toggle="popover-setting">
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a class="rbx-menu-item" href="https://www.rovive.pro/my/account">
                                            <p>Settings</p>
                                            <span class="notification-blue nav-setting-highlight hidden">0</span>
                                        </a>
                                    </li>
                                    <% if (role == "approver" || role == "mod" || role == "admin" || role == "owner") { %>
                                    <li><a class="rbx-menu-item" href="https://www.rovive.pro/admi">
                                            <p>Admin</p>
                                        </a></li>
                                    
                                    <li><a class="rbx-menu-item" href="https://www.rovive.pro/Help/Builderman.aspx"
                                            target="_blank">
                                            <p>Help</p>
                                        </a></li>
                                    <li><a class="rbx-menu-item" href="/logout">
                                            <p>Logout</p>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                        <li id="navbar-tix" class="navbar-icon-item">
                            <a id="nav-tix-icon" class="rbx-menu-item" data-original-title="" title="">
                                <span class="icon-nav-tix roblox-popover-close" id="nav-tix"></span>
                                <span class="rbx-text-navbar-right" id="nav-tix-amount"><%= tixFormatted %></span>
                            </a>
                            <script>
                                var tixIcon = document.getElementById('nav-tix-icon');
                                tixIcon.addEventListener('click', function () {
                                    window.location.replace(
                                        "https://www.rovive.pro/My/Money.aspx#/#Summary_tab");
                                });
                            </script>
                        </li>
                        <li id="navbar-robux" class="navbar-icon-item">
                            <a id="nav-robux-icon" class="rbx-menu-item" data-toggle="popover" data-bind="popover-robux"
                                data-original-title="" title="">
                                <span class="icon-nav-robux roblox-popover-close" id="nav-robux"></span>
                                <span class="rbx-text-navbar-right" id="nav-robux-amount"><%= robuxFormatted %></span>
                            </a>
                            <div class="rbx-popover-content" data-toggle="popover-robux">
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="https://www.rovive.pro/My/Money.aspx#/#Summary_tab"
                                            id="nav-robux-balance" class="rbx-menu-item"><%= robux2 %> ROBUX</a></li>
                                    <li><a href="https://www.rovive.pro/upgrades/robux?ctx=navpopover"
                                            class="rbx-menu-item">Buy ROBUX</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="rbx-navbar-right-search" data-toggle="toggle-search">
                            <a class="rbx-menu-icon rbx-menu-item">
                                <span class="icon-nav-search-white"></span>
                            </a>
                        </li>
                    </ul>
                </div><!-- navbar right-->
                <ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
                    <li>
                        <a class="nav-menu-title" href="https://www.rovive.pro/games">Games</a>
                    </li>
                    <li>
                        <a class="nav-menu-title" href="https://www.rovive.pro/catalog/">Catalog</a>
                    </li>
                    <li>
                        <a class="nav-menu-title" href="https://www.rovive.pro/develop">Develop</a>
                    </li>
                    <li>
                        <a class="buy-robux nav-menu-title"
                            href="https://www.rovive.pro/upgrades/robux?ctx=nav">ROBUX</a>
                    </li>
                </ul>
                <!--rbx-navbar-->
            </div>
        </div>


        <% if (userid != 0) { %>
        <!-- LEFT NAV MENU -->
        <div id="navigation" class="rbx-left-col nav-show" data-behavior="left-col">
            <ul>
                <li class="text-lead">
                    <a class="text-overflow"
                        href="https://www.rovive.pro/users/<?= $_SESSION["user"]["id"] ?>/profile"><?= htmlspecialchars($_SESSION["user"]["username"]) ?></a>
                </li>
                <li class="rbx-divider"></li>
            </ul>

            <div class="rbx-scrollbar mCustomScrollbar _mCS_1 mCS_no_scrollbar" data-toggle="scrollbar"
                onselectstart="return false;">
                <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 685px;"
                    tabindex="0">
                    <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                        style="position:relative; top:0; left:0;" dir="ltr">
                        <ul>
                            <li><a href="https://www.rovive.pro/home" id="nav-home"><span
                                        class="icon-nav-home"></span><span>Home</span></a></li>
                            <li><a href="https://www.rovive.pro/users/<?= $_SESSION["user"]["id"] ?>/profile" id="nav-profile"><span
                                        class="icon-nav-profile"></span><span>Profile</span></a></li>
                            <li>
                                <a href="/my/messages" id="nav-message" data-count="0">
                                    <span class="icon-nav-message"></span><span>Messages</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.rovive.pro/users/<?= $_SESSION["user"]["id"] ?>/friends#!/friend-requests"
                                    id="nav-friends" data-count="999+">
                                    <span class="icon-nav-friends"></span><span>Friends</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.rovive.pro/my/avatar" id="nav-character">
                                    <span class="icon-nav-charactercustomizer"></span><span>Avatar</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.rovive.pro/users/<?= $_SESSION["user"]["id"] ?>/inventory" id="nav-inventory">
                                    <span class="icon-nav-inventory"></span><span>Inventory</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.rovive.pro/my/money.aspx#/#TradeItems_tab" id="nav-trade">
                                    <span class="icon-nav-trade"></span><span>Trade</span>
                            </li>
                            <li>
                                <a href="https://www.rovive.pro/my/groups.aspx" id="nav-group">
                                    <span class="icon-nav-group"></span><span>Groups</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://forum.rovive.pro/forum/" id="nav-forum">
                                    <span class="icon-nav-forum"></span><span>Forum</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://blog.rovive.pro" id="nav-blog">
                                    <span class="icon-nav-blog"></span><span>Blog</span>
                                </a>
                            </li>
                            <li class="rbx-upgrade-now">
                                <a href="https://www.rovive.pro/premium/membership?ctx=leftnav" class="btn-secondary-md"
                                    id="upgrade-now-button">Upgrade Now</a>
                            </li>
                            <li class="font-bold small">
                                Events
                            </li>
                        </ul>
                    </div>
                    <div class="mCSB_draggerContainer">
                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                            style="position: absolute; min-height: 30px; display: block; height: 0px; max-height: 650px; top: 0px;"
                            oncontextmenu="return false;">
                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                        </div>
                        <div class="mCSB_draggerRail"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script type="text/javascript">
        var Roblox = Roblox || {};
        (function () {
            if (Roblox && Roblox.Performance) {
                Roblox.Performance.setPerformanceMark("navigation_end");
            }
        })();
    </script>

    <div id="MasterContainer">


        <script type="text/javascript">
            $(function () {
                function trackReturns() {
                    function dayDiff(d1, d2) {
                        return Math.floor((d1 - d2) / 86400000);
                    }
                    if (!localStorage) {
                        return false;
                    }

                    var cookieName = 'RBXReturn';
                    var cookieOptions = {
                        expires: 9001
                    };
                    var cookieStr = localStorage.getItem(cookieName) || "";
                    var cookie = {};

                    try {
                        cookie = JSON.parse(cookieStr);
                    } catch (ex) {
                        // busted cookie string from old previous version of the code
                    }

                    try {
                        if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
                            localStorage.setItem(cookieName, JSON.stringify({
                                ts: new Date().toDateString()
                            }));
                            return false;
                        }
                    } catch (ex) {
                        return false;
                    }

                    var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
                    if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
                        RobloxEventManager.triggerEvent('rbx_evt_odr', {});
                        cookie.odr = 1;
                    }
                    if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr ===
                        "undefined") {
                        RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
                        cookie.sdr = 1;
                    }
                    try {
                        localStorage.setItem(cookieName, JSON.stringify(cookie));
                    } catch (ex) {
                        return false;
                    }
                }

                GoogleListener.init();



                RobloxEventManager.initialize(true);
                RobloxEventManager.triggerEvent('rbx_evt_pageview');
                trackReturns();



                RobloxEventManager._idleInterval = 450000;
                RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
                RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
                RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
                RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
                RobloxEventManager.startMonitor();


            });
        </script>



        <script type="text/javascript">
            Roblox.FixedUI = {};
            Roblox.FixedUI.gutterAdsEnabled = false;
        </script>



        <div id="Container">


        </div>



        <noscript>
            <div class="alert-info">
                <h5>Please enable Javascript to use all the features on this site.</h5>
            </div>
        </noscript>



        <p>ㅤ</p>
        <p>ㅤ</p>
        <p>ㅤ</p>
        <p>ㅤ</p>

        <div id="BodyWrapper" class="container-main">
            <div id="RepositionBody">

                <div id="Body" class="body-width">

                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-10">
                                <div class="row row-0-2-26">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-2 col-lg-1" style="width: 5em;">
                                                <p class="fw-bold">Search:</p>
                                            </div>
                                            <div class="col-8 col-lg-9" style="width: 37em;"><input id="nameInput" type="text" value=""
                                                    class="input-0-2-28" placeholder="Username Query"></div>
                                            <div class="col-2">
                                                <div><button
                                                        class="btn-0-2-35 buyButton-0-2-30 normal-0-2-31 searchButton-0-2-29"
                                                        title="" id="searchBtn">Search Users</button></div>
                                            </div>
                                        </div>
                                        <script>
                                            const btn = document.getElementById('searchBtn');
                                            btn.addEventListener('click', () => {
                                                const query = document.getElementById('nameInput').value;
                                                window.location.href = `https://www.rovive.pro/search/users?keyword=${query}`;
                                            });
                                            document.getElementById('nameInput').addEventListener('keyup', (e) => {
                                                if (e.key === 'Enter') {
                                                    btn.click();
                                                }
                                            });
                                        </script>
                                        <div class="row">
                                            <div class="col-12">
                                                <%- users %>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="ItemPurchaseAjaxData" data-authenticateduser-isnull="False"
                        data-user-balance-robux="<%= robux %>" data-user-balance-tickets="<%= tix %>" data-user-bc="0"
                        data-continueshopping-url="https://www.rovive.pro/catalog"
                        data-imageurl="https://t4.rovive.pro/a2b36c819194076227029b74002750a5"
                        data-alerturl="/img/cbb24e0c0f1fb97381a065bd1e056fcb.png"
                        data-builderscluburl="/img/ae345c0d59b00329758518edc104d573.png"
                        data-has-currency-service-error="False" data-currency-service-error-message=""></div>

                    <div id="ProcessingView" style="display:none">
                        <div class="ProcessingModalBody">
                            <p style="margin:0px"><img
                                    src="/img/ec4e85b0c4396cf753a06fade0a8d8af.gif"
                                    alt="Processing..."></p>
                            <p style="margin:7px 0px">Processing Transaction</p>
                        </div>
                    </div>

                    <script type="text/javascript">
                        //<sl:translate>
                        Roblox.ItemPurchase = {};
                        Roblox.ItemPurchase.strings = {
                            insufficientFundsTitle: "Insufficient Funds",
                            insufficientFundsText: "You need {0} more to purchase this item.",
                            cancelText: "Cancel",
                            okText: "OK",
                            buyText: "Buy",
                            buyTextLower: "buy",
                            tradeCurrencyText: "Trade Currency",
                            priceChangeTitle: "Item Price Has Changed",
                            priceChangeText: "While you were shopping, the price of this item changed from {0} to {1}.",
                            buyNowText: "Buy Now",
                            buyAccessText: "Buy Access",
                            buildersClubOnlyTitle: "{0} Only",
                            buildersClubOnlyText: "You need {0} to buy this item!",
                            buyItemTitle: "Buy Item",
                            buyItemText: "Would you like to {0} {5}the {1} {2} from {3} for {4}?",
                            balanceText: "Your balance after this transaction will be {0}",
                            freeText: "Free",
                            purchaseCompleteTitle: "Purchase Complete!",
                            purchaseCompleteText: "You have successfully {0} {5}the {1} {2} from {3} for {4}.",
                            continueShoppingText: "Continue Shopping",
                            customizeCharacterText: "Customize Character",
                            orText: "or",
                            rentText: "rent",
                            accessText: "access to "
                        }
                        //</sl:translate>
                    </script>






                    <div id="ctl00_cphRoblox_CreateSetPanelDiv" class="createSetPanelPopup">



                    </div>



                    <div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
                        <div class="Title"></div>
                        <div class="GenericModalBody">
                            <div>
                                <div class="ImageContainer roblox-item-image" data-image-size="small"
                                    data-no-overlays="" data-no-click="">
                                    <img class="GenericModalImage" alt="generic image">
                                </div>
                                <div class="Message"></div>
                                <div style="clear:both"></div>
                            </div>
                            <div class="GenericModalButtonContainer">
                                <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
                            </div>
                        </div>
                    </div>



                    <div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
                        <div style="margin:4px 0px;">
                            <span>Builders Club Only</span>
                        </div>
                        <div class="simplemodal-close">
                            <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
                        </div>
                        <div class="unifiedModalContent"
                            style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
                            <div class="ImageContainer">
                                <img class="GenericModalImage BCModalImage" alt="Builder's Club"
                                    src="/img/ae345c0d59b00329758518edc104d573.png">
                                <div id="BCMessageDiv" class="BCMessage Message">
                                    You need to buy this item!
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div style="clear:both;"></div>
                            <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
                                <div style="text-align:center">
                                    <a id="BClink" href="https://www.rovive.pro/premium/membership?ctx=bc-only-item"
                                        class="btn-primary btn-large">Upgrade Now</a>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                            <div style="clear:both;"></div>
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
                        $(document).ready(function () {
                            $('#NULL').click(function () {
                                showBCOnlyModal("BCOnlyModal");
                                return false;
                            });
                        });
                    </script>


                    <div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
                        <div class="Title"></div>
                        <div class="GenericModalBody">
                            <div>
                                <div class="ImageContainer roblox-item-image" data-image-size="small"
                                    data-no-overlays="" data-no-click="">
                                    <img class="GenericModalImage" alt="generic image">
                                </div>
                                <div class="Message"></div>
                                <div style="clear:both"></div>
                            </div>
                            <div class="GenericModalButtonContainer">
                                <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
                            </div>
                        </div>
                    </div>


                    <div id="InstallingPluginView" class="processing-view" style="display:none">
                        <div class="ProcessingModalBody">
                            <p style="margin:0px"><img
                                    src="/img/ec4e85b0c4396cf753a06fade0a8d8af.gif"
                                    alt="Installing Plugin..."></p>
                            <p class="processing-text" style="margin:7px 0px">Installing Plugin...</p>
                        </div>
                    </div>
                    <div id="UpdatingPluginView" class="processing-view" style="display:none">
                        <div class="ProcessingModalBody">
                            <p style="margin:0px"><img
                                    src="/img/ec4e85b0c4396cf753a06fade0a8d8af.gif"
                                    alt="Updating Plugin..."></p>
                            <p class="processing-text" style="margin:7px 0px">Updating Plugin...</p>
                        </div>
                    </div>

                    <script type="text/javascript">
                        Roblox.Item = Roblox.Item || {};

                        Roblox.Item.Resources = {
                            //<sl:translate>
                            DisableBadgeTitle: 'Disable Badge',
                            DisableBadgeMessage: 'Are you sure you want to disable this Badge?',
                            assetGrantedModalTitle: "This item is now yours",
                            assetGrantedModalMessage: "You just got this item courtesy of our sponsor."
                            //</sl:translate>
                        };
                    </script>
                    <script type="text/javascript">
                        Roblox.Plugins = Roblox.Plugins || {};

                        Roblox.Plugins.Resources = {
                            //<sl:translate>
                            errorTitle: "Error Installing Plugin",
                            errorBody: "There was a problem installing this plugin. Please try again later.",
                            successTitle: "Plugin Installed",
                            successBody: " has been successfully installed! Please open a new window to begin using this plugin.",
                            ok: "OK",
                            reinstall: "Reinstall",
                            updateErrorTitle: "Error Updating Plugin",
                            updateErrorBody: "There was a problem updating this plugin. Please try again later.",
                            updateSuccessTitle: "Plugin Update",
                            updateSuccessBody: " has been successfully updated! Please open a new window for the changes to take effect.",
                            updateText: "Update",
                            //</sl:translate>
                            alertImageUrl: '/img/Icons/img-alert.png'
                        };
                    </script>

                    <script type="text/javascript">
                        Roblox.Item = Roblox.Item || {};

                        Roblox.Item.ShowAssetGrantedModal = false;
                        Roblox.Item.ForwardToUrl = "";


                        $(function () {
                            var commentsLoaded = false;

                            //Tabs
                            function SwitchTabs(nextTabElem) {
                                $('.WhiteSquareTabsContainer .selected,  .TabContent.selected').removeClass(
                                    'selected');
                                nextTabElem.addClass('selected');
                                $('#' + nextTabElem.attr('contentid')).addClass('selected');

                                var label = $.trim(nextTabElem.attr('contentid'));
                                if (label == "CommentaryTab" && !commentsLoaded) {
                                    Roblox.commentsPane.getComments(0);
                                    commentsLoaded = true;
                                    if (Roblox.SuperSafePrivacyMode != undefined) {
                                        Roblox.SuperSafePrivacyMode.initModals();
                                    }
                                    return false;
                                }
                            }

                            SwitchTabs($('#CommentaryTabHeader'));

                            $('.WhiteSquareTabsContainer li').bind('click', function (event) {
                                event.preventDefault();
                                SwitchTabs($(this));
                            });


                            /*
                            function confirmDelete() {
                                Roblox.GenericConfirmation.open({
                                    //<sl:translate>
                                    titleText: "Delete Item",
                                    bodyContent: "Are you sure you want to permanently DELETE this item from your inventory?",
                                    //</sl:translate>
                                    onAccept: function () {
                                        javascript: __doPostBack('ctl00$cphRoblox$btnDelete', '');
                                    },
                                    acceptColor: Roblox.GenericConfirmation.blue,
                                    //<sl:translate>
                                    acceptText: "OK"
                                    //</sl:translate>
                                });
                            }
                            */

                            function confirmSubmit() {
                                Roblox.GenericConfirmation.open({
                                    //<sl:translate>
                                    titleText: "Create New Badge Giver",
                                    bodyContent: "This will add a new badge giver model to your inventory. Are you sure you want to do this?",
                                    //</sl:translate>
                                    onAccept: function () {
                                        window.location.href = $('#ctl00_cphRoblox_btnSubmit').attr(
                                            'href');
                                    },
                                    acceptColor: Roblox.GenericConfirmation.blue,
                                    //<sl:translate>
                                    acceptText: "OK"
                                    //</sl:translate>
                                });
                            }

                            /*
                            $('#ctl00_cphRoblox_btnDelete').click(function () {
                                confirmDelete();
                                return false;
                            });
                            */

                            $('div.Ownership input').click(function () {
                                confirmSubmit();
                                return false;
                            });

                            modalProperties = {
                                escClose: true,
                                opacity: 80,
                                overlayCss: {
                                    backgroundColor: "#000"
                                }
                            };

                            // Code for Modal Popups and Plugin initialization


                            $(".btn-disabled-primary").removeClass("Button").tipsy({
                                gravity: 's'
                            }).attr("href", "javascript: return false;");
                        });

                        function ModalClose(popup) {
                            $.modal.close('.' + popup);
                        }
                    </script>

                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <footer class="container-footer">
        <div class="footer">
            <ul class="row footer-links">
                <li class="col-4 col-xs-1 footer-link">
                    <a href="https://corp.rovive.pro" class="text-footer-nav roblox-interstitial" target="_blank">
                        About Us
                    </a>
                </li>
                <li class="col-4 col-xs-1 footer-link">
                    <a href="https://www.rovive.pro/jobs" class="text-footer-nav roblox-interstitial" target="_blank">
                        Jobs
                    </a>
                </li>
                <li class="col-4 col-xs-1 footer-link">
                    <a href="https://blog.rovive.pro" class="text-footer-nav" target="_blank">
                        Blog
                    </a>
                </li>
                <li class="col-4 col-xs-1 footer-link">
                    <a href="https://corp.rovive.pro/parents" class="text-footer-nav roblox-interstitial"
                        target="_blank">
                        Parents
                    </a>
                </li>
                <li class="col-4 col-xs-1 footer-link">
                    <a href="https://help.rovive.pro/" class="text-footer-nav roblox-interstitial" target="_blank">
                        Help
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
            <!-- NOTE: "ROBLOX Corporation" is a healthcheck; be careful when updating! -->
            <p class="text-footer footer-note">
                ©2016 ROBLOX Corporation
            </p>
        </div>
    </footer>

    </div>



    <script type="text/javascript">
        function urchinTracker() {}
    </script>

    <div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True"
        data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True"
        data-is-game-launch-interface-enabled="True" data-is-protocol-handler-launch-enabled="True"
        data-is-user-logged-in="True" data-os-name="Windows" data-protocol-name-for-client="r2016-player"
        data-protocol-name-for-studio="r2016-studio" data-protocol-url-includes-launchtime="true"
        data-protocol-detection-enabled="true">
        <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
            <div id="Spinner" class="Spinner" style="padding:20px 0;">
                <img data-delaysrc="/img/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32"
                    width="32" alt="Progress" />
            </div>
            <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
                <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                    Starting Roblox...
                </div>
                <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
                <div id="StatusBackBuffer"
                    class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
            </div>
            <div style="text-align:center;margin-top:1em">
                <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel" />
            </div>
        </div>
    </div>
    <div id="ProtocolHandlerStartingDialog" style="display:none;">
        <div class="modalPopup ph-modal-popup">
            <div class="ph-modal-header">

            </div>
            <div class="ph-logo-row">
                <img data-delaysrc="/img/RoviveLetter.png" width="90"
                    height="90" alt="R" />
            </div>
            <div class="ph-areyouinstalleddialog-content">
                <p class="larger-font-size">
                    ROBLOX is now loading. Get ready to play!
                </p>
                <div class="ph-startingdialog-spinner-row">
                    <img data-delaysrc="/img/4bed93c91f909002b1f17f05c0ce13d1.gif" width="82"
                        height="24" />
                </div>
            </div>
        </div>
    </div>
    <div id="ProtocolHandlerAreYouInstalled" style="display:none;">
        <div class="modalPopup ph-modal-popup">
            <div class="ph-modal-header">
                <span class="icon-close simplemodal-close"></span>
            </div>
            <div class="ph-logo-row">
                <img data-delaysrc="/img/RoviveLetter.png" width="90"
                    height="90" alt="R" />
            </div>
            <div class="ph-areyouinstalleddialog-content">
                <p class="larger-font-size">
                    You're moments away from getting into the game!
                </p>
                <div>
                    <button type="button" class="btn btn-primary-md" id="ProtocolHandlerInstallButton">
                        Download and Install ROBLOX
                    </button>
                </div>
                <div class="small">
                    <a href="https://help.rovive.pro/hc/en-us/articles/204473560" class="text-name"
                        target="_blank">Click
                        here for help</a>
                </div>
            </div>
        </div>
    </div>
    <div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
        <p class="larger-font-size">
            <span class="icon-moreinfo"></span>

            Check <b>Remember my choice</b> and click
            <img data-delaysrc="/img/7c8d7a39b4335931221857cca2b5430b.png"
                alt="Launch Application" />

            in the dialog box above to join games faster in the future!
        </p>
    </div>


    <div id="videoPrerollPanel" style="display:none">
        <div id="videoPrerollTitleDiv">
            Gameplay sponsored by:
        </div>
        <div id="content">
            <video id="contentElement" style="width:0; height:0;" />
        </div>
        <div id="videoPrerollMainDiv"></div>
        <div id="videoPrerollCompanionAd">
        </div>
        <div id="videoPrerollLoadingDiv">
            Loading <span id="videoPrerollLoadingPercent">0%</span> - <span id="videoPrerollMadStatus"
                class="MadStatusField">Starting game...</span><span id="videoPrerollMadStatusBackBuffer"
                class="MadStatusBackBuffer"></span>
            <div id="videoPrerollLoadingBar">
                <div id="videoPrerollLoadingBarCompleted">
                </div>
            </div>
        </div>
        <div id="videoPrerollJoinBC">
            <span>Get more with Builders Club!</span>
            <a href="https://www.rovive.pro/premium/membership?ctx=preroll" target="_blank"
                class="btn-medium btn-primary" id="videoPrerollJoinBCButton">Join Builders Club</a>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            var videoPreRollDFP = Roblox.VideoPreRollDFP;
            if (videoPreRollDFP) {
                var customTargeting = Roblox.VideoPreRollDFP.customTargeting;
                videoPreRollDFP.showVideoPreRoll = false;
                videoPreRollDFP.loadingBarMaxTime = 33000;
                videoPreRollDFP.videoLoadingTimeout = 11000;
                videoPreRollDFP.videoPlayingTimeout = 41000;
                videoPreRollDFP.videoLogNote = "Guest";
                videoPreRollDFP.logsEnabled = true;
                videoPreRollDFP.excludedPlaceIds = "32373412";
                videoPreRollDFP.adUnit = "/1015347/VideoPrerollUnder13";
                videoPreRollDFP.adTime = 15;
                videoPreRollDFP.isSwfPreloaderEnabled = false;
                videoPreRollDFP.isPrerollShownEveryXMinutesEnabled = true;
                videoPreRollDFP.isAgeTargetingEnabled = true;
                videoPreRollDFP.isAgeOrSegmentTargetingEnabled = true;
                videoPreRollDFP.isCompanionAdRenderedByGoogleTag = true;
                customTargeting.userAge = "Unknown";
                customTargeting.userAgeOrSegment = "Unknown";
                customTargeting.userGender = "Unknown";
                customTargeting.gameGenres = "";
                customTargeting.environment = "Production";
                customTargeting.adTime = "15";
                customTargeting.PLVU = false;
                $(videoPreRollDFP.checkEligibility);
            }
        });
    </script>


    <div id="GuestModePrompt_BoyGirl" class="Revised GuestModePromptModal" style="display:none;">
        <div class="simplemodal-close">
            <a class="ImageButton closeBtnCircle_20h"
                style="cursor: pointer; margin-left:455px;top:7px; position:absolute;"></a>
        </div>
        <div class="Title">
            Choose Your Avatar
        </div>
        <div style="min-height: 275px; background-color: white;">
            <div style="clear:both; height:25px;"></div>

            <div style="text-align: center;">
                <div class="VisitButtonsGuestCharacter VisitButtonBoyGuest" style="float:left; margin-left:45px;"></div>
                <div class="VisitButtonsGuestCharacter VisitButtonGirlGuest" style="float:right; margin-right:45px;">
                </div>
            </div>
            <div style="clear:both; height:25px;"></div>
            <div class="RevisedFooter">
                <div style="width:200px;margin:10px auto 0 auto;">
                    <a href="https://www.rovive.pro">
                        <div class="RevisedCharacterSelectSignup"></div>
                    </a>
                    <a class="HaveAccount" href="https://www.rovive.pro/newlogin">I have an account</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function checkRobloxInstall() {
            window.location = 'https://www.rovive.pro/install/unsupported.aspx?osx=10.5';
            return false;
        }
    </script>

    <div id="InstallationInstructions" class="" style="display:none;">
        <div class="ph-installinstructions">
            <div class="ph-modal-header">
                <span class="icon-close simplemodal-close"></span>
                <h3 class="title">Thanks for playing ROBLOX</h3>
            </div>
            <div class="modal-content-container">
                <div class="ph-installinstructions-body ">


                    <div class="ph-install-step ph-installinstructions-step1-of4">
                        <h1>1</h1>
                        <p class="larger-font-size">Click <strong>RobloxPlayer.exe</strong> to run the ROBLOX installer,
                            which just downloaded via your web browser.</p>
                        <img width="230" height="180"
                            data-delaysrc="/img/8b0052e4ff81d8e14f19faff2a22fcf7.png" />
                    </div>
                    <div class="ph-install-step ph-installinstructions-step2-of4">
                        <h1>2</h1>
                        <p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin
                            the installation process.</p>
                        <img width="230" height="180"
                            data-delaysrc="/img/4a3f96d30df0f7879abde4ed837446c6.png" />
                    </div>
                    <div class="ph-install-step ph-installinstructions-step3-of4">
                        <h1>3</h1>
                        <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed ROBLOX.
                        </p>
                        <img width="230" height="180"
                            data-delaysrc="/img/6e23e4971ee146e719fb1abcb1d67d59.png" />
                    </div>
                    <div class="ph-install-step ph-installinstructions-step4-of4">
                        <h1>4</h1>
                        <p class="larger-font-size">After installation, click <strong>Play</strong> below to join the
                            action!</p>
                        <div class="VisitButton VisitButtonContinueGLI">
                            <a class="btn btn-primary-lg disabled">Play</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="xsmall">
                The ROBLOX installer should download shortly. If it doesn’t, start the <a href="#" class="text-link"
                    onclick="Roblox.ProtocolHandlerClientInterface.startDownload(); return false;">download now.</a>
            </div>
        </div>
    </div>
    <div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>


    <div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
    <iframe id="downloadInstallerIFrame" name="downloadInstallerIFrame"
        style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

    <script type="text/javascript" src="/js/6e5259c73f172ca9c489364016528e30.js"></script>

    <script type="text/javascript">
        Roblox.Client = {};
        Roblox.Client._skip = '/install/unsupported.aspx';
        Roblox.Client._CLSID = '';
        Roblox.Client._installHost = '';
        Roblox.Client.ImplementsProxy = false;
        Roblox.Client._silentModeEnabled = false;
        Roblox.Client._bringAppToFrontEnabled = false;
        Roblox.Client._currentPluginVersion = '';
        Roblox.Client._eventStreamLoggingEnabled = false;


        Roblox.Client._installSuccess = function () {
            if (GoogleAnalyticsEvents) {
                GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
                GoogleAnalyticsEvents.FireEvent(['Plugin', 'Install Success']);
                if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
                    Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
                }
            }
        }


        if ((window.chrome || window.safari) && window.location.hash == '#chromeInstall') {
            window.location.hash = '';
            var continuation = '(' + $.cookie('chromeInstall') + ')';
            play_placeId = $.cookie('chromeInstallPlaceId');
            Roblox.GamePlayEvents.lastContext = $.cookie('chromeInstallLaunchMode');
            $.cookie('chromeInstallPlaceId', null);
            $.cookie('chromeInstallLaunchMode', null);
            $.cookie('chromeInstall', null);
            RobloxLaunch._GoogleAnalyticsCallback = function () {
                var isInsideRobloxIDE = 'website';
                if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) {
                    isInsideRobloxIDE = 'Studio';
                };
                GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);
                GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);
                EventTracker.fireEvent('GameLaunchAttempt_Unknown', 'GameLaunchAttempt_Unknown_Plugin');
                if (typeof Roblox.GamePlayEvents != 'undefined') {
                    Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId);
                }
            };
            Roblox.Client.ResumeTimer(eval(continuation));
        }
    </script>


    <div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation"
        style="display:none;">
        <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
        <div class="Title"></div>
        <div class="GenericModalBody">
            <div class="TopBody">
                <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                    <img class="GenericModalImage" alt="generic image" />
                </div>
                <div class="Message"></div>
            </div>
            <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
                <a href id="roblox-confirm-btn"><span></span></a>
                <a href id="roblox-decline-btn"><span></span></a>
            </div>
            <div class="ConfirmationModalFooter">

            </div>
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
    </div>

    <div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation">
        <div id="modal-dialog" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"><span class="icon-close"></span></span><span
                            class="sr-only">Close</span>
                    </button>
                    <h5 class="modal-title"></h5>
                </div>

                <div class="modal-body">
                    <div class="modal-top-body">
                        <div class="modal-message"></div>
                        <div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays
                            data-no-click>
                            <img class="modal-thumb" alt="generic image" />
                        </div>
                    </div>
                    <div class="modal-btns">
                        <a href id="confirm-btn"><span></span></a>
                        <a href id="decline-btn"><span></span></a>
                    </div>
                    <div class="loading modal-processing">
                        <img class="loading-default"
                            src='/img/4bed93c91f909002b1f17f05c0ce13d1.gif' alt="Processing..." />
                    </div>
                </div>
                <div class="modal-footer text-footer">

                </div>
            </div>
        </div>
        <script type="text/javascript">
            Roblox = Roblox || {};
            Roblox.Resources = Roblox.Resources || {};

            //<sl:translate>
            Roblox.Resources.Dialog = {
                yes: "Yes",
                No: "No",
                Confirm: "Confirm",
                Cancel: "Cancel"
            };
            //</sl:translate>
        </script>
    </div>




    <script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.jsConsoleEnabled = false;
    </script>




    <script type='text/javascript' src='/js/f0a2acc861db87466c6ecf755ce236d0.js'></script>






    <script type='text/javascript'>
        Roblox.config.externalResources = ["https://web.archive.org/web/20180418141524/https://static.rbxcdn.com/css/page___89566ce412cfbbd7a54e05ab6de19c05_m.css/fetch"];
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
        $(function () {
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


    <script type='text/javascript' src='/js/5b0c9ab81871a27f956e825070a86908.js'></script>
</body>

</html>