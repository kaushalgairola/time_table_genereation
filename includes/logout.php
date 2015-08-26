<?php include_once 'functions.php'; ?>
<?php include_once("session.php");//1.find the session ?>
<?php
//2.unset the session variables
$_SESSION = array();
//3.destroy the session cookie
if (isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time()-42222,'/');
}
//4.destroy the session
session_destroy();
header("LOCATION:../login.php")
?>