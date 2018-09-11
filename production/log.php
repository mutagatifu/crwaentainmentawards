<?php
//start session
session_start();
include 'include/funct.php';
$user = new User();
if(isset($_POST['login'])){
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    ///echo $username;
    //echo $password;
    $auth = $user->check_login($username, $password);
    //echo $auth;
    if(!$auth){
        $_SESSION['message'] = 'Invalid username or password';
        header('location:login.php');
        //echo "yes";
    }
    else{
        $_SESSION['user'] = $auth;
        header('location:index.php');
    }
}
else{
    $_SESSION['message'] = 'You need to login first';
   // header('location:login.php');
}
?>
