<?php
include('../config.php');
$obj =  new Connectiondbp2;
$count = 1;
$result = mysqli_query($obj->connect(), "SELECT * FROM classes");
include('header.php');

?>
<div class="container">
	<div class="col-1"><?php include('sidebar.php'); ?></div>
	<div class="col-11 table-responsive small" style="margin-left: 190px; margin-top: 100px;">
		<h1>Batch information</h1>
		<h6>Choose a Class to see it's information</h6>
		<form action="" method="POST" class="text-center">
			<select name="select" class="form-select form-select-sm" aria-label="Default select example">
				<option> Choose a class to mark attenedence</option>
				<?php
				$query = mysqli_query($obj->connect(), "SELECT * FROM classes");
				while ($row = mysqli_fetch_array($query)) {
					echo "<option value'$row[2]'>$row[2]</option>";
				}
				?>
			</select>
			<input type="submit" name="btn_sub" class="btn mt-2">
		</form>
		<table class='table table-striped small table-sm table-hover mt-5'>
			<thead>
				<tr class="text-center">
					<th scope='col'>Serial number</th>
					<th scope='col'>Student id</th>
					<th scope='col'>Name</th>
					<th scope='col'>Father name</th>
					<th scope='col'>Student class</th>
					<th scope='col'>Student email</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if (isset($_POST['btn_sub'])) {
					$select = $_POST['select'];
					if (isset($select)) {
						$result = mysqli_query($obj->connect(), "SELECT * FROM student WHERE Student_class = '$select'");
						$count = 1;
						while ($row = mysqli_fetch_array($result)) {
							echo "<tr class='text-center'>
							<th scope='row'>" . $count++ . "</th>
							<td>" . $row[0] . "</td>
							<td>" . $row[1] . "</td>
							<td>" . $row[10] . "</td>
							<td>" . $row[2] . "</td>
							<td>" . $row[3] . "</td>
						  </tr>";
						}
					}
				}



				?>
			</tbody>
		</table>
	</div>
</div>
</body>

</html>
<?php
include('footer.php');
?>