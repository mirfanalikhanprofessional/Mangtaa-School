<?php
session_start();
include('../config.php');
$obj = new Connectiondbp2;
include('top-header.php');

$result = mysqli_query($obj->connect(), "SELECT * FROM fees WHERE Status = 'unpaid'");
?>
<style>
	.d {
		background: yellow;
		width: 100%;
		height: 70px;
		padding: 2%;
		margin-left: 40%;
		margin-top: 70px;
		color: purple;
		text-align: center;
	}

	body {
		background-image: url(assets/images/maain.jpg);
	}
</style
<?php
if (isset($_SESSION['email_part']) || isset($_COOKIE['email'])) {
		echo " <div class='container-fluid'>
			<div class='col-4'>";
				include('sidebar.php'); 
			echo "</div>
			<div class='col-8'>
				<h1 class='d'><b><i>Fees unpaid by students</i></b></h1>
				<h4 style='margin-left: 350px;'>Choose a Class to see it's information</h4>
				<form action='' method='POST' class='text-center' style='margin-left: 350px;'>
					<select name='select' class='form-select form-select-sm' aria-label='Default select example' required>
						<option value='' selected> Choose a class to mark attenedence</option>";
						$query = mysqli_query($obj->connect(), 'SELECT * FROM classes');
						while ($row1 = mysqli_fetch_array($query)) {
							echo "<option value=".$row1[2].">".$row1[2]."</option>";
						}
					echo "</select>
					<input type='submit' name='btn_sub' class='btn mt-2'>
				</form>";
				if(isset($_POST['btn_sub'])){
					if (isset($_POST['select'])){
						$select = $_POST['select'];
						echo " <table class='table table-striped table-sm table-hover' style='margin-left: 350px; margin-top: 200px;'>
							<thead>
								<tr class='text-center'>
									<th scope='col'>Serial number</th>
									<th scope='col'>Student id</th>
									<th scope='col'>Name</th>
									<th scope='col'>Student Class</th>
									<th scope='col'>Due date</th>
									<th scope='col'>Amount remaining to be paid</th>
								</tr>
							</thead>
							<tbody>";
								$count = 1;
							while ($row = mysqli_fetch_array($result)) {
								echo "<tr class='text-center'>
											<th scope='row '>" . $count++ . "</th>
											<td>" . $row[0] . "</td>
											<td>" . $row[1] . "</td>
											<td> " . $row[2] . "</td>
											<td>" . $row[7] . "</td>
											<td>" . $row[6] . "</td>
										</tr>";
							}
							echo "</div>
								</div>";
					}
				}
		
		}




include('footer.php');
?>