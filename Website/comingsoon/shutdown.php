<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <meta name="apple-mobile-web-app-title" content="" />
    <link rel="icon" href="/shut/icon.png" />
    <title>Self-Destruct</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background-color: #151515;
        }

        .base {
            background: #cacaca;
            width: 20vmin;
            border-radius: 27vmin;
            box-shadow: 0 6vmin 0.15vmin 0vmin #777, 0 4vmin 0.15vmin 0vmin #777,
                0 2vmin 0.15vmin 0vmin #777;
            padding: 0vmin 2vmin 2vmin 2vmin;
            z-index: 1;
            transform: rotateX(60deg) rotateZ(0deg);
            margin-top: -4.5vmin;
            height: 22vmin;
        }

        .box {
            transform: rotateX(-35deg) rotateY(45deg) rotateZ(0deg) rotate3d(1, 0, 0, 90deg);
            transform-origin: center top;
            transform-style: preserve-3d;
            width: 45vmin;
            position: absolute;
            z-index: 5;
            margin-top: 27vmin;
            transition: transform 1s ease 0s;
            cursor: pointer;
            height: 45vmin;
            margin-left: -32vmin;
        }

        .box.opened {
            transform: rotateX(-35deg) rotateY(45deg) rotateZ(0deg) rotate3d(1, 0, 0, 180deg);
        }

        .box div {
            position: absolute;
            width: 45vmin;
            height: 45vmin;
            background: #00bcd47d;
            opacity: 0.5;
            border: 3px solid #00a4b9;
            border-radius: 3px;
            box-sizing: border-box;
            box-shadow: 0 0 3px 0 #00bcd48a;
        }

        .box>div:nth-child(1) {
            opacity: 0;
        }

        .box>div:nth-child(2) {
            transform: rotateX(90deg) translate3d(0px, 5vmin, 5vmin);
            height: 10vmin;
        }

        .box>div:nth-child(3) {
            transform: rotateX(0deg) translate3d(0, 0, 10vmin);
        }

        .box>div:nth-child(4) {
            transform: rotateX(270deg) translate3d(0px, -5vmin, 40vmin);
            height: 10vmin;
        }

        .box>div:nth-child(5) {
            transform: rotateY(90deg) translate3d(-5vmin, 0, 40vmin);
            width: 10vmin;
        }

        .box>div:nth-child(6) {
            transform: rotateY(-90deg) translate3d(5vmin, 0vmin, 5vmin);
            width: 10vmin;
        }

        .grid {
            background: repeating-linear-gradient(150deg,
                    rgba(255, 255, 255, 0) 0,
                    rgba(255, 255, 255, 0) 49px,
                    rgb(255 255 255 / 10%) 50px,
                    rgb(0 0 0 / 30%) 51px,
                    rgba(255, 255, 255, 0) 55px),
                repeating-linear-gradient(30deg,
                    rgba(255, 255, 255, 0) 0,
                    rgba(255, 255, 255, 0) 49px,
                    rgb(255 255 255 / 10%) 50px,
                    rgb(0 0 0 / 30%) 51px,
                    rgba(255, 255, 255, 0) 55px);
            position: fixed;
            width: 200vw;
            height: 150vh;
        }

        .warning {
            position: absolute;
            z-index: 0;
            width: 45vmin;
            height: 45vmin;
            background: repeating-linear-gradient(-45deg,
                    black,
                    black 3vmin,
                    yellow 3vmin,
                    yellow 6vmin);
            transform: rotateX(-35deg) rotateY(45deg) rotateZ(0deg) rotate3d(1, 0, 0, 90deg);
            box-shadow: 0 0 0 3vmin #af0000;
        }

        .warning:before {
            content: "";
            width: 80%;
            height: 80%;
            background: linear-gradient(45deg, #000000 0%, #414141 74%);
            float: left;
            margin-top: 10%;
            margin-left: 10%;
            border: 1vmin solid yellow;
            border-radius: 1vmin;
            box-sizing: border-box;
        }

        .warning:after {
            content: "WARNING:\2009 DANGER";
            color: white;
            transform: rotate(90deg);
            float: left;
            background: #af0000;
            position: absolute;
            bottom: 18.5vmin;
            left: -35vmin;
            font-size: 5vmin;
            font-family: Arial, Helvetica, serif;
            width: 49vmin;
            text-align: center;
            padding: 1vmin;
            text-shadow: 0 0 1px #000, 0 0 1px #000, 0 0 1px #000;
        }

        .hinges {
            position: absolute;
            z-index: 3;
            transform: rotateX(-35deg) rotateY(45deg) rotateZ(0deg) rotate3d(1, 0, 0, 90deg);
        }

        .hinges:before,
        .hinges:after {
            content: "";
            background: #2b2b2b;
            width: 5vmin;
            height: 1.5vmin;
            position: absolute;
            margin-top: -24.5vmin;
            z-index: 5;
            border: 2px solid #00000010;
            border-radius: 5px 5px 0 0;
            box-sizing: border-box;
            margin-left: -16.25vmin;
        }

        .hinges:after {
            margin-left: 13.75vmin;
            margin-top: -24.5vmin;
        }

        .box>span:before,
        .box>span:after {
            content: "";
            width: 5vmin;
            height: 1.5vmin;
            background: #103e4480;
            position: absolute;
            margin-left: 6vmin;
            border-radius: 0 0 5px 5px;
        }

        .box>span:after {
            margin-left: 36vmin;
        }

        .box>span {
            transform: rotateX(89deg) translate(0.3vmin, 0.3vmin);
            position: absolute;
        }

        .text {
            position: absolute;
            margin-top: 55vmin;
            color: white;
            font-family: Arial, Helvetica, serif;
            font-size: 5vmin;
            text-shadow: 0 0 1px #000, 0 0 1px #000, 0 0 1px #000;
            perspective-origin: left;
            background: #af0000;
            padding: 1vmin;
            transform: rotateX(-35deg) rotateY(45deg) rotateZ(0deg) rotate3d(1, 0, 0, 90deg) translate(33.5vmin, -2vmin);
            text-align: center;
            width: 49vmin;
        }

        div#panel:before {
            content: "WARNING";
            top: 3vmin;
            position: relative;
            font-size: 10vmin;
            width: 100vw;
            left: 0;
            z-index: 6;
            text-shadow: 0 0 1px #fff, 0 0 3px #fff;
            border-bottom: 1vmin dotted #fff;
        }

        #panel {
            position: absolute;
            background: #ff0000d0;
            color: #ffffff;
            font-family: Arial, Helvetica, serif;
            width: 90vmin;
            box-sizing: border-box;
            font-size: 3.25vmin;
            padding: 1vmin 2vmin;
            height: 60vmin;
            box-shadow: 0 0 0 100vmin #ff000060, 0 0 0 5vmin #ff000060;
            z-index: 5;
            display: none;
            text-align: center;
            text-shadow: 0 0 1px #fff, 0 0 3px #fff, 0 0 5px #fff;
            animation: warning-ligth 1s 0s infinite;
        }

        #panel.show {
            display: block !important;
        }

        #msg {
            margin-top: 5vmin;
            text-shadow: 0 0 2px #fff;
        }

        #time {
            font-size: 10vmin;
            background: #00000080;
            max-width: 35vmin;
            margin: 6vmin auto 5vmin !important;
            position: relative;
            border-radius: 0.25vmin;
            text-shadow: 0 0 3px #000, 0 0 2px #000, 0 0 3px #000, 0 0 4px #000,
                0 0 5px #000;
            padding: 1vmin 0;
        }

        #abort {
            background: #ffffffb8;
            color: #d30303;
            cursor: pointer;
            padding: 1vmin 2.75vmin;
            font-size: 6vmin;
            border-radius: 0.25vmin;
            font-weight: bold;
            animation: highlight 1s 0s infinite;
        }

        #abort:hover {
            background: #ffffff;
            box-shadow: 0 0 15px 5px #fff;
        }

        @keyframes highlight {
            50% {
                box-shadow: 0 0 15px 5px #fff;
            }
        }

        div#turn-off {
            position: fixed;
            background: #ffffff80;
            left: 0;
            width: 100vw;
            height: 0vh;
            z-index: 7;
        }

        div#turn-off:before,
        div#turn-off:after {
            content: "";
            position: fixed;
            left: 0;
            top: 0;
            height: 0vh;
            background: #000;
            width: 100vw;
            transition: height 0.5s ease 0s;
        }

        div#turn-off:after {
            top: inherit;
            bottom: 0;
        }

        div#turn-off.close {
            height: 100vh;
        }

        div#turn-off.close:before,
        div#turn-off.close:after {
            transition: height 0.1s ease 0.1s;
            height: 49.75vh;
        }

        #time.crono {
            background: #ffffffba;
            transition: background 0.5s ease 0s;
            color: #ff0000;
            text-shadow: 0 0 1px #ffffff, 0 0 2px #ffffff, 0 0 2px #ffffff;
        }

        #detonate {
            display: none;
            color: #fff;
            z-index: 5;
            font-size: 8vmin;
            font-family: Arial, Helvetica, serif;
            text-shadow: 0 0 1px #fff, 0 0 2px #fff, 0 0 3px #fff;
        }

        #detonate.show {
            display: block;
            animation: blink 0.25s 0s infinite;
        }

        #abort.hide {
            display: none;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        #closing {
            width: 100vw;
            height: 100vh;
            left: 0;
            position: absolute;
        }

        div#closing:before,
        div#closing:after {
            content: "";
            width: 50vw;
            height: 1.5vh;
            left: -50vw;
            top: 49vh;
            position: absolute;
            background: #000000;
            z-index: 7;
            transition: left 0.2s ease 0s;
        }

        div#closing:after {
            right: -50vw;
            transition: right 0.2s ease 0s;
            left: initial;
        }

        div#closing.close:before {
            left: 0;
            transition: left 0.2s ease 0.2s;
        }

        div#closing.close:after {
            right: 0;
            transition: right 0.2s ease 0.2s;
        }

        @keyframes warning-ligth {
            0% {
                box-shadow: 0 0 0 100vmin #ff000060, 0 0 0 5vmin #ff000060;
            }

            50% {
                box-shadow: 0 0 0 100vmin #ff000020, 0 0 0 5vmin #ff000020;
            }
        }

        #mute {
            position: absolute;
            bottom: 1vmin;
            right: 1vmin;
            background: #8bc34a80;
            width: 6vmin;
            height: 6vmin;
            cursor: pointer;
            border: 0.5vmin solid #151515;
        }

        #mute.muted {
            background: #ff000080;
        }

        #mute:before {
            content: "";
            border: 0.75vmin solid transparent;
            height: 2vmin;
            border-right: 2vmin solid #151515;
            position: absolute;
            border-left-width: 0;
            top: 1.25vmin;
            right: 1.25vmin;
        }

        #mute:after {
            content: "";
            border: 0vmin solid transparent;
            height: 2vmin;
            border-right: 1.5vmin solid #151515;
            position: absolute;
            top: 2vmin;
            right: 3.5vmin;
        }
    </style>

    <script>
        window.console = window.console || function (t) {};
        var consoleWarn = window.console.warn;

        function warn() {
            consoleWarn.apply(console, arguments);
        }
        window.open = function () {
            warn("window.open is disabled.");
        };
        window.print = function () {
            warn("window.print is disabled.");
        };
        window.alert = function () {
            warn("window.alert is disabled.");
        };
        window.confirm = function () {
            warn("window.confirm is disabled.");
        };
        window.prompt = function () {
            warn("window.prompt is disabled.");
        };
        window.Notification = function () {
            warn("HTML5 notifications are disabled.");
        };
    </script>

    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>

    
        <!-- <link rel='stylesheet' class="dark-theme" href='/css/dark.css' /> -->
    
