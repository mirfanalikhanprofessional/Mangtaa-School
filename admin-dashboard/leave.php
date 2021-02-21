<?php
include('../config.php');
$obj = new Connectiondbp2;
$id = $_GET['id'];
$name = $_GET['name'];
/*session_start();
if(isset($_COOKIE['email'])=='' || isset($_SESSION['email'])=='' )
{
setcookie("email", $email, time()+0, "/");  
setcookie("pass", $pass, time()+0, "/");
  
header('Location:index.php');	
}*/
/*if(isset($_COOKIE['email']) || isset($_SESSION['email'])){*/
	$student_id = $id;
	$Student_name = $name;
	$date = date('y-m-d');
	$status = "Leave";
	$query = mysqli_query($obj->connect(),"INSERT INTO attendence(`Student_id`,`Student_name`,`Date`,`Status`) VALUES('$student_id','$Student_name','$date','$status')");
	if($query>0){	
		header('Location: admin-attendence.php?msg=attendence_marked_sucessfully');
	} 
	else{
		header('Location: admin-attendence.php?msg=attendece_not_marked');	
	}
/*}*/
?>