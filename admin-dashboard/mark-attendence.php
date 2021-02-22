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
			<?php include("sidebar.php"); ?>
		</div>
		<div class="col-8">
			<h6>Choose a Class to mark it's attendence</h6>
			<form action="" method="POST" class="text-center" style="margin-top: 50px;">
				<select name="select" class="form-select form-select-sm" aria-label="Default select example">
					<?php
					$query = mysqli_query($obj->connect(), "SELECT * FROM classes");
					while ($row = mysqli_fetch_array($query)) {
						echo "<option value'$row[2]'>$row[2]</option>";
					}
					?>
				</select>
				<input type="submit" name="btn_sub1" class="btn mt-2">
			</form>
			<?php
				if(isset($_POST['btn_sub1'])){
					$select = $_POST['select'];
					if (isset($select)){
					echo "<table class='table table-sm table-striped table-hover' style='margin-top: 100px; margin-left: 350px;'>
						<thead>
							<tr>
								<th scope='col'>S.no</th>
								<th scope='col'>Student Name</th>
								<th scope='col'>Mark Attendence</th>
							</tr>
						</thead>
						<tbody>";
						if (isset($_POST['btn_sub'])) {
							$query =  mysqli_query($obj->connect(), "SELECT * FROM student WHERE Role = 'registered' AND Student_class = '$select'");
							while ($row = mysqli_fetch_array($query)) {
								$count = 1;
								echo "<tr>
											<td>" . $count++ . "</td>
											<td>$row[1]</td>
											<td><a class='btn' href='present.php?id=$row[0]'>Present</a>
												<a class='btn' href='absent.php?id=$row[0]'>Absent</a>
												<a class='btn' href='leave.php?id=$row[0]'>Leave</a>
											</td>
										</tr>";
							}
						}
						echo "<			/tbody>
										</table>
									</div>
									<form action='' method='POST' style='margin-left: 350px;'>
										<input type='submit' name='btn_sub' class='btn btn-block' value='Show records'>
									</form>
								</div>
							</body>
							</html>";
			
						}
			}
?>
					

				