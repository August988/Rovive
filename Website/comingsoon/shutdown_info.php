<html>

<head>
    <title>Farwell Rbx2016</title>

    
        <!-- <link rel='stylesheet' class="dark-theme" href='/css/dark.css' /> -->
    
</head>

<body>
    <h1>Farwell Rbx2016! You will be missed.</h1>
    <h2 id="when"></h3>
    
    <p>&nbsp;</p>

    <h2>
        Reason for shutdown:
    </h2>
    <h3>
        Rbx2016 was shutdown <%= reason %>
    </h3>

    <script>
        const timestamp = <%= timestamp %>;
        const when = document.getElementById('when');
        const date = new Date(timestamp * 1000);
        when.innerHTML = `Rbx2016 was shutdown on ${date.toUTCString()}`;
    </script>

</body>

</html>