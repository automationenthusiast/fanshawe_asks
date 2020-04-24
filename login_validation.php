<?php

session_start();

$con = mysqli_connect('localhost','root','feliciaislove@1');

mysqli_select_db($con,'fanshawe_asks_db');

$name = $_POST['uname'];

$pass = $_POST['password'];

$s = " SELECT * from signup_data_fasks WHERE uname = '$name' && password ='$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);






if($num == 1){

    $_SESSION['username'] = $name;
 


    header('location:home.php');

}else{
    header('location:mainlogin.php');
}



?> 