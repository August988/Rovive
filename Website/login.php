<?php
$title = "Login to Rovive";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

?>

<?php echo PageBuilder::buildHeader(); ?>

<link rel='stylesheet' href='/css/MainCSS___58dd044044005dc0e887c80110c9a567_m.css' />

<link rel='stylesheet' href='/css/page___9e13d2ffcca365960153559b156618eb_m.css' />



<div id="RepositionBody">
    <div id="Body" class="body-width">
        <h1>Login to Rovive</h1>

        <div>


            <div id="TwoStepVerificationApiPaths" data-request-code-unauthenticated="https://api.rovive.pro/twostepverification/request-unauthenticated" data-request-code="https://api.rovive.pro/twostepverification/request" data-verify-code-unauthenticated="https://api.rovive.pro/twostepverification/verify-unauthenticated" data-verify-code="https://api.rovive.pro/twostepverification/verify">
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
            <form id="loginForm">
                <div id="GeneralErrorText" style="display:none;" class="input-validation-large alert-warning font-bold"></div>

                <div id="loginarea" class="divider-bottom" data-is-captcha-on="False">
                    <div id="leftArea">
                        <div id="loginPanel">
                            <table id="logintable">
                                <tr id="username">
                                    <td><label class="form-label" for="Username">Username:</label></td>
                                    <td><input class="text-box text-box-medium" data-val="true" data-val-required="You must enter a username." id="Username" name="username" type="text" value="" /></td>
                                </tr>
                                <tr id="password">
                                    <td><label class="form-label" for="Password">Password:</label></td>
                                    <td><input class="text-box text-box-medium" data-val="true" data-val-required="You must enter a password." id="Password" name="password" type="password" />
                                    </td>
                                </tr>
                            </table>
                            <div>
                                <div id="forgotPasswordPanel">
                                    <a class="text-link" href="https://www.rovive.pro/Login/ResetPasswordRequest" target="_blank">Forgot your password?</a>
                                </div>
                                <div id="signInButtonPanel" data-use-apiproxy-signin="False" data-sign-on-api-path="https://api.rovive.pro/login/v1">
                                    <a class="btn-medium btn-neutral" id="signinButton">Sign
                                        In</a>
                                </div>
                                <div class="clearFloats">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="rightArea" class="divider-left">
                        <div id="signUpPanel" class="FrontPageLoginBox">
                            <p class="text">Not a member?</p>
                            <h2>Sign Up to Build & Make Friends</h2>
                            <a roblox-js-onsignup class="btn-medium btn-primary">Sign Up</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <script>
            // login code
            var loginForm = document.getElementById("loginForm");

            $("#signinButton").on("click", function(e) {
                var username = document.getElementById("Username").value;
                var password = document.getElementById("Password").value;

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
                            window.location = "/";
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


        <div id="SocialIdentitiesInformation" data-rbx-login-redirect-url="/social/postlogin">
        </div>
        <div style="clear:both"></div>
    </div>
</div>

<?php echo PageBuilder::buildFooter(); ?>