<?php 
include('config.php');
$obj = new Contactdetails;

if (isset($_GET['btn_sub'])) 
{
	$name= $_GET['Name'];
	$subject= $_GET['Subject'];
	$email= $_GET['Sender'];
	$phone=$_GET['Phone'];
	$Message= $_GET['Message'];
	$sender = $_GET['Sender'];

	$obj->detail($name,$subject,$email,$phone,$Message,$sender);
}
 ?>