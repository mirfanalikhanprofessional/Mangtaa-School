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
		<?php
		include("sidebar.php");
		?>
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
		</form>
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
					if (isset($select)) {
						$query =  mysqli_query($obj->connect(), "SELECT * FROM student WHERE/*  Rol */ Student_class = '$select'");
						while ($row = mysqli_fetch_array($query)) {
							$count = 1;
							echo "<tr>
										<td>" . $count++ . "</td>
										<td>$row[1]</td>
										<td><a class='btn' href='present.php?id=$row[0]' style='background-color:#f6c2ff;'>Present</a>
											<a class='btn' href='absent.php?id=$row[0]' style='background-color:#f6c2ff;'>Absent</a>
											<a class='btn' href='leave.php?id=$row[0]' style='background-color:#f6c2ff;'>Leave</a>
										</td>
									</tr><br>";
						}
						echo "</tbody></table></div></div></body></html>";
					}
				}
				?>