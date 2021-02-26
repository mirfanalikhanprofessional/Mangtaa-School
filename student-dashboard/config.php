<?php

class connect{

	function con(){
		$host="localhost";
		$username="root";
		$pass="";
		$db="mangtaa_school";
		$cc=mysqli_connect($host,$username,$pass,$db);
		return $cc;
	}
function select($query){
 	$select=mysqli_query($this->con(),$query);
 	return $select;
 }}
?>

