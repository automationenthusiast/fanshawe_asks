<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:mainlogin.php');
}

?>

<html>
    <head>
      <link href="stylemain.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
          <div class = "container">
                <a href="home.php" class="homelogo" >
                    <img src="\Fanshawe_asks_logo.jpg" width="170" height="60" title="Fanshawe Asks - One stop solution for all your queries" alt="Fanshawe-asks-logo" class="homelogo" />
                </a>
                <nav>
                   <ol>
                       <div class="search-box">
                           <input class="search-txt" name="search" type="text" placeholder="Search your question..">
                           <a class="search-btn" href="#">
                               <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                           </a>
                        </div>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Questions</a></li>
                        <li><h1 class="greetnav">Hi, <?php echo $_SESSION['username']; ?> <a href="logout.php">Logout</a></li>   
                  </ol>
                </nav>
          </div>
        </header>
    </body>
<html>



