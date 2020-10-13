<?php
    // open the session
    session_start();
    // get the submitted email and assign it to the session email variable
    $_SESSION["email"] = $_GET["email"];
?>

<html>
    <head>
        <title>Pizza Project</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
    </head>
    <body>
        <div class="container">
            <div class="main">
                <h1>Coming soon!</h1>
            </div>
        </div>
    </body>
</html>