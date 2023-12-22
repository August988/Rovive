<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
    <!-- MachineID: WEB160 -->
    <title>rovive.pro</title>
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


    <link rel="canonical" href="https://www.rovive.pro/My/Places.aspx&showlogin=True" />

    <link href="/img/favicon.ico" rel="icon" />


    
        <!-- <link rel='stylesheet' class="dark-theme" href='/css/dark.css' /> -->
    
</head>

<body id="rbx-body" class="" data-performance-relative-value="0.000" data-internal-page-name=""
    data-send-event-percentage="0.00">

    <script>
        // Use matchMedia to check the user preference
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
        const userSystemTheme = prefersDark.matches ? "dark" : "light";

        let theme = "<%= theme %>";
        if (theme == ""){
            theme = userSystemTheme;
        }

        if (theme === "dark") {
            toggleDarkTheme(true);
        }

        // Listen for changes to the prefers-color-scheme media query
        prefersDark.addListener((mediaQuery) => toggleDarkTheme(mediaQuery.matches));

        // Add or remove the "dark" class based on if the media query matches
        function toggleDarkTheme(shouldAdd) {
            if (shouldAdd){
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
            }else{
                const darkTheme = document.getElementsByClassName("dark-theme");
                for (let i = 0; i < darkTheme.length; i++) {
                    const element = darkTheme[i];
                    element.remove();
                }
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

    <div class="nav-container no-gutter-ads">
        <div id="header" class="navbar-fixed-top rbx-header" data-isfriendshiprealtimeupdateenabled="true"
            role="navigation">
        </div>
        <h1>Login to ROBLOX</h1>
        <hr>
        <form action="/newlogin" method="POST" id="loginForm">
            <%- error %>

            <div id="loginarea" class="divider-bottom" data-is-captcha-on="False">
                <div id="leftArea">
                    <div id="loginPanel">
                        <table id="logintable">
                            <tr id="username">
                                <td><label class="form-label" for="Username">Username:</label></td>
                                <td><input class="text-box text-box-medium" data-val="true"
                                        data-val-required="You must enter a username." id="username" name="username"
                                        type="text" value="" /></td>
                            </tr>
                            <tr id="password">
                                <td><label class="form-label" for="Password">Password:</label></td>
                                <td><input class="text-box text-box-medium" data-val="true"
                                        data-val-required="You must enter a password." id="password" name="password"
                                        type="password" />
                                </td>
                            </tr>
                            <input hidden readonly class="hidden" id="returl" name="ReturnUrl" value="http://www.rovive.pro/My/Places.aspx" />
                        </table>
                        <div id="captchaPanel">
                        </div>
                        <div>
                            <input type="submit" name="submit" value="Sign In" />
                            <div class="clearFloats">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <style>
                    .hidden { display: none; }
                </style>
                <div id="rightArea" class="divider-left">
                    <div id="signUpPanel" class="FrontPageLoginBox">
                        <p class="text">Not a member?</p>
                        <h2>Sign Up to Build & Make Friends</h2>
                        <p>(Signup might be broken in studio and you may need to signup thru a web browser.)</p>
                        <a href="/">Signup</a>
                    </div>
                </div>
            </div>
            <input id="ReturnUrl" name="ReturnUrl" type="hidden" value="https://www.rovive.pro/home" />
        </form>
    </div>
</body>

</html>