<?php 
include('../config.php');
$obj = new admissionp2;

if (isset($_POST['add-btn'])) 
{
	$fname = $_POST['txtfname'];
	$lname = $_POST['txtlname'];
	$name = $fname.$lname;
	$guardianname = $_POST['txtguarname'];
	$guardianoccupation = $_POST['txtguardianoccupation'];
	$studentcontact = $_POST['txtstudentphone'];
	$guardiancontact = $_POST['txtguardianphone'];
	$address = $_POST['txtaddress'];
	$city = $_POST['txtcity'];
	$state = $_POST['txtstate'];
	$postcode = $_POST['txtpostcode'];
	$social_link = $_POST['txtface'];
	$email = $_POST['txtemail'];
	$select = $_POST['txtselect'];
	$role = "Registered";
	$status = $_POST['status'];
    $class = $_POST['txtclass'];
	$query = mysqli_query($obj->connect, "SELECT Applicant_password FROM registered_candidate WHERE Applicant_name = $name");
	$row  = mysqli_fetch_array($query);
	$password  = $row[3];	
	$admission = $obj->admission("UPDATE student SET `Student_name` = '$name', `Student_class` = '$class' , `Student_email` = '$email' , `City` = '$city' , `State` = '$state',`Post_code`='$postcode',`Student_mobile`='$studentcontact',`Student_address`='$address',`Student_guardian_name`='$guardianname',`Student_guardian_occupation`='$guardianoccupation',`Student_home_contact`='$guardiancontact',`Social_link`='$social_link',`Role`='$role',`Status`='$status' WHERE `Student_name`='$select'");
	if($admission == true){
		return true;
	}
	else{
		echo "signup ! error";
	}
	header("Location: dashboard.php");
}
