<?php
include('../config.php');
$obj = new Connectiondbp2;
session_start();
if (isset($_COOKIE['email']) == '' && isset($_SESSION['email_part']) == '') {
	setcookie('email', $email, time() + 0, '/');
	header('Location: ../index.php');
}
$name = $_SESSIO['name'];
include('top-header.php');
$date = date('m');
$details = mysqli_query($obj->connect(),"SELECT COUNT(*) FROM attendence WHERE Student_name = '$name' AND Status = 'Present' AND mark_date LIKE '%02%'");
$run = mysqli_num_rows($details);
$per = ($run*100)/100;
if (isset($_SESSION['email_part'])){
	echo "<div class='containter-fuild' style='margin-top: 10%;'>
		<div class='col-xl-4'>"; include('sidebar.php'); echo "</div>
		<div class='col-xl-8' style='margin-left: 350px;'>

			<div class='widget-body'>
				<div class='widget-main padding-34' style='text-align: center; background-color: yellow; font-size: 50px;'>
					<div class='col-lg-6'>
					</div>
					<div class='hed'>
						<i><b>My Attendence</b></i>
					</div>
					<div class='space-6'></div>
				</div><!-- /.col -->
			</div><!-- /.row -->
			<div class='space'></div>
<table class='table table-striped table-bordered'>
<thead style='font-size: 15px; border:7px solid purple; background: #e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple;'>Semester</th>
	<th class='center'style='border:7px solid purple;'>Total Attendance </th>
	<th class='center' style='border:7px solid purple;'> Attendance Percentage</th>
</tr>
</thead>
<tbody style='font-size: 15px; border:7px solid purple; background: #e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple; text-align: center;'>1<sup>st</sup> semester</th>
	<th class='center'style='border:7px solid purple; text-align: center;'> 100% </th>	
	<th class='center' style='border:7px solid purple; text-align: center;'>";  echo $per.'%'; "</th>
</tr>
</tbody>
</table>";
echo "<table class='table table-striped table-bordered' style='margin-top: 6%;'>
<thead style='font-size: 15px; border:7px solid purple; background: #e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple;'>Semester</th>
	<th class='center'style='border:7px solid purple;'>Total Attendance </th>
	<th class='center' style='border:7px solid purple;'> Attendance Percentage</th>
</tr>
</thead>
<tbody style='font-size: 15px; border:7px solid purple; background: #e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple; text-align: center;'>2<sup>nd</sup> semester</th>
	<th class='center'style='border:7px solid purple; text-align: center;'> 100% </th>	
	<th class='center' style='border:7px solid purple; text-align: center;'>"; echo $per.'%'; "</th>
</tr>
</tbody>
</table>";
echo "<table class='table table-striped table-bordered' style='margin-top:6%;'>
<thead style='font-size: 15px; border:7px solid purple; background:#e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple;'>Semester</th>
	<th class='center'style='border:7px solid purple;'>Total Attendance </th>
	<th class='center' style='border:7px solid purple;'> Attendance Percentage</th>
</tr>
</thead>
<tbody style='font-size: 15px; border:7px solid purple; background: #e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple; text-align: center;'>3<sup>rd</sup> semester</th>
	<th class='center'style='border:7px solid purple; text-align: center;'> 100% </th>	
	<th class='center' style='border:7px solid purple; text-align: center;'>"; echo $per.'%'; echo "</th>
</tr>
</tbody>
</table>
		</div>
	</div><!-- /.main-container -->
	</div>

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src='assets/js/jquery-2.1.4.min.js'></script>

	<!-- <![endif]-->

	<!--[if IE]>
	<script src='assets/js/jquery-1.11.3.min.js'></script>
	<![endif]-->
	< <!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src='assets/js/ace-elements.min.js'></script>
		<script src='assets/js/ace.min.js'></script>

		<!-- inline scripts related to this page -->'";	
	}
if (isset($_COOKIE['email'])) {
	echo "<div class='containter-fuild' style='margin-top: 10%;'>
		<div class='col-xl-4'>";
	include('sidebar.php');
	echo "</div>
		<div class='col-xl-8' style='margin-left: 350px;'>

			<div class='widget-body'>
				<div class='widget-main padding-34' style='text-align: center; background-color: yellow; font-size: 50px;'>
					<div class='col-lg-6'>
					</div>
					<div class='hed'>
						<i><b>My Attendence</b></i>
					</div>
					<div class='space-6'></div>
				</div><!-- /.col -->
			</div><!-- /.row -->
			<div class='space'></div>
<table class='table table-striped table-bordered'>
<thead style='font-size: 15px; border:7px solid purple; background: #e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple;'>Semester</th>
	<th class='center'style='border:7px solid purple;'>Total Attendance </th>
	<th class='center' style='border:7px solid purple;'> Attendance Percentage</th>
</tr>
</thead>
<tbody style='font-size: 15px; border:7px solid purple; background: #e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple; text-align: center;'>1<sup>st</sup> semester</th>
	<th class='center'style='border:7px solid purple; text-align: center;'> 100% </th>	
	<th class='center' style='border:7px solid purple; text-align: center;'>";
	echo $per . '%';
	"</th>
</tr>
</tbody>
</table>";
	echo "<table class='table table-striped table-bordered' style='margin-top: 6%;'>
<thead style='font-size: 15px; border:7px solid purple; background: #e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple;'>Semester</th>
	<th class='center'style='border:7px solid purple;'>Total Attendance </th>
	<th class='center' style='border:7px solid purple;'> Attendance Percentage</th>
</tr>
</thead>
<tbody style='font-size: 15px; border:7px solid purple; background: #e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple; text-align: center;'>2<sup>nd</sup> semester</th>
	<th class='center'style='border:7px solid purple; text-align: center;'> 100% </th>	
	<th class='center' style='border:7px solid purple; text-align: center;'>";
	echo $per . '%';
	"</th>
</tr>
</tbody>
</table>";
	echo "<table class='table table-striped table-bordered' style='margin-top:6%;'>
<thead style='font-size: 15px; border:7px solid purple; background:#e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple;'>Semester</th>
	<th class='center'style='border:7px solid purple;'>Total Attendance </th>
	<th class='center' style='border:7px solid purple;'> Attendance Percentage</th>
</tr>
</thead>
<tbody style='font-size: 15px; border:7px solid purple; background: #e3baf7;'>
<tr>
	<th class='center' style='border:7px solid purple; text-align: center;'>3<sup>rd</sup> semester</th>
	<th class='center'style='border:7px solid purple; text-align: center;'> 100% </th>	
	<th class='center' style='border:7px solid purple; text-align: center;'>";
	echo $per . '%';
	echo "</th>
</tr>
</tbody>
</table>
		</div>
	</div><!-- /.main-container -->
	</div>

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src='assets/js/jquery-2.1.4.min.js'></script>

	<!-- <![endif]-->

	<!--[if IE]>
	<script src='assets/js/jquery-1.11.3.min.js'></script>
	<![endif]-->
	< <!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src='assets/js/ace-elements.min.js'></script>
		<script src='assets/js/ace.min.js'></script>

		<!-- inline scripts related to this page -->'";
}

	include('footer.php');

	?>
	<style>
	body{
		background-image: url(assets/images/main1.jpg);
	}
	</style>