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
        
          <div class = "container" style="background-image: url(Red-Background-Traingles.jpg)">
                <nav>
                   <ul>
                        <li class="veru">
                            <a href="home.php" class="homelogo" >
                                 <img src="\Fanshawe_asks_logo.jpg" width="150" height="50" title="Fanshawe Asks - One stop solution for all your queries" alt="Fanshawe-asks-logo" class="homelogo" />
                            </a>
                        </li>    
                        <li>
                            <div class="mainbar">
                               <input class="search-txt" name="search" type="text" placeholder="Search your question..">
                               <a class="search-btn" href="#">
                                    <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                               </a>
                            </div>
                        </li>
                        
                        <li><a href="#" class ="navlink">Ask</a></li>
                        <li><a href="#" class = "navlink">Questions</a></li>
                    
                        <li><a href="#">Hi, <?php echo $_SESSION['username']; ?>!</a>
                        <div class ="listlogout" style="background-image: url(Red-Background-Traingles.jpg)">
                            <ul>
                               <li><a href="#">Home</a></li>
                               <li><a href="#">Your profile</a></li>
                               <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                        </li>   
                  </ul>
                </nav>
          </div>
        
        
        
    </body>
<html>



