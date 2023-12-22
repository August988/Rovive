<?php
$title = "Avatar";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}
?>

<?php echo PageBuilder::buildHeader(); ?>

<link rel='stylesheet' href='/css/page___7b95eca911917eae0bbb3bdc9aec6011_m.css' />

<link rel='stylesheet' href='/css/cba6a03d6b3adf64.css' />

<script type='text/javascript' src='/js/772ab381c3064441d07dc1235c79872c.js'></script>

<style id="server-side-styles">
    .imgDesktop-0-2-7 {
        width: 118px;
        height: 30px;
        display: none;
        background-size: auto 30px;
        background-image: url(/img/roblox_logo.svg);
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
        background-image: url(/img/logo_R.svg);
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
        background-image: url(/img/roblox_logo.svg);
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
        background-image: url(/img/logo_R.svg);
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

<div id="RepositionBody">

    <div id="Body" class="body-width">

        <div id="ItemContainer" class="text ">
            <div style="width: 60%; height: 85%; margin-left: auto; margin-right: auto;">
                <div class="characterContainer-0-2-54">
                    <div class="row mt-2">
                        <div class="col-12 ps-4 pe-4">
                            <h1 class="header-0-2-53">Character Customizer</h1>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="header-0-2-56">Avatar</h2>
                                </div>
                                <div class="col-12"><img class="image-0-2-64" src="https://thumbnails.rovive.pro/v1/avatar/thumb?id=<?= $_SESSION["user"]["id"] ?>">
                                    <div class="renderButtonWrapper-0-2-57">
                                        <button class="btn-0-2-99 renderButton-0-2-58 continueButton-0-2-62" title="" style="display: none;">Save Changes</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="mb-0">Something wrong with your Avatar?</p>
                                    <p class="mb-0"><a href="/api/v1/avatar/redraw">Click here to re-draw it!</a></p>
                                </div>
                            </div>
                            <div class="row-0-2-76 row">
                                <div class="col-12">
                                    <h2 class="header-0-2-71">Avatar Colors</h2>
                                </div>
                                <div class="colorSelectorWrapper-0-2-73" style="overflow-x: hidden; display: none;">
                                    <div class="row">
                                        <div class="col-12">
                                            <a class="mb-1 close-0-2-101">Close</a>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(86, 66, 54);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(105, 64, 40);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(124, 92, 70);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(149, 121, 119);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(175, 148, 131);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(199, 172, 120);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(215, 197, 154);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(218, 134, 122);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(163, 75, 75);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(170, 85, 0);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(160, 95, 53);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(204, 142, 105);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(234, 184, 146);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(255, 204, 153);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(213, 115, 61);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(218, 133, 65);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(226, 155, 64);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(255, 175, 0);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(245, 205, 48);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(248, 217, 109);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(253, 234, 141);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(39, 70, 45);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(58, 125, 21);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(40, 127, 71);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(75, 151, 75);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(91, 154, 76);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(124, 156, 107);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(164, 189, 71);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(0, 32, 96);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(33, 84, 185);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(0, 0, 255);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(13, 105, 172);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(82, 124, 174);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(110, 153, 202);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(180, 210, 228);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(0, 143, 156);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(18, 238, 212);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(159, 243, 233);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(0, 255, 255);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(4, 175, 236);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(128, 187, 220);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(175, 221, 255);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(107, 50, 124);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(140, 91, 159);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(167, 94, 155);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(170, 0, 170);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(98, 37, 209);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(180, 128, 255);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(177, 167, 255);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(196, 40, 28);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(255, 0, 0);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(255, 0, 191);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(255, 102, 204);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(255, 152, 220);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(232, 186, 200);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(255, 201, 201);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(90, 76, 66);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(188, 155, 93);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(193, 190, 66);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(161, 196, 140);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(127, 142, 100);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(120, 144, 130);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(116, 134, 157);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(0, 255, 0);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(204, 255, 204);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(255, 255, 0);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(255, 255, 204);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(17, 17, 17);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(27, 42, 53);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(99, 95, 98);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(163, 162, 165);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(205, 205, 205);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(229, 228, 223);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(242, 243, 243);"></div>
                                        </div>
                                        <div class="col-3 col-lg-2 ps-0 pe-0" style="right: 3.5%;">
                                            <div class="colorPaletteEntry-0-2-74" style="background: rgb(248, 248, 248);"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="head-0-2-65" style="background-color: rgb(205, 205, 205);"></div>
                                    <div class="torso-0-2-66" style="background-color: rgb(205, 205, 205);">
                                        <div class="leftArm-0-2-67" style="background-color: rgb(205, 205, 205);"></div>
                                        <div class="rightArm-0-2-68" style="background-color: rgb(205, 205, 205);"></div>
                                    </div>
                                    <div class="legs-0-2-72">
                                        <div class="leftLeg-0-2-69" style="background-color: rgb(205, 205, 205);"></div>
                                        <div class="rightLeg-0-2-70" style="background-color: rgb(205, 205, 205);"></div>
                                    </div>
                                </div>
                                <script>
                                    const colorPalette = document.querySelector('.colorSelectorWrapper-0-2-73');
                                    const head = document.querySelector('.head-0-2-65');
                                    const torso = document.querySelector('.torso-0-2-66');
                                    const leftArm = document.querySelector('.leftArm-0-2-67');
                                    const rightArm = document.querySelector('.rightArm-0-2-68');
                                    const leftLeg = document.querySelector('.leftLeg-0-2-69');
                                    const rightLeg = document.querySelector('.rightLeg-0-2-70');
                                    const closeBtn = document.querySelector('.close-0-2-101');
                                    const saveBtn = document.querySelector('.renderButton-0-2-58');
                                    let selectedPart = null;

                                    const startColors = [ 1, 1, 1, 1, 1, 1];

                                    const robloxBrickColors = {
                                        1: [242, 243, 243],
                                        2: [161, 165, 162],
                                        3: [249, 233, 153],
                                        5: [215, 197, 154],
                                        6: [194, 218, 184],
                                        9: [232, 186, 200],
                                        11: [128, 187, 219],
                                        12: [203, 132, 66],
                                        18: [204, 142, 105],
                                        21: [196, 40, 28],
                                        22: [196, 112, 160],
                                        23: [13, 105, 172],
                                        24: [245, 205, 48],
                                        25: [98, 71, 50],
                                        26: [27, 42, 53],
                                        27: [109, 110, 108],
                                        28: [40, 127, 71],
                                        29: [161, 196, 140],
                                        36: [243, 207, 155],
                                        37: [75, 151, 75],
                                        38: [160, 95, 53],
                                        39: [193, 202, 222],
                                        40: [236, 236, 236],
                                        41: [205, 84, 75],
                                        42: [193, 223, 240],
                                        43: [123, 182, 232],
                                        44: [247, 241, 141],
                                        45: [180, 210, 228],
                                        47: [217, 133, 108],
                                        48: [132, 182, 141],
                                        49: [248, 241, 132],
                                        50: [236, 232, 222],
                                        100: [238, 196, 182],
                                        101: [218, 134, 122],
                                        102: [110, 153, 202],
                                        103: [199, 193, 183],
                                        104: [107, 50, 124],
                                        105: [226, 155, 64],
                                        106: [218, 133, 65],
                                        107: [0, 143, 156],
                                        108: [104, 92, 67],
                                        110: [67, 84, 147],
                                        111: [191, 183, 177],
                                        112: [104, 116, 172],
                                        113: [229, 173, 200],
                                        115: [199, 210, 60],
                                        116: [85, 165, 175],
                                        118: [183, 215, 213],
                                        119: [164, 189, 71],
                                        120: [217, 228, 167],
                                        121: [231, 172, 88],
                                        123: [211, 111, 76],
                                        124: [146, 57, 120],
                                        125: [234, 184, 146],
                                        126: [165, 165, 203],
                                        127: [220, 188, 129],
                                        128: [174, 122, 89],
                                        131: [156, 163, 168],
                                        133: [213, 115, 61],
                                        134: [216, 221, 86],
                                        135: [116, 134, 157],
                                        136: [135, 124, 144],
                                        137: [224, 152, 100],
                                        138: [149, 138, 115],
                                        140: [32, 58, 86],
                                        141: [39, 70, 45],
                                        143: [207, 226, 247],
                                        145: [121, 136, 161],
                                        146: [149, 142, 163],
                                        147: [147, 135, 103],
                                        148: [87, 88, 87],
                                        149: [22, 29, 50],
                                        150: [171, 173, 172],
                                        151: [120, 144, 130],
                                        153: [149, 121, 119],
                                        154: [123, 46, 47],
                                        157: [255, 246, 123],
                                        158: [225, 164, 194],
                                        168: [117, 108, 98],
                                        176: [151, 105, 91],
                                        178: [180, 132, 85],
                                        179: [137, 135, 136],
                                        180: [215, 169, 75],
                                        190: [249, 214, 46],
                                        191: [232, 171, 45],
                                        192: [105, 64, 40],
                                        193: [207, 96, 36],
                                        194: [163, 162, 165],
                                        195: [70, 103, 164],
                                        196: [35, 71, 139],
                                        198: [142, 66, 133],
                                        199: [99, 95, 98],
                                        200: [130, 138, 93],
                                        208: [229, 228, 223],
                                        209: [176, 142, 68],
                                        210: [112, 149, 120],
                                        211: [121, 181, 181],
                                        212: [159, 195, 233],
                                        213: [108, 129, 183],
                                        216: [144, 76, 42],
                                        217: [124, 92, 70],
                                        218: [150, 112, 159],
                                        219: [107, 98, 155],
                                        220: [167, 169, 206],
                                        221: [205, 98, 152],
                                        222: [228, 173, 200],
                                        223: [220, 144, 149],
                                        224: [240, 213, 160],
                                        225: [235, 184, 127],
                                        226: [253, 234, 141],
                                        232: [125, 187, 221],
                                        268: [52, 43, 117],
                                        301: [80, 109, 84],
                                        302: [91, 93, 105],
                                        303: [0, 16, 176],
                                        304: [44, 101, 29],
                                        305: [82, 124, 174],
                                        306: [51, 88, 130],
                                        307: [16, 42, 220],
                                        308: [61, 21, 133],
                                        309: [52, 142, 64],
                                        310: [91, 154, 76],
                                        311: [159, 161, 172],
                                        312: [89, 34, 89],
                                        313: [31, 128, 29],
                                        314: [159, 173, 192],
                                        315: [9, 137, 207],
                                        316: [123, 0, 123],
                                        317: [124, 156, 107],
                                        318: [138, 171, 133],
                                        319: [185, 196, 177],
                                        320: [202, 203, 209],
                                        321: [167, 94, 155],
                                        322: [123, 47, 123],
                                        323: [148, 190, 129],
                                        324: [168, 189, 153],
                                        325: [223, 223, 222],
                                        327: [151, 0, 0],
                                        328: [177, 229, 166],
                                        329: [152, 194, 219],
                                        330: [255, 152, 220],
                                        331: [255, 89, 89],
                                        332: [117, 0, 0],
                                        333: [239, 184, 56],
                                        334: [248, 217, 109],
                                        335: [231, 231, 236],
                                        336: [199, 212, 228],
                                        337: [255, 148, 148],
                                        338: [190, 104, 98],
                                        339: [86, 36, 36],
                                        340: [241, 231, 199],
                                        341: [254, 243, 187],
                                        342: [224, 178, 208],
                                        343: [212, 144, 189],
                                        344: [150, 85, 85],
                                        345: [143, 76, 42],
                                        346: [211, 190, 150],
                                        347: [226, 220, 188],
                                        348: [237, 234, 234],
                                        349: [233, 218, 218],
                                        350: [136, 62, 62],
                                        351: [188, 155, 93],
                                        352: [199, 172, 120],
                                        353: [202, 191, 163],
                                        354: [187, 179, 178],
                                        355: [108, 88, 75],
                                        356: [160, 132, 79],
                                        357: [149, 137, 136],
                                        358: [171, 168, 158],
                                        359: [175, 148, 131],
                                        360: [150, 103, 102],
                                        361: [86, 66, 54],
                                        362: [126, 104, 63],
                                        363: [105, 102, 92],
                                        364: [90, 76, 66],
                                        365: [106, 57, 9],
                                        1001: [248, 248, 248],
                                        1002: [205, 205, 205],
                                        1003: [17, 17, 17],
                                        1004: [255, 0, 0],
                                        1005: [255, 176, 0],
                                        1006: [180, 128, 255],
                                        1007: [163, 75, 75],
                                        1008: [193, 190, 66],
                                        1009: [255, 255, 0],
                                        1010: [0, 0, 255],
                                        1011: [0, 32, 96],
                                        1012: [33, 84, 185],
                                        1013: [4, 175, 236],
                                        1014: [170, 85, 0],
                                        1015: [170, 0, 170],
                                        1016: [255, 102, 204],
                                        1017: [255, 175, 0],
                                        1018: [18, 238, 212],
                                        1019: [0, 255, 255],
                                        1020: [0, 255, 0],
                                        1021: [58, 125, 21],
                                        1022: [127, 142, 100],
                                        1023: [140, 91, 159],
                                        1024: [175, 221, 255],
                                        1025: [255, 201, 201],
                                        1026: [177, 167, 255],
                                        1027: [159, 243, 233],
                                        1028: [204, 255, 204],
                                        1029: [255, 255, 204],
                                        1030: [255, 204, 153],
                                        1031: [98, 37, 209],
                                        1032: [255, 0, 191]
                                    }

                                    let startColorsParsed = [];

                                    for (let i = 0; i < startColors.length; i++) {
                                        for ([key, value] of Object.entries(robloxBrickColors)) {
                                            if (key == startColors[i]) {
                                                startColorsParsed.push(value);
                                                break;
                                            }
                                        }
                                    }

                                    function rgb(r, g, b) {
                                        return "rgb(" + r + "," + g + "," + b + ")";
                                    }
                                    head.style.backgroundColor = rgb(startColorsParsed[0][0], startColorsParsed[0][1], startColorsParsed[0][2]);
                                    leftArm.style.backgroundColor = rgb(startColorsParsed[1][0], startColorsParsed[1][1], startColorsParsed[1][2]);
                                    leftLeg.style.backgroundColor = rgb(startColorsParsed[2][0], startColorsParsed[2][1], startColorsParsed[2][2]);
                                    rightArm.style.backgroundColor = rgb(startColorsParsed[3][0], startColorsParsed[3][1], startColorsParsed[3][2]);
                                    rightLeg.style.backgroundColor = rgb(startColorsParsed[4][0], startColorsParsed[4][1], startColorsParsed[4][2]);
                                    torso.style.backgroundColor = rgb(startColorsParsed[5][0], startColorsParsed[5][1], startColorsParsed[5][2]);

                                    head.addEventListener('click', () => {
                                        selectedPart = head;
                                        colorPalette.style.display = 'block';
                                    });
                                    torso.addEventListener('click', (e) => {
                                        selectedPart = e.target;
                                        colorPalette.style.display = 'block';
                                    });
                                    leftArm.addEventListener('click', () => {
                                        selectedPart = leftArm;
                                        colorPalette.style.display = 'block';
                                    });
                                    rightArm.addEventListener('click', () => {
                                        selectedPart = rightArm;
                                        colorPalette.style.display = 'block';
                                    });
                                    leftLeg.addEventListener('click', () => {
                                        selectedPart = leftLeg;
                                        colorPalette.style.display = 'block';
                                    });
                                    rightLeg.addEventListener('click', () => {
                                        selectedPart = rightLeg;
                                        colorPalette.style.display = 'block';
                                    });

                                    const startHeadColor = head.style.backgroundColor;
                                    const startTorsoColor = torso.style.backgroundColor;
                                    const startLeftArmColor = leftArm.style.backgroundColor;
                                    const startRightArmColor = rightArm.style.backgroundColor;
                                    const startLeftLegColor = leftLeg.style.backgroundColor;
                                    const startRightLegColor = rightLeg.style.backgroundColor;

                                    let lastHeadColor = head.style.backgroundColor;
                                    let lastTorsoColor = torso.style.backgroundColor;
                                    let lastLeftArmColor = leftArm.style.backgroundColor;
                                    let lastRightArmColor = rightArm.style.backgroundColor;
                                    let lastLeftLegColor = leftLeg.style.backgroundColor;
                                    let lastRightLegColor = rightLeg.style.backgroundColor;

                                    const colorPaletteEntries = document.querySelectorAll('.colorPaletteEntry-0-2-74');
                                    colorPaletteEntries.forEach((colorPaletteEntry, index) => {
                                        colorPaletteEntry.addEventListener('click', () => {
                                            selectedPart.style.backgroundColor = colorPaletteEntries[index].style.backgroundColor;
                                            switch (selectedPart) {
                                                case head:
                                                    lastHeadColor = colorPaletteEntries[index].style.backgroundColor;
                                                    break;
                                                case torso:
                                                    lastTorsoColor = colorPaletteEntries[index].style.backgroundColor;
                                                    break;
                                                case leftArm:
                                                    lastLeftArmColor = colorPaletteEntries[index].style.backgroundColor;
                                                    break;
                                                case rightArm:
                                                    lastRightArmColor = colorPaletteEntries[index].style.backgroundColor;
                                                    break;
                                                case leftLeg:
                                                    lastLeftLegColor = colorPaletteEntries[index].style.backgroundColor;
                                                    break;
                                                case rightLeg:
                                                    lastRightLegColor = colorPaletteEntries[index].style.backgroundColor;
                                                    break;
                                            }
                                            if (lastHeadColor != startHeadColor || lastTorsoColor != startTorsoColor || lastLeftArmColor != startLeftArmColor || lastRightArmColor != startRightArmColor || lastLeftLegColor != startLeftLegColor || lastRightLegColor != startRightLegColor) {
                                                saveBtn.style.display = 'block';
                                            } else {
                                                saveBtn.style.display = 'none';
                                            }
                                            colorPalette.style.display = 'none';
                                        });
                                    });

                                    closeBtn.addEventListener('click', () => {
                                        colorPalette.style.display = 'none';
                                    });

                                    saveBtn.addEventListener('click', () => {
                                        const headColor = head.style.backgroundColor;
                                        const torsoColor = torso.style.backgroundColor;
                                        const leftArmColor = leftArm.style.backgroundColor;
                                        const rightArmColor = rightArm.style.backgroundColor;
                                        const leftLegColor = leftLeg.style.backgroundColor;
                                        const rightLegColor = rightLeg.style.backgroundColor;
                                        const data = [
                                            lastHeadColor,
                                            lastLeftArmColor,
                                            lastLeftLegColor,
                                            lastRightArmColor,
                                            lastRightLegColor,
                                            lastTorsoColor
                                        ];
                                        // Send request with cookies attached
                                        fetch('/v1/avatar/update?type=colors', {
                                            method: 'POST',
                                            credentials: 'include',
                                            headers: {
                                                'Content-Type': 'application/json'
                                            },
                                            body: JSON.stringify(data)
                                        }).then((res) => {
                                            if (res.status === 200) {
                                                saveBtn.style.display = 'none';
                                                window.location.reload();
                                            } else {
                                                Roblox.GenericConfirmation
                                                    .open({
                                                        titleText: "An error occured.",
                                                        bodyContent: "Failed to update avatar.",
                                                        acceptText: "OK",
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
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="buttonCol-0-2-80 col-12">
                                            <div class="vTab-0-2-77">
                                                <p class=" vTabLabel-0-2-78">Wardrobe </p>
                                                <div class="btnBottomSeperator-0-2-81"></div>
                                            </div>
                                            <div class="vTab-0-2-77">
                                                <p class="vTabUnselected-0-2-82 vTabLabel-0-2-78">Outfits </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="categoryWrapper-0-2-85">
                                                        <p class="categoryEntry-0-2-84"><span class="" id="btnHeads"> Heads </span><span>| </span><span class="" id="btnFaces"> Faces </span><span>| </span><span class="" id="btnTShirts">
                                                                T-Shirts </span><span>| </span><span class="" id="btnShirts"> Shirts </span><span>| </span><span class="" id="btnPants"> Pants </span><span>| </span><span class="" id="btnGear"> Gear </span></p>
                                                        <p class="categoryEntry-0-2-84"><span class="categoryEntry-0-2-84" id="btnAccessories"> Accessories </span><span>| </span><span class="" id="btnHats"> Hats </span><span>| </span><span class="" id="btnHair"> Hair </span><span>| </span><span class="" id="btnFace"> Face </span><span>| </span><span class="" id="btnNeck"> Neck </span><span>| </span><span class="" id="btnShoulder"> Shoulder </span><span>| </span><span class="" id="btnFront"> Front
                                                            </span><span>| </span><span class="" id="btnBack"> Back </span><span>| </span><span class="" id="btnWaist"> Waist
                                                            </span></p>
                                                        <p class="categoryEntry-0-2-84"><span class="" id="btnTorsos"> Torsos
                                                            </span><span>| </span><span class="" id="btnLArms"> L Arms </span><span>| </span><span class="" id="btnRArms"> R Arms
                                                            </span><span>| </span><span class="" id="btnLLegs"> L Legs </span><span>| </span><span class="" id="btnRLegs"> R Legs
                                                            </span><span>| </span><span class="" id="btnPackages"> Packages </span></p>
                                                        <p class="categoryEntry-0-2-84"><a href="/catalog">Shop</a><span> ||
                                                                <a href="/develop">Create</a></span></p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <p>&nbsp;</p>
                                                    <div class="row" id="contents">
                                                        <!-- <div class="col-3 mt-4">
                                                                        <div class="image-0-2-92">
                                                                            <div class="wearButtonWrapper-0-2-94">
                                                                                <div><button
                                                                                        class="btn-0-2-99 wearButton-0-2-93 continueButton-0-2-62"
                                                                                        title="">Wear</button></div>
                                                                            </div>
                                                                            <div class="thumbWrapper-0-2-98"><img class="image-0-2-102 "
                                                                                    src="/a2d4c8df66ea72e5c99b67a02f6deecd">
                                                                            </div>
                                                                        </div>
                                                                        <p class="itemName-0-2-91"><a
                                                                                href="/catalog/9694557849/Just-send-a-trade">Bloxxer</a></p>
                                                                    </div> -->
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-12">
                                                            <p class="paginationText-0-2-87"><span class="pageDisabled-0-2-89">Previous </span><span class="pageDisabled-0-2-89"> 1 </span><span class="pageEnabled-0-2-88"> Next</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="divider-top divider-thick divider-light mt-4 mb-4"></div>
                                </div>
                                <div class="col-12">
                                    <h2 class="subtitle-0-2-90">Currently Wearing</h2>
                                    <p>&nbsp;</p>
                                    <div class="row" id="currentlyWearing">
                                        <!-- <div class="col-3 mt-4">
                                                        <div class="image-0-2-92">
                                                            <div class="wearButtonWrapper-0-2-94">
                                                                <div><button class="btn-0-2-99 wearButton-0-2-93 cancelButton-0-2-61"
                                                                        title="">Remove</button></div>
                                                            </div>
                                                            <div class="thumbWrapper-0-2-98"><img class="image-0-2-102 "
                                                                    src="/b88fdab9ec0149cfc14c38b1ed4d40d0/420/420/Hat/Png">
                                                            </div>
                                                        </div>
                                                        <p class="itemName-0-2-91"><a href="/catalog/63690008/Pal-Hair">Pal Hair</a></p>
                                                        <div class="assetTypeWrapper-0-2-97"><span class="assetTypeLabel-0-2-95">Type:
                                                            </span> <span class="assetType-0-2-96">HairAccessory</span></div>
                                                    </div>
                                                    <div class="col-3 mt-4">
                                                        <div class="image-0-2-92">
                                                            <div class="wearButtonWrapper-0-2-94">
                                                                <div><button class="btn-0-2-99 wearButton-0-2-93 cancelButton-0-2-61"
                                                                        title="">Remove</button></div>
                                                            </div>
                                                            <div class="thumbWrapper-0-2-98"><img class="image-0-2-102 "
                                                                    src="/5f4982fec0e60a105c9e39b021d5ff26/420/420/Shirt/Png">
                                                            </div>
                                                        </div>
                                                        <p class="itemName-0-2-91"><a href="/catalog/144076358/Blue-and-Black-Motorcycle-Shirt">Blue and Black Motorcycle Shirt</a></p>
                                                        <div class="assetTypeWrapper-0-2-97"><span class="assetTypeLabel-0-2-95">Type:
                                                            </span> <span class="assetType-0-2-96">Shirt</span></div>
                                                    </div>
                                                    <div class="col-3 mt-4">
                                                        <div class="image-0-2-92">
                                                            <div class="wearButtonWrapper-0-2-94">
                                                                <div><button class="btn-0-2-99 wearButton-0-2-93 cancelButton-0-2-61"
                                                                        title="">Remove</button></div>
                                                            </div>
                                                            <div class="thumbWrapper-0-2-98"><img class="image-0-2-102 "
                                                                    src="/bece40a904c19782848bce55e13a8da8/420/420/Pants/Png">
                                                            </div>
                                                        </div>
                                                        <p class="itemName-0-2-91"><a href="/catalog/144076760/Dark-Green-Jeans">Dark Green Jeans</a></p>
                                                        <div class="assetTypeWrapper-0-2-97"><span class="assetTypeLabel-0-2-95">Type:
                                                            </span> <span class="assetType-0-2-96">Pants</span></div>
                                                    </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            const buttons = [
                                document.getElementById('btnHeads'),
                                document.getElementById('btnFaces'),
                                document.getElementById('btnTShirts'),
                                document.getElementById('btnShirts'),
                                document.getElementById('btnPants'),
                                document.getElementById('btnGear'),
                                document.getElementById('btnAccessories'),
                                document.getElementById('btnHats'),
                                document.getElementById('btnHair'),
                                document.getElementById('btnFace'),
                                document.getElementById('btnNeck'),
                                document.getElementById('btnShoulder'),
                                document.getElementById('btnFront'),
                                document.getElementById('btnBack'),
                                document.getElementById('btnWaist'),
                                document.getElementById('btnTorsos'),
                                document.getElementById('btnLArms'),
                                document.getElementById('btnRArms'),
                                document.getElementById('btnLLegs'),
                                document.getElementById('btnRLegs'),
                                document.getElementById('btnPackages')
                            ];

                            const contents = document.getElementById('contents');
                            const currentlyWearing = document.getElementById('currentlyWearing');

                            function insertAndExecute(elem, text) {
                                elem.innerHTML = text;
                                var scripts = Array.prototype.slice.call(elem.getElementsByTagName("script"));
                                for (var i = 0; i < scripts.length; i++) {
                                    if (scripts[i].src != "") {
                                        var tag = document.createElement("script");
                                        tag.src = scripts[i].src;
                                        document.getElementsByTagName("head")[0].appendChild(tag);
                                    } else {
                                        eval(scripts[i].innerHTML);
                                    }
                                }
                            }

                            function fetchCurrentlyWearing() {
                                const resp = fetch(`/My/Character/Wearing`, {
                                    method: 'GET',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    }
                                }).then(res => res.text()).then(data => {
                                    insertAndExecute(currentlyWearing, data);
                                });
                            }

                            setTimeout(() => {
                                fetchCurrentlyWearing();
                            }, 50);

                            function unselectAll() {
                                for (let i = 0; i < buttons.length; i++) {
                                    buttons[i].classList.remove('selected-0-2-86');
                                }
                            }

                            function select(button) {
                                const type = button.id.replace('btn', '');
                                unselectAll();
                                button.classList.add('selected-0-2-86');

                                const resp = fetch(`/My/Character/Items/${type}`, {
                                    method: 'GET',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    }
                                }).then(res => res.text()).then(data => {
                                    insertAndExecute(contents, data);
                                });
                            }

                            for (let i = 0; i < buttons.length; i++) {
                                buttons[i].addEventListener('click', () => {
                                    const button = buttons[i];
                                    select(button);
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>

            <div class="clear">
            </div>
        </div>





        <div id="ItemPurchaseAjaxData" data-authenticateduser-isnull="False" data-user-balance-robux="<%= robux %>" data-user-balance-tickets="<%= tix %>" data-user-bc="0" data-continueshopping-url="https://www.rovive.pro/catalog" data-imageurl="https://t4.rovive.pro/a2b36c819194076227029b74002750a5" data-alerturl="/img/cbb24e0c0f1fb97381a065bd1e056fcb.png" data-builderscluburl="/img/ae345c0d59b00329758518edc104d573.png" data-has-currency-service-error="False" data-currency-service-error-message=""></div>

        <div id="ProcessingView" style="display:none">
            <div class="ProcessingModalBody">
                <p style="margin:0px"><img src="/img/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Processing..."></p>
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
                    <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
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
            <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
                <div class="ImageContainer">
                    <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="/img/ae345c0d59b00329758518edc104d573.png">
                    <div id="BCMessageDiv" class="BCMessage Message">
                        You need to buy this item!
                    </div>
                </div>
                <div style="clear:both;"></div>
                <div style="clear:both;"></div>
                <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
                    <div style="text-align:center">
                        <a id="BClink" href="https://www.rovive.pro/premium/membership?ctx=bc-only-item" class="btn-primary btn-large">Upgrade Now</a>
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
            $(document).ready(function() {
                $('#NULL').click(function() {
                    showBCOnlyModal("BCOnlyModal");
                    return false;
                });
            });
        </script>


        <div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
            <div class="Title"></div>
            <div class="GenericModalBody">
                <div>
                    <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
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
                <p style="margin:0px"><img src="/img/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Installing Plugin..."></p>
                <p class="processing-text" style="margin:7px 0px">Installing Plugin...</p>
            </div>
        </div>
        <div id="UpdatingPluginView" class="processing-view" style="display:none">
            <div class="ProcessingModalBody">
                <p style="margin:0px"><img src="/img/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Updating Plugin..."></p>
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


            $(function() {
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

                $('.WhiteSquareTabsContainer li').bind('click', function(event) {
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
                        onAccept: function() {
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

                $('div.Ownership input').click(function() {
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

<?php echo PageBuilder::buildFooter(); ?>