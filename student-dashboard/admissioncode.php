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
	$status = 'Unactive';
	$query = mysqli_query($obj->connect, "SELECT Applicant_password FROM registered_candidate WHERE Applicant_name = $name");
	$row  = mysqli_fetch_array($query);
	$password  = $row[3];	
	$admission = $obj->admission("INSERT INTO student(`Student_name`,`Student_class`,`Student_email`,`Student_password`,`City`,`State`,`Post_code`,`Student_mobile`,`Student_address`,`Student_guardian_name`,`Student_guardian_occupation`,`Student_home_contact`,`Social_link`,`Role`,`Status`) VALUES('$name','$email','','$city','$state','$postcode','$studentcontact','$address','$guardianname','$guardianoccupation','$guardiancontact','$social_link','$role','Unactive')");
	if($admission == true){
		return true;
	}
	else{
		echo "signup ! error";
	}
	header("Location: dashboard.php");
}
 ?>