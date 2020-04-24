<?php

session_start();
include ("login_validation.php");

$now_name = $_SESSION['username'];
$con = mysqli_connect('localhost','root','feliciaislove@1');

mysqli_select_db($con,'fanshawe_asks_db');

$oriname = "SELECT oriname FROM signup_data_fasks WHERE uname = '$now_name'";
$result_oriname = mysqli_query($con,$oriname);



$course = " SELECT course FROM signup_data_fasks WHERE uname = '$now_name'";
$result_course = mysqli_query($con,$course);



$question = $_POST['askquestion'];

$conk = mysqli_connect('localhost','root','feliciaislove@1');

mysqli_select_db($conk,'questions_answers');


$regk= " INSERT into qa_records( name , username, course, question, answer, upvote, downvote ) values ('$result_oriname','$now_name','$result_course','$question',' ','0','0')";

mysqli_query($conk,$regk);
    
header('location:askaquestion.php');
    

?> 