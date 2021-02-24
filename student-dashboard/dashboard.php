<?php
session_start();
include ('../config.php');
$obj = new Connectiondbp2;

if (isset($_COOKIE['email'])=='' || isset($_SESSION['email_part'])==''){
setcookie("email", $email, time()+0, "/");  
setcookie("pass", $pass, time()+0, "/");  
header('Location: ../index.php');	
}
else if (isset($_SESSION['email_part']) || isset($_COOKIE['email'])){

    include('header.php');
    include('sidebar.php');
    include('footer.php');
}
?>