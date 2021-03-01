<?php
session_start();
include('../config.php');
$obj = new Connectiondbp2;
if (isset($_COOKIE['email']) == '' && isset($_SESSION['email_part']) == '') {
    setcookie("email", $email, time() + 0, "/");
    header("Location: ../index.php");
}
?>
<style>
    body {
        background-image: url(assets/images/main1.jpg);
    }
</style>


<?php

if (isset($_SESSION['email_part'])) {
include('top-header.php');
include('sidebar.php');
echo "
    <h1 style='margin-left: 600px; margin-top: 100px;'><b>Welcome to dashboard ".$_SESSION['name']."</b></h1>
<img src='assets/images/logo-job.png' style='margin-left: 650px; margin-top: 100px;'> ";


include('footer.php');
} 
else if (isset($_COOKIE['email'])) {
include('top-header.php');
include('sidebar.php');
    echo "
    <h1 style='margin-left: 600px; margin-top: 100px;'><b>Welcome to dashboard" . $_COOKIE['email'] . "</b></h1>
<img src='assets/images/logo-job.png' style='margin-left: 650px; margin-top: 100px;'> ";











include('footer.php');
}

