<?php 
abstract class Connectiondbp1{
	abstract function connect();
}
class Connectiondbp2 extends Connectiondbp1{
	function connect(){
		$host = "localhost";
		$username = "root";
		$password = "";
		$db_name = "mangtaa_school";
		$runconnect = mysqli_connect($host,$username,$password,$db_name);
		return $runconnect;
	}
}
abstract class studentloginareap1 extends Connectiondbp2{
	abstract function login($email,$password,$txtapp);
}
class studentloginareap2 extends studentloginareap1{
	function login($email,$password,$txtapp){
		if(isset($_POST['txtapp'])=='2'){
			$query="SELECT * FROM student WHERE Student_email='$email' AND Student_password='$password'";
			$result = mysqli_query($this->connect(),$query);
			$count = mysqli_num_rows($result);
			if($count > 0){
				header('Location: student-dashboard/dashboard.php');
			}
			else{
	           header("Location: login.php?msg=InvalidLogin");
			}
		}
		else{
			$query="SELECT * FROM registered_candidate WHERE Applicant_email='$email' AND Applicant_password='$password'";
			$result = mysqli_query($this->connect(),$query);
			$count = mysqli_num_rows($result);
			if($count > 0){
				header('Location: student-dashboard/dashboard.php');
			}
			else{
	           header("Location: login.php?msg=InvalidLogin");
			}	
		}
	}
}
abstract class insert1 extends Connectiondbp2 {
	abstract function insert($query);
}
class insert2 extends insert1{
	function insert($query){
		$insert=mysqli_query($this->connect(),$query);
		if($insert>0)
		{
			return true;
			header("Location: student-dashboard/dashboard.php");
		}
		else
		{
			return false;
			header("Location: student-dashboard/register.php");
		}
	}	
}
abstract class admissionp1 extends Connectiondbp2{
	abstract function admission($query);
}
class admissionp2 extends admissionp1{
	function admission($query){
		$insert = mysqli_query($this->connect(),$query);
		if($insert > 0){
			return true;
			header("Location: student-dashboard/dashboard.php");
		}
		else{
			return false;
			header("Location: student-dashboard/admission.php");
		}
	}
}
abstract class selectionp1 extends Connectiondbp2{
	abstract function select($query);
}
class selectionp2 extends selectionp1{
	function select($query){
		$select = mysqli_query($this->connect(),$query);
		return $select;
	}
}
abstract class Contactdetailp1 extends Connectiondbp2{
	abstract function detail($name,$subject,$email,$phone,$message);
}
class Contactdetails extends Contactdetailp1{
	function detail($name,$subject,$email,$phone,$message){
		$insert=mysqli_query($this->connect(),"INSERT INTO contact(Name,Subject,Sender,Phone,Message) VALUES ('$name','$subject','$sender','$phone','$message')");
		if($insert==true){
	       header("Location:contact.php");
		}
	}
}
abstract class get_idp1 extends Connectiondbp2{
	abstract function get_id($id);
}
class get_idp2 extends get_idp1{
	function get_id($id){
		$query = mysqli_query($this->connect(),"SELECT * FROM student WHERE Student_id = '$id'");
	}
}
abstract class get_namep1 extends Connectiondbp2{
	abstract function select($query);
}
class get_namep2 extends get_namep1{
	function select($query){
		$select = mysqli_query($this->connect(),$query);
		return $select;
	}
}
abstract class updatep1 extends Connectiondbp2{
	abstract function update($query);
}
class updatep2 extends updatep1{
	function update($query){
		$update = mysqli_query($this->connect(),$query);
		return $update;
	}
}
abstract class createclassp1 extends Connectiondbp2{
	abstract function create($query);
}
class createclassp2 extends createclassp1 {
	function create($query){
		$create = mysqli_query($this->connect(),$query);
		if($create > 0){
			return true;
			header('admin-dashboard/batch-information.php?msg=class_created_sucessfully');
		}
		else{
			return false;
			header('create-class.php?msg=class_not_created_sucessfully');
			echo ('class creation failed');
		}
	}
}

?>

       