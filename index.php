<?php
    // start session
    session_start();

    // create the email session variable if not already created
    if(!isset($_SESSION["email"])){
        $_SESSION["email"] = null;
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
                echo "Welcome back to the pizza website, <font style='color:#e5383b'>" . $_SESSION["email"] . "</font>!";
            }
            else{
                echo 'Welcome to the Pizza Website';
            }
        ?>
        </h1>
        <p>This app is perfect for ordering pizza</p>
        <form action="/orderpizza.php">
            <label for="email">Email:</label>
            <?php
                echo "<input type='text' id='email' name='email' value='" . $_SESSION["email"] . "'/>";
            ?>
            <input type="submit" value="Submit">
        </form>
        </div>
    </body>
    </div>
</html>