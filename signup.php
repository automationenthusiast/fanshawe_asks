<?php

session_start();

$con = mysqli_connect('localhost','root','feliciaislove@1');

mysqli_select_db($con,'fanshawe_asks_db');

$name = $_POST['uname'];

$email = $_POST['email'];

$pass = $_POST['password'];

$passcheck = $_POST['passwordcheck'];



$s = " SELECT * from signup_data_fasks WHERE email = '$email'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:mainlogin.php');
}else{
    $reg=" INSERT into signup_data_fasks( uname , email, password ) values ('$name','$email','$pass')";
    mysqli_query($con,$reg);
    
    header('location:mainlogin.php');
    
}




?> 