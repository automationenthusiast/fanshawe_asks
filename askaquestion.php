
 <html>
    <head>
      <link href="stylemain.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    </head>
    <body>
    <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {  
    x.style.display = "none";
  }
}
</script>
        
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
                        
                        <li><a href="/askaquestion.php" class ="navlink">Ask</a></li>
                        <li><a href="#" class = "navlink">How it works?</a></li>
                    
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
          <div id ="myDIV" class="contentcontainer" style="background-image: url(whitemosaic.jpg)">
          <br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           New to Fanshawe asks?
          <button class="close" onclick="myFunction()">x</button>
          <br>
          <br>
          <div class ="lol">
          Fanshawe asks is a platform or you may call it a forum, for students at Fanshawe college.
          <br>
          To come together, ask any random question.
          <br>
           Be it "Where can I find the stationary?" or
          "What is best snack at Fanshawe college?"
          <br><br>
          </div>
          <button class="hiw">How it works?</button>
          <button class="gs">Get started.</button>
          
          <br><br>

          </div>

          <div class ="home_questions" style="background-image: url(whitemosaic.jpg)">

          <div class="leftmargin">
    
          </div>

          <div class="middlespace" style=" background-color: white"><br>
          
  Go for it! Ask a question.
  <br>
  <br>
<form action="ask.php" method="post">
    <textarea name = "askquestion" rows="3" cols="100" required>
    Ask here...
</textarea>
<br>
<br> 
<button class="askbutton">Ask!</button>

<br>

<br>

</form>

   

           </div>
           
           <div class="rightmargin"></div>


          </body>
<html>
