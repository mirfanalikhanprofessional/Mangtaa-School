<?php
include('config.php');
$obj = new studentloginareap2;
if (isset($_POST['btn_sub'])) 
{
	if (isset($_POST['txtlog']) == "1") {

		$email = mysqli_real_escape_string($obj->connect(), $_REQUEST['email']);
		$_COOKIE['email'] = $email;
		$email = $_COOKIE['email'];

		$pass = mysqli_real_escape_string($obj->connect(), $_REQUEST['pass']);
		$_COOKIE['pass'] = $pass;
		$password = $_COOKIE['pass'];

		setcookie("email", $email, time() + 30, "/");
		setcookie("pass", $password, time() + 30, "/");

		$result = mysqli_query($obj->connect(), "SELECT * FROM student WHERE Student_email='$email' AND Student_password='$password'") or die("eork damit");
		$count = mysqli_num_rows($result) or die("not working");
		if ($count > 0) {
			header('Location: student-dashboard/dashboard.php');
			session_start();
			while ($row = mysqli_fetch_array($result)) {
				session_start();
				while ($row = mysqli_fetch_array($result)) {
					$_SESSION['name'] = $row[1];
					$_SESSION['id'] = $row[0];
				}
			}
		} else {
			header("Location: ../enrolled-login.php?msg=Invalid_Login");
		}
		
	} else {
		$email = $_POST['email'];
		$password = $_POST['pass'];
		session_start();
		$_SESSION['email_part'] = $email;
		$_SESSION['pass_part'] = $password;
		$result = mysqli_query($obj->connect(), "SELECT * FROM student WHERE Student_email='$email' AND Student_password='$password'") or die("eork damit");
		$count = mysqli_num_rows($result) or die("not working");
		if ($count > 0) {
			header('Location: student-dashboard/dashboard.php');
			session_start();
			while ($row = mysqli_fetch_array($result)) {
				session_start();
				while ($row = mysqli_fetch_array($result)) {
					$_SESSION['email_part'] = $email;
					$_SESSION['pass'] = $password;
					$_SESSION['name'] = $row[1];
					$_SESSION['id'] = $row[0];
				}
			}
		} else {
			header("Location: ../enrolled-login.php?msg=Invalid_Login");
		}
	}
}
 ?>