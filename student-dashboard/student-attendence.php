<?php 
include('../config.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<title>Attendence sheet</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
<script src="assets/js/ace-extra.min.js"></script>
<link rel="stylesheet" href="assets/css/studentattendencecode.css" />
</head>
<body style="background-image: url(assets/images/main1.jpg);">
<?php include('header.php'); ?>
<div class="containter-fuild" style="margin-top: 10%;">
<div class="col-xl-4" > <?php include('sidebar.php')?> </div>  
<div class="col-xl-8" style="margin-left: 350px;"> 

<div class="widget-body">
<div class="widget-main padding-34" style="text-align: center;background-color:yellow; font-size:50px;">
<div class="col-lg-6">
</div>
<div class="hed" style=" ">
	<i><b>My Attendence</b></i>
</div>
<div class="space-6"></div>
</div><!-- /.col -->
</div><!-- /.row -->
<div class="space"></div>
<table class="table table-striped table-bordered">
<thead style="font-size: 15px; border:7px solid purple; background: #e3baf7;">
<tr>
	<th class="center" style="border:7px solid purple;">Section Name</th>
	<th class="center"style="border:7px solid purple;">Total Attendance </th>
	<th class="center" style="border:7px solid purple;" >Total Section Attendance </th>
	<th class="center" style="border:7px solid purple;"> Attendance Percentage</th>
</tr>
</thead>
<thead style="font-size: 15px; border:7px solid purple; background: #e3baf7;">
<tr>
	<th class="center" style="border:7px solid purple; text-align: center;">1st term</th>
	<th class="center"style="border:7px solid purple; text-align: center;"> 84 </th>
	<th class="center" style="border:7px solid purple; text-align: center;"> <?php ($_SESSION['attend1']) ?></th>
	<th class="center" style="border:7px solid purple; text-align: center;"> 98.81</th>
</tr>
</thead>
</table>
<table class="table table-striped table-bordered" style="margin-top: 6%;">
<thead style="font-size: 15px; border:7px solid purple; background: #e3baf7;">
<tr>
	<th class="center" style="border:7px solid purple;">Section Name</th>
	<th class="center"style="border:7px solid purple;">Total Attendance </th>
	<th class="center" style="border:7px solid purple;" >Total Section Attendance </th>
	<th class="center" style="border:7px solid purple;"> Attendance Percentage</th>
</tr>
</thead>
<thead style="font-size: 15px; border:7px solid purple; background:#e3baf7;">
<tr>
	<th class="center" style="border:7px solid purple;text-align: center;"> 2nd term</th>
	<th class="center"style="border:7px solid purple; text-align: center;"> 74 </th>
	<th class="center" style="border:7px solid purple; text-align: center;"><?php ($_SESSION['attend2']) ?></th>
	<th class="center" style="border:7px solid purple;text-align: center;"> 92.86</th>
</tr>
</thead>
</table>

<table class="table table-striped table-bordered"style="margin-top:6%;">
<thead style="font-size: 15px; border:7px solid purple; background:#e3baf7;">
<tr>
	<th class="center" style="border:7px solid purple;">Section Name</th>
	<th class="center"style="border:7px solid purple;">Total Attendance </th>
	<th class="center" style="border:7px solid purple;" >Total Section Attendance </th>
	<th class="center" style="border:7px solid purple;"> Attendance Percentage</th>
</tr>
</thead>
<thead style="font-size: 15px; border:7px solid purple; background: #e3baf7;">
<tr>
	<th class="center" style="border:7px solid purple;text-align: center;"> 3rd term</th>
	<th class="center"style="border:7px solid purple; text-align: center;"> xxx</th>
	<th class="center" style="border:7px solid purple; text-align: center;">xxx </th>
	<th class="center" style="border:7px solid purple;text-align: center;">xxx</th>
</tr>
</thead>

</table>
</div>
</div><!-- /.main-container -->
</div>

</body>
<!-- basic scripts -->

<!--[if !IE]> -->
<script src="assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->


</body>
</html>







<?php 
include('footer.php'); ?>

<?php

class attendence extends Connectiondbp2{
function Attendance($name,$attend1,$attend2)
{

$query="SELECT * FROM Attendence WHERE Student_name='$name' OR atten_total='$attend1' OR atten2_total='$attend2'";
$result = mysqli_query($this->connect(),$query);
$count = mysqli_num_rows($result);
session_start();
$fetch = mysqli_fetch_array($result);
$_SESSION['name']=$fetch[2];
$_SESSION['attend1']=$fetch[5];
$_SESSION['attend2']=$fetch[6];

}
}

?>
<?php 



if (isset($_POST['attend'])) 
{
$name= $_POST['name'];
$attend1=$_POST['atten_total'];
$attend2=$_POST['atten2_total'];


$obj->Attendence($name,$attend1,$attend2);
}
?>




</body>
</html>