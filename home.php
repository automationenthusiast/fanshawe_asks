<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:mainlogin.php');
}

?>

<html>
    <head>
        <link href="stylemain.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    </head>
    <body>
        <div class = "headbar">
            <div  class = "homelogo">
                <a href="home.php">
                    <img src="\Fanshawe_asks_logo.jpg" width="170" height="90" title="Fanshawe Asks - One stop solution for all your queries" alt="Fanshawe-asks-logo" />
                </a>
                
            </div>
            <div  class ="opphomelogo">
                 <h1 class="greet">Hi, <?php echo $_SESSION['username']; ?> <a href="logout.php">Logout</a>
                </h1>

            </div>
            <h1> Akshay kumar shanmugam </h1>
            
        </div>
    </body>

<html>