</head>

<body translate="no">
    <div class="grid"></div>

    <div id="panel">
        <div id="msg">WEBSITE SELF-DESTRUCTION</div>
        <div id="time"></div>
        <span id="abort">ABORT</span>
        <span id="detonate">DETONATE</span>
    </div>

    <div id="turn-off"></div>
    <div id="closing"></div>

    <div class="notice" style="position: absolute; z-index: 9999;" hidden>
        <center class="notice">
            <b class="notice">
                <u class="notice">
                    <span class="notice" style="color: red; font-size: 2.5em; border-bottom: 3px solid red;">Website
                        Shutdown</span>
                </u>
            </b>
        </center>
        <h2 class="notice" style="color: red;">This website has been shutdown. For further information click <a
                href="/shutdown" style="color: red;" class="notice">here</a>.</h2>
    </div>

    <!-- <div id="mute"></div> -->

    <audio id="alarm">
        <source src="/shut/snd.mp3" type="audio/mpeg" />
    </audio>

    <script id="rendered-js">
        function formatSeconds(seconds) {
            var minutes = Math.floor(seconds / 60);
            seconds = seconds % 60;
            return (minutes < 10 ? "0" : "") + minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
        }

        var theCount;
        var alarm = document.getElementById("alarm");
        var panel = document.getElementById("panel");
        var turnOff = document.getElementById("turn-off");
        var turnOffHor = document.getElementById("closing");
        var detonate = document.getElementById("detonate");
        alarm.volume = 0.35; //volume level

        const timestamp = <%= timestamp %>;

        var time = document.getElementById("time");
        let timeLeft = timestamp - Math.round(new Date().getTime() / 1000);
        if (timeLeft < 0) {
            turnOff.classList.add("close");
            turnOffHor.classList.add("close");
            document.querySelectorAll(
                "*:not(html):not(body):not(head):not(meta):not(link):not(title):not(.notice):not(style):not(#turn-off):not(#closing):not(#detonate)"
            ).forEach(function (el) {
                el.remove();
            });
            document.querySelector(".notice").hidden = false;
        } else {
            function trigger() {
                time.innerText = formatSeconds(timeLeft);

                function showCountDown() {
                    timeLeft = timeLeft - 1;
                    time.innerText = formatSeconds(timeLeft);
                    if (timeLeft == 0) {
                        clearInterval(theCount);
                        time.classList.add("crono");
                        abort.classList.add("hide");
                        detonate.classList.add("show");
                        setTimeout(function () {
                            turnOff.classList.add("close");
                            turnOffHor.classList.add("close");
                            document.querySelectorAll(
                                "*:not(html):not(body):not(head):not(meta):not(link):not(title):not(.notice):not(style):not(#turn-off):not(#closing):not(#detonate)"
                            ).forEach(function (el) {
                                el.remove();
                            });
                            document.querySelector(".notice").hidden = false;
                            // reload.classList.add("show");
                            alarm.pause();
                        }, 1500);
                    }
                }

                setTimeout(() => {
                    setTimeout(function () {
                        panel.classList.add("show");
                        theCount = setInterval(showCountDown, 1000);
                    }, 500);
                }, 100);

                try {
                    alarm.load();
                    alarm.currentTime = 8;
                    if (timeLeft < 280) {
                        alarm.currentTime = 280 - timeLeft;
                    }
                    alarm.play();
                } catch {}

                let clicked = false;
                document.addEventListener("click", function () {
                    if (clicked) return;
                    clicked = true;
                    alarm.load();
                    alarm.currentTime = 8;
                    if (timeLeft < 280) {
                        alarm.currentTime = 280 - timeLeft;
                    }
                    alarm.play();
                });

                var abort = document.getElementById("abort");
                let pressed = false;
                abort.addEventListener("click", function () {
                    if (pressed) return;
                    pressed = true;
                    abort.innerText = "DENIED";
                    setTimeout(() => {
                        abort.innerText = "ABORT";
                        pressed = false;
                    }, 2500);
                    /*
                    panel.classList.remove("show");
                    clearInterval(theCount);
                    alarm.pause();
                    */
                });

                /*
                var mute = document.getElementById("mute");
                    mute.addEventListener("click", function () {
                    if (this.className == "muted") {
                        alarm.muted = false;
                        this.classList.remove("muted");
                    } else {
                        alarm.muted = true;
                        this.classList.add("muted");
                    }
                });
                */
            }
            if (timeLeft <= 280) {
                trigger();
            } else {
                turnOff.classList.add("close");
                turnOffHor.classList.add("close");
                setTimeout(() => {
                    turnOff.classList.remove("close");
                    turnOffHor.classList.remove("close");
                    trigger();
                }, (timeLeft - 280) * 1000);
            }
        }
    </script>
</body>

</html>