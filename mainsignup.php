<?php

if(isset($msg)){
  echo "<strong>Error!</strong>$msg";
}


?>

<!DOCTYPE html>
<html>
 <head>
  <link href="stylemain.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 </head>

 <body style="background-image: url(Red-Background-Traingles.jpg)">
 <div class="fullbox">
  <div class = "mainlogo">
  <a href="mainlogin.php">
   <img src="\Fanshawe_asks_logo.jpg" width="500" height="200" title="Fanshawe Asks - One stop solution for all your queries" alt="Fanshawe-asks-logo" />
</a>
</div>
  <h2 class="tagline"> One stop solution, for all your queries.</h2>
 
  <div class = "login_signup_container">
 
   <div class = "signup">
    <form action ="signup.php" method="post">
    Signup
    <br>
    <br>
    <input class="input_text" type="text" placeholder="Username" name="uname" required>
    <br>
    <br>
    <input class="input_text" type="text" placeholder="Email" name="email" required>
    <br>
    <br>
    <input class="input_text" type="password" placeholder="Password" name="password" required>
    <br>
    <br>
    <input class="input_text" type="text" placeholder="Name" name="oriname" required>
    <br>
    <br>
   </div>

   <div class = "passcheck">
    <input class="input_text" type="password" placeholder="Re-enter Password" name="passwordcheck" required>
    <br>
    <br>
    <input class="input_text" type="text" placeholder="Course" name="course" required>
    <br>
    <br>
    <button class="loginbttn">Signup</button>
    <br>
    <br>
   </div>

   </form>
  </div>
 
</div>

<h5 class="devman">Developed by Akshay Shanmugam</h5>



</body>
</html>



