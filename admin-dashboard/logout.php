<?php 
setcookie("email", $email, time()+0, "/");  
setcookie("pass", $pass, time()+0, "/"); 
session_destroy();
unset($_SESSION['email_part']); 
unset($_SESSION['pass']);
unset($_SESSION['id']);
unset($_SESSION['name']);


header('Location: ../index.php');
?>