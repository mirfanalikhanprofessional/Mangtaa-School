<?php
include('../config.php');
$obj =  new Connectiondbp2;
$count = 1;
if (isset($_COOKIE['email']) == '' && isset($_SESSION['email_part']) == '') {
	setcookie("email", $email, time() + 0, "/");
	header("Location: ../index.php");
}
$result = mysqli_query($obj->connect(), 'SELECT * FROM classes');
include('top-header.php');

?>
<style>
	.d {
		background: yellow;
		width: 100%;
		height: 70px;
		padding: 2%;
		color: purple;
		text-align: center;
	}
	body{
		background-image: url(assets/images/maain.jpg);
	}
</style>
<?php
if (isset($_SESSION['email_part'])){
 echo " <div class='container'>
	<div class='col-1'>"; include('sidebar.php'); echo "</div>
	<div class='col-11 table-responsive small' style='margin-left: 190px; margin-top: 100px;'>
		<h1 class='d'><b><i>Batch information</b></i></h1>
		<h4>Choose a Class to see it's information</h4>
		<form action='' method='POST' class='text-center'>
		<div class='form-group'>
			<select name='select' class='form-select form-select-sm' aria-label='Default select example' required>
				<option value='' selected> Choose a class to mark attenedence</option>";
				$query = mysqli_query($obj->connect(), 'SELECT * FROM classes');
				while ($row = mysqli_fetch_array($query)) {
					echo "<option value'$row[2]'>$row[2]</option>";
				}
		echo "</select>
		</div>
			<input type='submit' name='btn_sub' class='btn mt-2'>
		</form>
		<table class='table table-striped small table-sm table-hover mt-5'>
			<thead>
				<tr class='text-center'>
					<th scope='col' style='background-color: #f6c2ff'>Serial number</th>
					<th scope='col' style='background-color: #f6c2ff'>Student id</th>
					<th scope='col' style='background-color: #f6c2ff'>Name</th>
					<th scope='col' style='background-color: #f6c2ff'>Father name</th>
					<th scope='col' style='background-color: #f6c2ff'>Student class</th>
					<th scope='col' style='background-color: #f6c2ff'>Student email</th>
				</tr>
			</thead>
			<tbody>";
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
							<td> " . $row[3] . "</td>
						  </tr>";
						}
					}
				}
			echo "</tbody>
		</table>
	</div>
</div>
</body>

</html>";
}
if (isset($_COOKIE['email'])) {
	echo " <div class='container'>
	<div class='col-1'>";
	include('sidebar.php');
	echo "</div>
	<div class='col-11 table-responsive small' style='margin-left: 190px; margin-top: 100px;'>
		<h1 class='d'><b><i>Batch information</b></i></h1>
		<h4>Choose a Class to see it's information</h4>
		<form action='' method='POST' class='text-center'>
		<div class='form-group'>
			<select name='select' class='form-select form-select-sm' aria-label='Default select example' required>
				<option value='' selected> Choose a class to mark attenedence</option>";
	$query = mysqli_query($obj->connect(), 'SELECT * FROM classes');
	while ($row = mysqli_fetch_array($query)) {
		echo "<option value'$row[2]'>$row[2]</option>";
	}
	echo "</select>
		</div>
			<input type='submit' name='btn_sub' class='btn mt-2'>
		</form>
		<table class='table table-striped small table-sm table-hover mt-5'>
			<thead>
				<tr class='text-center'>
					<th scope='col' style='background-color: #f6c2ff'>Serial number</th>
					<th scope='col' style='background-color: #f6c2ff'>Student id</th>
					<th scope='col' style='background-color: #f6c2ff'>Name</th>
					<th scope='col' style='background-color: #f6c2ff'>Father name</th>
					<th scope='col' style='background-color: #f6c2ff'>Student class</th>
					<th scope='col' style='background-color: #f6c2ff'>Student email</th>
				</tr>
			</thead>
			<tbody>";
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
							<td> " . $row[3] . "</td>
						  </tr>";
			}
		}
	}
	echo "</tbody>
		</table>
	</div>
</div>
</body>

</html>";
}
include('footer.php');