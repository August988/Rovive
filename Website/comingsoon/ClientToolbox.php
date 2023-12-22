<html>

<head>

    <title>Toolbox</title>

    <script src="/public/js/IDE/js/main.js" type="text/javascript"></script>
    <script src="/public/js/IDE/js/insert.js" type="text/javascript"></script>


    
        <!-- <link rel='stylesheet' class="dark-theme" href='/css/dark.css' /> -->
    
</head>

<body style="font-family: Arial; text-decoration: none;">


</body>

</html>

<%- assets %>

<div id="bottomBtnHolder">
    <button onclick="to_prev()">Previus</button>
    <button onclick="to_next()">Next</button>
</div>

<script>
    function getQueryVariable(variable) {
        const query = window.location.search.substring(1);
        const vars = query.split('&');
        for (let i = 0; i < vars.length; i++) {
            const pair = vars[i].split('=');
            if (decodeURIComponent(pair[0]) === variable) {
                return decodeURIComponent(pair[1]);
            }
        }
        console.log('Query variable %s not found', variable);
    }

    function to_prev() {
        let cursor = getQueryVariable("cursor")
        if (cursor) {
            cursor = parseInt(cursor)
            cursor -= 50
        } else {
            cursor = 0
        }
        if (cursor < 0) {
            cursor = 0
        }
        window.location.replace("/users/list?cursor=" + cursor.toString());
    }

    function to_next() {
        let cursor = getQueryVariable("cursor")
        if (cursor) {
            cursor = parseInt(cursor)
            cursor += 50
        } else {
            cursor = 0
        }
        window.location.replace("/users/list?cursor=" + cursor.toString());
    }
</script>
