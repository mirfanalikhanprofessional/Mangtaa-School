<?php
include('../config.php');
$obj = new Connectiondbp2;
include("top-header.php");
?>
<style>
	.d {
		background: yellow;
		width: 100%;
		height: 70px;
		padding: 2%;
		margin-left: 350px;
		color: purple;
		text-align: center;
	}

	body {
		background-image: url(assets/images/maain.jpg);
	}
</style>

<div class="container-fluid">
	<div class="col-4">
		
/* 		include("sidebar.php"); */
		
	</div>
	<div class="col-8" style="margin-top: 100px;">
		<h1 class="d"><b><i>Choose a Class to mark it's attendence</i></b></h1>
		<form action="" method="POST" class="text-center" style="margin-top: 50px;">
			<div class="form-group" style="margin-left: 350px;">
				<select name="select" class="form-control form-control-lg text-center" required>
					<option value="" selected>Choose Class</option>
					<?php
					$query = mysqli_query($obj->connect(), "SELECT * FROM classes");
					while ($row = mysqli_fetch_array($query)) {
						echo "<option value'$row[2]'>$row[2]</option>";
					}
					?>
				</select>
			</div>
			<input type="submit" name="btn_sub" class="btn mt-2" style="width: 10%; height: 45px; margin-left: 40%; margin-top: -9%; background-color: #f6c2ff">
		</form><br>
		<table class='table table-sm table-striped table-hover' style='margin-left: 350px;'>
			<thead>
				<tr>
					<th scope='col' style="background-color: #f6c2ff;">S.no</th>
					<th scope='col' style="background-color: #f6c2ff;">Student Name</th>
					<th scope='col' style="background-color: #f6c2ff;">Mark Attendence</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if (isset($_POST['btn_sub'])) {
					$select = $_POST['select'];
					if (isset($_POST['select'])) {
						$query =  mysqli_query($obj->connect(),"SELECT * FROM student WHERE Student_class = '$select'");
						while ($row = mysqli_fetch_array($query)) {
								$student_names = $row[1]; 
								$timescheck = date('y-m-d');	
								$count = 1;
									echo "<tr>
											<td>".$count++. "</td>
											<td>".$row[1]."</td>";
											$check_query = mysqli_query($obj->connect(),"SELECT * FROM attendence WHERE Student_name = '$student_names' AND mark_date = '$timescheck'") or die('not wworking');
											while ($rowpart = mysqli_fetch_array($check_query)) {
												if (mysqli_num_rows($check_query) > 0) {
													if ($student_names == $rowpart['Student_name']  && $timescheck == $rowpart['mark_date']){
														echo "<td><a class='btn disabled' href='present.php?id=$row[0]' style='background-color:#f6c2ff;'>Present</a>
																<a class='btn disabled' href='absent.php?id=$row[0]' style='background-color:#f6c2ff;'>Absent</a>
																<a class='btn disabled' href='leave.php?id=$row[0]' style='background-color:#f6c2ff;'>Leave</a>
														</td>" or die('stop');
													}
													else{
														echo "<td><a class='btn' href='present.php?id=$row[0]' style='background-color:#f6c2ff;'>Present</a>
															<a class='btn' href='absent.php?id=$row[0]' style='background-color:#f6c2ff;'>Absent</a>
															<a class='btn' href='leave.php?id=$row[0]' style='background-color:#f6c2ff;'>Leave</a>
														</td>";
														
													}
												}
											}
									echo "</tr>";
						}	
								echo "</tbody></table></div></div></body></html>";
					}
				}
				?>