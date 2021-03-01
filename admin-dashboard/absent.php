<?php
include('../config.php');
$obj = new Connectiondbp2;
$obj1 = new get_namep2;
$id = $_GET['id'];
$select = $obj1->select("SELECT Student_name FROM student WHERE Student_id = '$id'");
$row = mysqli_fetch_array($select);
$name = $row['Student_name'];


/*session_start();
if(isset($_COOKIE['email'])=='' || isset($_SESSION['email'])=='' )
{
setcookie("email", $email, time()+0, "/");  
setcookie("pass", $pass, time()+0, "/");
  
header('Location:index.php');	
}*/
/*if(isset($_COOKIE['email']) || isset($_SESSION['email'])){*/
	$student_id = $id;
	$student_name = $name;
	$date = date('y-m-d');
	$status = "Absent";
	$query = mysqli_query($obj->connect(),"INSERT iNTO attendence(Student_id,Student_name,mark_date,status) VALUES('$id','$name','$date','$status')") or die("nothing happens");
	if($query > 0){
		header('Location: mark-attendence.php?msg=attendence_marked_sucessfully');
	} 
	else{
		header('Location: mark-attendence.php?msg=attendece_not_marked');
	}

/*}*/
?>