<?php
session_start();
include ('../config.php');
$obj = new Connectiondbp2;
if (isset($_SESSION['email_part'])) {
    include('top-header.php');
    include('sidebar.php');
    include('footer.php');
}
if(isset($_COOKIE['email'])){
    include('top-header.php');
    include('sidebar.php');
    include('footer.php');
}
if (isset($_COOKIE['email']) == '' && isset($_SESSION['email_part']) == ''){
    setcookie("email", $email, time()+0, "/");
    header("Location: ../index.php");
}?>