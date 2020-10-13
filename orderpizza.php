<?php
    // open the session
    session_start();
    // get the submitted email and assign it to the session email variable
    if(isset($_GET["email"])){
        $_SESSION["email"] = $_GET["email"];
    }
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
                <h1>
                    <?php
                        // this draws the email text input box and fills it in with the email that was previously entered
                        if(isset($_SESSION["email"])){
                            echo "Coming soon, <font style='color:#e5383b'>" . $_SESSION["email"] . "</font>!";
                        }
                        else{
                            echo 'Coming soon!';
                        }
                    ?>
                </h1>
                <a href="index.php">Go back</a>
            </div>
        </div>
    </body>
</html>