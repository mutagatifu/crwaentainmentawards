<?php
include_once('User.php');
$user = new User();
$auth = $user->updatecalifart();
echo $auth;
?>