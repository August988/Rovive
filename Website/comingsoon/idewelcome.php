<!DOCTYPE html>
<html class="no-touch">

<head>
    <title>Welcome
    </title>
    <script type="text/javascript" src="http://static.rovive.pro/ide/Welcome_files/jquery-1.js">
    </script>
    <script type='text/javascript' src="http://static.rovive.pro/ide/Welcome_files/jquery-1.8.3.min.js">
    </script>
    <script type="text/javascript" src="http://static.rovive.pro/ide/Welcome_files/MicrosoftAjax.js">
    </script>
    <link rel="stylesheet" href="http://static.rovive.pro/ide/Welcome_files/FetchCSS.css">
    <p id="ERR"></p>
    <script type="text/javascript" src="http://static.rovive.pro/ide/Welcome_files/644b0e8baae8d8db3809d69b1924ea60.js">
    </script>
    <style>
        .topright {
            position: absolute;
            top: 0.5em;
            right: 1em;
            font-size: 18px;
        }
        #parent { white-space: nowrap; }
        .child { display: inline-block; }
        .pfp {
            position: absolute;
            top: -0.25em;
            right: 8.5em;
            font-size: 18px;
            width: 2em;
            height: 2em;
        }
        .inner-game-image {
            width: 13.133333333333333em;
            height: 7.666666666666667em;
        }
    </style> <!-- inner-game-image resolution = 197x115 (px) -->
    <script type="text/javascript">
        function editTemplateInStudio(play_placeId) {
            try{
                RobloxLaunch._GoogleAnalyticsCallback = function () {
                    var isInsideRobloxIDE = 'website';
                    if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) {
                        isInsideRobloxIDE = 'Studio';
                    };
                };
                Roblox.Client.WaitForRoblox(function () {
                    RobloxLaunch.StartGame('http://www.rovive.pro/Game/edit.ashx?PlaceID=' + play_placeId +
                        '&upload=', 'edit.ashx',
                        'https://www.rovive.pro/Login/Negotiate.ashx',
                        'FETCH', true);
                });
            }catch(e){
                document.getElementById("ERR").innerText = e.message;
            }
        }
    </script>

    
        <!-- <link rel='stylesheet' class="dark-theme" href='/css/dark.css' /> -->
    
</head>

