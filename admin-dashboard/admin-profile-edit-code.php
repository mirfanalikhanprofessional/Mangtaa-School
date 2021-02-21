<?php 
session_start();
include('../config.php');
$obj = new updatep2;
$password = $_SESSION['pass'];
$oldpass = $_POST['txtoldpass'];
$newpass = $_POST['txtnewpass'];
$cnewpass = $_POST['txtcnewpass'];
if(isset($_POST['btn_sub']))
{
	if(isset($password) === isset($oldpass) && isset($newpass) === isset($cnewpass)){
		$id = $_POST['id'];
		$name= $_POST['txtname'];
		$email = $_POST['txtemail'];
		$query = $obj->update("UPDATE admin SET Admin_name='$name',Admin_email='$email',Admin_password='$cnewpass' WHERE Admin_id='$id'") or die("messge");
		if($query>0){
			header('Location:dashboard.php');
		}
		else{
			header("Location:admin-profile-edit.php");
		}
	}
	else{
		echo "old password not match please try again <a href='admin-profile-edit.php'></a>";
	}
}
 ?>