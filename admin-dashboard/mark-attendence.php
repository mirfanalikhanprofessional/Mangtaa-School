<?php
include('../config.php');
$obj = new Connectiondbp2;
include("header.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Mark Attendence</title>
</head>

<body>
	<div class="container-fluid">
		<div class="col-4">
		<?php
			 include("sidebar.php");
		?>
		</div>
		<div class="col-8">
			<h6>Choose a Class to mark it's attendence</h6>
			<form action="" method="POST" class="text-center" style="margin-top: 50px;">
				<div class="form-group" style="margin-left: 300px;">
					<select name="select" class="form-control form-control-lg">
						<?php
						$query = mysqli_query($obj->connect(), "SELECT * FROM classes");
						while ($row = mysqli_fetch_array($query)) {
							echo "<option value'$row[2]'>$row[2]</option>";
						}
						?>
					</select>
				</div>
				<input type="submit" name="btn_sub" class="btn mt-2">
			</form>
			<table class='table table-sm table-striped table-hover' style='margin-top: 100px; margin-left: 320px;'>
				<thead>
					<tr>
						<th scope='col'>S.no</th>
						<th scope='col'>Student Name</th>
						<th scope='col'>Mark Attendence</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (isset($_POST['btn_sub'])) {
						$select = $_POST['select'];
						if (isset($select)) {
							$query =  mysqli_query($obj->connect(), "SELECT * FROM student WHERE/*  Rol */ Student_class = '$select'");
							while ($row = mysqli_fetch_array($query)) {
								$count = 1;
								echo "<tr>
										<td>" . $count++ . "</td>
										<td>$row[1]</td>
										<td><a class='btn' href='present.php?id=$row[0]'>Present</a>
											<a class='btn' href='absent.php?id=$row[0]'>Absent</a>
											<a class='btn' href='leave.php?id=$row[0]'>Leave</a>
										</td>
									</tr><br>";
							}
							echo "</tbody></table></div></div></body></html>";
						}
					}
					?>