<body id="StudioWelcomeBody">
    <div class="header">
        <!-- This is only after the login stuff because IE7 demands floated elements be before non-floated -->
        <img src="http://static.rovive.pro/ide/Welcome_files/roblox_logo.png" alt="Studio Title">
    </div>
    <div class="container">
        <div class="navbar" style="height: 494px;">
            <div class="topright" id="parent">
                <img class="child pfp" src="http://thumbnails.rovive.pro/v1/avatar/icon?id=<?= $_SESSION["user"]["id"] ?>"/>
                <small class="child" ><?= htmlspecialchars($_SESSION["user"]["username"]) ?></small>
                <p class="child"></p>
                <p class="child"></p>
                <p class="child"></p>
                <center class="child">
                    <button id="Logout" class="child">Logout</button>
                </center>
            </div>
            <ul class="navlist" style="border-bottom: medium none;">
                <li id="NewProject" class="navselected">
                    <p>New File
                    </p>
                </li>
                
                <li id="MyProjects" class="lastnav">
                    <p>My Files
                    </p>
                </li>
                <!---
                <li class="lastnav">
                    <p>Recent News
                    </p>
                </li>--->
            </ul>
        </div>
        <div class="main">
            <div id="TemplatesView" class="welcome-content-area" style="display: block;">
                <h2 id="StudioGameTemplates">FILE TEMPLATES
                </h2>
                <div class="templatetypes">
                    <ul class="templatetypes">
                        <li js-data-templatetype="Basic" class="selectedType">
                            <a href="#Basic">Basic
                            </a>
                        </li>
                        <!---
                    <li js-data-templatetype="Strategy" class="">
                        <a href="#1">1
                        </a>
                    </li>
                    <li js-data-templatetype="Action" class="">
                        <a href="#2">2
                        </a>
                    </li>--->
                    </ul>
                </div>
                <div class="templates" js-data-templatetype="Basic" style="display: block;">
                    <%- templates %>
                </div>
                <!---
            <div class="templates" js-data-templatetype="1" style="display: none;">
            </div>
            <div class="templates" js-data-templatetype="2" style="display: none;">
            </div>--->
            </div>
            <div id="MyProjectsView" class="welcome-content-area" style="display: none;">
                <h2>My Published Files
                </h2>
                <div id="AssetList">
                    <div>
                        <%- MyGames %>
                    </div>
                    <!--<script type="text/javascript">
    $('#MyProjects').click(function() {
    $('#header-login').addClass('active');
    $('#iFrameLogin').css('display', 'block');
    });
    </script>-->
                </div>
            </div>
            <div id="ButtonRow" class="divider-top divider-left divider-bottom">
                <a class="btn-medium btn-primary" id="EditButton">Edit
                    <span class="btn-text">Edit
                    </span>
                </a>
                <a class="btn-medium btn-primary" id="BuildButton">Build
                    <span class="btn-text">Build
                    </span>
                </a>
                <a class="btn-medium btn-negative" id="CollapseButton">Cancel
                    <span class="btn-text">Cancel
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
        <div class="Title">
        </div>
        <div class="GenericModalBody">
            <div>
                <div class="ImageContainer">
                    <img class="GenericModalImage" alt="generic image">
                </div>
                <div class="Message">
                </div>
            </div>
            <div class="clear">
            </div>
            <div id="GenericModalButtonContainer" class="GenericModalButtonContainer">
                <a class="ImageButton btn-neutral btn-large roblox-ok">OK
                    <span class="btn-text">OK
                    </span>
                </a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function deleteAllCookies() {
            var cookies = document.cookie.split(";");

            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i];
                var eqPos = cookie.indexOf("=");
                var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
        }

        // when the button "Logout" is clicked:
        $('#Logout').click(function() {
            deleteAllCookies();
            window.location.href = "https://www.rovive.pro/ide/welcome";
        });

        /*
        document.getElementById("Logout").onclick = function () {
            deleteAllCookies();
            window.location.replace("https://www.rovive.pro/ide/welcome");            
        };
        */

        $(function () {
            Roblox.Client.Resources = {
                //<sl:translate>
                here: "here",
                youNeedTheLatest: "You need Our Plugin for this.  Get the latest version from ",
                plugInInstallationFailed: "Plugin installation failed!",
                errorUpdating: "Error updating: "
                //</sl:translate>
            };
            if (typeof Roblox.IDEWelcome === "undefined")
                Roblox.IDEWelcome = {};
            Roblox.IDEWelcome.Resources = {
                //<sl:translate>
                openProject: "Open Project",
                openProjectText: "To open your project, open to this page in ",
                robloxStudio: "Studio",
                editPlace: "Edit Place",
                toEdit: "To edit ",
                openPage: ", open to this page in ",
                buildPlace: "Build Place",
                toBuild: "To build on ",
                placeInactive: "Place Inactive",
                activate: ", activate this place by going to File->My Published Projects.",
                emailVerifiedTitle: "Verify Your Email",
                emailVerifiedMessage: "You must verify your email before you can work on your place. You can verify your email on the <a href='/My/Account.aspx?confirmemail=1'>Account</a> page.",
                verify: "Verify",
                cancel: "Cancel"
                //</sl:translate>
            };
        });
    </script>
    <div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation"
        style="display:none;">
        <a class="genericmodal-close ImageButton closeBtnCircle_20h">
        </a>
        <div class="Title">
        </div>
        <div class="GenericModalBody">
            <div class="TopBody">
                <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays=""
                    data-no-click="">
                    <img class="GenericModalImage" alt="generic image">
                </div>
                <div class="Message">
                </div>
            </div>
            <div class="ConfirmationModalButtonContainer">
                <a href="" roblox-confirm-btn="">
                    <span>
                    </span>
                </a>
                <a href="" roblox-decline-btn="">
                    <span>
                    </span>
                </a>
            </div>
            <div class="ConfirmationModalFooter">
            </div>
        </div>
        <script type="text/javascript">
            //<sl:translate>
            Roblox.GenericConfirmation.Resources = {
                yes: "Yes",
                No: "No"
            }
            //</sl:translate>
        </script>
    </div>
    </div>
</body>

</html>