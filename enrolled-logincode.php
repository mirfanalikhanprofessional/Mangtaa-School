<?php
include('config.php');
$obj = new studentloginareap2;
if (isset($_POST['btn_sub'])) 
{
	if (isset($_POST['txtlog'])=='1') 
	{
		$email=mysqli_real_escape_string($obj->connect(),$_REQUEST['email']);
		$_COOKIE['email']=$email;
		$email=$_COOKIE['email'];

		$pass=mysqli_real_escape_string($obj->connect(),$_REQUEST['pass']);
		$_COOKIE['pass']=$pass;
		$password=$_COOKIE['pass'];

		setcookie("email", $email, time()+30,"/");  
		setcookie("pass", $password, time()+30,"/");  

		$obj->login($email,$password);
	} 
	else
	{
		$email = $_POST['email'];
		$password = $_POST['pass'];
		session_start();
		$_SESSION['email_part'] = $email;
		$_SESSION['pass_part'] = $password;
		
		$obj->login($email,$password);
	}
}
 ?>