<?php
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
  <div class = "signup2">
   <div class = "notmember">
   <h6 class = "notmember"> Not a member? Click Signup </h6>
   </div>
   <a href="mainsignup.php" class="loginbttn">Signup</a> 
  </div>
  <div class = "login">
  <form action ="login_validation.php" method="post">
  Login
  <br>
  <br>
  <input class="input_text" type="text" placeholder="Username" name="uname" required>
  <br>
  <br>
  <input class="input_text" type="password" placeholder="Password" name="password" required>
  <br>
  <br>
  <button class="loginbttn">Login</button>
  <br>
  <br>
  </form>
  </div>
 </div>
</div>



</body>
</html>



 