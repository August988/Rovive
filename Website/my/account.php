<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}

$title = $_SESSION["user"]["username"] . " - Rovive";
?>

<?php echo PageBuilder::buildHeader(); ?>

<link rel='stylesheet' href='/css/leanbase___9b9fc145916d65f94e610d1f02775894_m.css' />

<link rel='stylesheet' href='/css/page___9b1354f6392e505305c1aa8a1f7931d6_m.css' />

<div class="content ">
    <script type="text/javascript">
        var Roblox = Roblox || {};
    </script>

    <div class="profile-container" ng-modules="robloxApp, profile, robloxApp.helpers">
        <h1>My Settings</h1>
        <h1></h1>
        <h1></h1>

        <div class="section profile-header">
            <p ng-show="profileHeaderLayout.hasError" ng-cloak class="small text-error header-details-error">{{profileHeaderLayout.errorMsg}}</p>
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
                        <li ng-show="profileHeaderLayout.canTrade" ng-cloak><a ng-click="tradeItems()" id="profile-trade-items">Trade Items</a></li>
                        <li ng-show="profileHeaderLayout.isBlockButtonVisible" ng-cloak>
                            <a ng-bind="!profileHeaderLayout.isVieweeBlocked ? 'Block User' : 'Unblock User'" ng-click="blockUser()" id="profile-block-user" ng-cloak></a>
                        </li>
                        <li ng-show="profileHeaderLayout.mayUpdateStatus" class="">
                            <a ng-click="revealStatusForm()" id="profile-header-update-status">Update
                                Status</a>
                        </li>
                        <li>
                            <a href="https://www.rbx2016.nl/users/<%= userid %>/inventory/">Inventory</a>
                        </li>
                        <li>
                            <a href="https://www.rbx2016.nl/users/<%= userid %>/favorites#!/places">Favorites</a>
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

                                ;
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
                    <template type="text/ng-template" id="profile-block-user-modal.html">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <button type="button" class="close" ng-click="close()">
                                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                                </button>
                                <h5>
                                    Warning
                                </h5>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to unblock this user?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="purchaseConfirm" class="btn-control-md" ng-click="submit()">
                                    Unblock
                                </button>
                                <button type="button" class="btn-fixed-width btn-secondary-md" ng-click="close()">
                                    Cancel
                                </button>
                            </div>
                        </div><!-- /.modal-content -->
                    </template>
                </div>
                <div>
                    <script type="text/javascript">
                        Roblox.uiBootstrap = Roblox.uiBootstrap || {};
                        Roblox.uiBootstrap.modalBackdropTemplateLink =
                            "/viewapp/common/template/modal/backdrop.html";
                        Roblox.uiBootstrap.modalWindowTemplateLink =
                            "/viewapp/common/template/modal/window.html";
                    </script>
                    <template type="text/ng-template" id="profile-unblock-user-modal.html">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <button type="button" class="close" ng-click="close()">
                                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                                </button>
                                <h5>
                                    Warning
                                </h5>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to block this user?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="purchaseConfirm" class="btn-control-md" ng-click="submit()">
                                    Block
                                </button>
                                <button type="button" class="btn-fixed-width btn-secondary-md" ng-click="close()">
                                    Cancel
                                </button>
                            </div>
                            <p class="small modal-footer-note">When you&#39;ve blocked a user, neither of you can directly contact the other.</p>
                        </div><!-- /.modal-content -->
                    </template>
                </div>
            </div>
        </div>
        <div class="row">
            <!--profile-header-content-->
            <div class="rbx-tabs-vertical">
                <ul id="vertical-tabs" class="nav nav-tabs" role="tablist">
                    <li class="rbx-tab active" style="display: block; width: 15.15em; float: left">
                        <a class="rbx-tab-heading" href="#info" id="tab-info">
                            <span class="text-lead">Account Info</span>
                            <span class="rbx-tab-subtitle"></span>
                        </a>
                    </li>
                    <li class="rbx-tab" style="display: block; width: 15.15em; float: left">
                        <a class="rbx-tab-heading" href="#social" id="tab-social">
                            <span class="text-lead">Social</span>
                            <span class="rbx-tab-subtitle"></span>
                        </a>
                    </li>
                    <li class="rbx-tab" style="display: block; width: 15.15em; float: left">
                        <a class="rbx-tab-heading" href="#privacy" id="tab-privacy">
                            <span class="text-lead">Privacy</span>
                            <span class="rbx-tab-subtitle"></span>
                        </a>
                    </li>
                    <li class="rbx-tab" style="display: block; width: 15.15em; float: left">
                        <a class="rbx-tab-heading" href="#billing" id="tab-billing">
                            <span class="text-lead">Billing</span>
                            <span class="rbx-tab-subtitle"></span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content rbx-tab-content">
                <div class="tab-pane active" id="info">
                    <div class="section profile-info" ng-controller="profileUtilitiesController">
                        <div class="container-header">
                            <h3>Account Info</h3>
                        </div>
                        <div class="section-content">
                            <p><span style="opacity: 35%; font-weight:400">Username:</span>
                                <%= username %><button class="pull-right" style="height: 1em; opacity: 75%; font-weight:400; border: none; outline: none; background-color: Transparent" id="EditUsername">Edit</button></p>
                            <p><span style="opacity: 35%; font-weight:400">Password:</span> *********<button class="pull-right" style="height: 1em; opacity: 75%; font-weight:400; border: none; outline: none; background-color: Transparent" id="EditPassword">Edit</button></p>
                            <p><span style="opacity: 35%; font-weight:400">Email Address:</span>
                                fake-email@exmaple.com<button class="pull-right" style="height: 1em; opacity: 75%; font-weight:400; border: none; outline: none; background-color: Transparent" id="EditEmail">Edit</button></p>
                        </div>
                    </div>
                    <div class="section profile-about" ng-controller="profileUtilitiesController">
                        <div class="container-header">
                            <h3>Personal</h3>
                        </div>
                        <div class="section-content">
                            <h3>W.I.P</h3>
                        </div>
                    </div>
                    <div class="section profile-about" ng-controller="profileUtilitiesController">
                        <div class="container-header">
                            <h3>Extensions</h3>
                        </div>
                        <div class="section-content">
                            <div class="row mt-1">
                                <input class="form-control input-field" style="display: inline-block; width: 49.5%; opacity: 80%;" readonly="" type="text" value="Website Theme">
                                <select id="themeSelector" class="form-control input-field" style="display: inline-block; width: 50%;">
                                    <option value="light">Default</option>
                                    <option value="dark">Dark Theme</option>
                                </select>
                                <script>
                                    const themeSelector = document.getElementById("themeSelector");
                                    themeSelector.value = "Light";
                                    themeSelector.onchange = function() {
                                        const xhr = new XMLHttpRequest();
                                        xhr.open("POST", "/v1/api/theme/set");
                                        xhr.setRequestHeader("Content-Type",
                                            "application/x-www-form-urlencoded");
                                        xhr.setRequestHeader("Cookie", document.cookie);
                                        xhr.onload = function() {
                                            if (xhr.status === 200) {
                                                window.location.reload();
                                            } else {
                                                Roblox.GenericConfirmation
                                                    .open({
                                                        titleText: "Something went wrong.",
                                                        bodyContent: "Failed to change theme.",
                                                        acceptText: "OK",
                                                        acceptColor: Roblox
                                                            .GenericConfirmation
                                                            .blue,
                                                        declineColor: Roblox
                                                            .GenericConfirmation
                                                            .none,
                                                        allowHtmlContentInBody: true,
                                                        dismissable: true,
                                                        onAccept: function(e) {
                                                            window.location.reload();
                                                        }
                                                    });
                                            }
                                        }
                                        xhr.send("theme=" + themeSelector.value);
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane " id="social">

                </div>
                <div class="tab-pane " id="privacy">

                </div>
                <div class="tab-pane " id="billing">

                </div>
            </div>
        </div>

        <script>
            const sleep = (milliseconds) => {
                return new Promise(resolve => setTimeout(resolve, milliseconds))
            }

            document.getElementById("EditUsername").onclick = function() {
                let username = "";
                let cpass = "";

                const interval = setInterval(() => {
                    try {
                        username = document.getElementById("NewUsername").value;
                        cpass = document.getElementById("CurrentPassword").value;
                    } catch {}
                }, 1)

                Roblox.GenericConfirmation.open({
                    //<sl:translate>
                    titleText: "Change Username",
                    bodyContent: "<input type=\"text\" placeholder=\"Desired Username (3-20 characters)\" id=\"NewUsername\" maxlength=\"20\" style=\"height: 2em\" class=\"form-control\"><p>ㅤ</p><input type=\"password\" placeholder=\"Current Password\" id=\"CurrentPassword\" style=\"height: 2em\" class=\"form-control\">",
                    //</sl:translate>
                    onAccept: async function(e) {
                        clearInterval(interval);
                        let errored = false;
                        $.ajax({
                            type: "POST",
                            url: "/v1/username/change",
                            data: {
                                username: username,
                                cpass: cpass
                            },
                            error: function() {
                                errored = true;
                                Roblox.GenericConfirmation
                                    .open({
                                        titleText: "An error occured.",
                                        bodyContent: "Failed to change username.",
                                        acceptText: "OK",
                                        acceptColor: Roblox
                                            .GenericConfirmation
                                            .blue,
                                        declineColor: Roblox
                                            .GenericConfirmation
                                            .none,
                                        allowHtmlContentInBody: true,
                                        dismissable: true,
                                        onAccept: function(e) {
                                            window.location
                                                .reload();
                                        }
                                    });
                            }
                        });
                        await sleep(1000);
                        if (!errored) {
                            window.location.reload();
                        }
                    },
                    acceptColor: Roblox.GenericConfirmation.green,
                    declineText: "Cancel",
                    declineColor: Roblox.GenericConfirmation.none,
                    allowHtmlContentInBody: true,
                    //<sl:translate>
                    acceptText: "Buy for R$<%= price %>"
                    //</sl:translate>
                });
            };

            document.getElementById("EditPassword").onclick = function() {
                let cpass = "";
                let npass = "";
                let npass2 = "";

                const interval = setInterval(() => {
                    try {
                        cpass = document.getElementById("CurrentPassword").value;
                        npass = document.getElementById("NewPassword").value;
                        npass2 = document.getElementById("NewPassword2").value;
                    } catch {}
                }, 1)

                Roblox.GenericConfirmation.open({
                    //<sl:translate>
                    titleText: "Change Password",
                    bodyContent: "<input type=\"password\" placeholder=\"Current Password\" id=\"CurrentPassword\" style=\"height: 2em\" class=\"form-control\"><p>ㅤ</p><input type=\"password\" placeholder=\"New Password\" id=\"NewPassword\" style=\"height: 2em\" class=\"form-control\"><p>ㅤ</p><input type=\"password\" placeholder=\"Repeat New Password\" id=\"NewPassword2\" style=\"height: 2em\" class=\"form-control\">",
                    //</sl:translate>
                    onAccept: async function(e) {
                        clearInterval(interval);

                        if (npass != npass2) {
                            Roblox.GenericConfirmation
                                .open({
                                    titleText: "Invalid submission.",
                                    bodyContent: "Passwords do not match.",
                                    acceptText: "OK",
                                    acceptColor: Roblox
                                        .GenericConfirmation
                                        .blue,
                                    declineColor: Roblox
                                        .GenericConfirmation
                                        .none,
                                    allowHtmlContentInBody: true,
                                    dismissable: true,
                                    onAccept: function(e) {
                                        window.location.reload();
                                    }
                                });
                            return;
                        }

                        let errored = false;
                        $.ajax({
                            type: "POST",
                            url: "/v1/password/change",
                            data: {
                                cpass: cpass,
                                npass: npass
                            },
                            error: function() {
                                errored = true;
                                Roblox.GenericConfirmation
                                    .open({
                                        titleText: "An error occured.",
                                        bodyContent: "Failed to change password.",
                                        acceptText: "OK",
                                        acceptColor: Roblox
                                            .GenericConfirmation
                                            .blue,
                                        declineColor: Roblox
                                            .GenericConfirmation
                                            .none,
                                        allowHtmlContentInBody: true,
                                        dismissable: true,
                                        onAccept: function(e) {
                                            window.location
                                                .reload();
                                        }
                                    });
                            }
                        });
                        await sleep(1000);
                        if (!errored) {
                            window.location.reload();
                        }
                    },
                    acceptColor: Roblox.GenericConfirmation.green,
                    declineText: "Cancel",
                    declineColor: Roblox.GenericConfirmation.none,
                    allowHtmlContentInBody: true,
                    //<sl:translate>
                    acceptText: "Update"
                    //</sl:translate>
                });
            };
        </script>

    </div><!-- profile-header -->
</div>

<?php echo PageBuilder::buildFooter(); ?>