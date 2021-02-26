<?php
include('../config.php');
$obj = new Connectiondbp2;
session_start();
$name = $_SESSION['name'];
if ($_SESSION['email']) {
	$name = 'maya';
	$query = mysqli_query($obj->connect(), "select * from garde where Student_name = '$name'") or die("message1");
	$englishquery = mysqli_query($obj->connect(), "SELECT ((science)*100)DIV(100) As percent FROM garde WHERE Student_name= '$name'");
	$mathquery = mysqli_query($obj->connect(), "SELECT ((mathematics)*100)DIV(100) FROM garde WHERE Student_name= '$name'");
	$socialstudiesquery = mysqli_query($obj->connect(), "SELECT ((social_studies)*100)DIV(100) FROM garde WHERE Student_name= '$name'");
	$urdu = mysqli_query($obj->connect(), "SELECT ((urdu)*100)DIV(100) FROM garde WHERE Student_name= '$name'");
	$artquery = mysqli_query($obj->connect(), "SELECT ((art)*100)DIV(100) FROM garde WHERE Student_name= '$name'");
	$sindhiquery = mysqli_query($obj->connect(), "SELECT ((sindhi)*100)DIV(100) AS percent FROM garde WHERE Student_name= '$name'");
	$computerquery = mysqli_query($obj->connect(), "SELECT ((computer)*100)DIV(100) FROM garde WHERE Student_name= '$name'");

    while($row=mysqli_fetch_array($sindhiquery)){
        $value = $row['percent'];
        echo $value = round($value,1);
    }
}



?>