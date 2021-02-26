<?php
session_start();
include('../config.php');
$obj = new selectionp2;

include('top-header.php');
$select = $obj->select("SELECT * FROM admin");
$row = mysqli_fetch_array($select);
$id = $row['Admin_id'];
$name = $row['Admin_name'];
$email = $row['Admin_email'];
$_SESSION['pass'] = $row['Admin_password'];
?>

<style type="text/css">
	.col-form-label {
		height: 30px;
		width: 100%;
		background-color: #f6c2ff;

	}

	.d {
		background: yellow;
		width: 100%;
		height: 70px;
		padding: 2%;

		color: purple;
		text-align: center;


	}
	body {
		background-image: url(assets/images/maain.jpg);
	}
</style>

<div class="container-fluid">
	<div class="col-4"> <?php include('sidebar.php'); ?></div>
	<div class="col-8" style="margin-left: 350px; margin-top: 100px;">
		<h2 class="d"><b><i>Edit your profile details</i></b></h2>
		<hr>
		<div class="col-12">
			<form class='edit-profile m-b30' method='POST' action='admin-profile-edit-code.php'>
				<div class='row'>
					<div class='form-group col-6' hidden="">
						<label class='col-form-label'><h4>Id</h4></label>
						<div>
							<input class='form-control' type='text' name='id' pattern='[0-9]{1,30}' value="<?php echo $id; ?>">
						</div>
					</div>
					<div class='form-group col-6'>
						<label class='col-form-label'><h4>Name</h4></label>
						<div>
							<input class='form-control' type='text' name='txtname' value="<?php echo $name; ?>">
						</div>
					</div>
					<div class='form-group col-6'>
						<label class='col-form-label'><h4>Email Address</h4></label>
						<div>
							<input class='form-control' type='text' placeholder='example@gmail.com' name='txtemail' pattern='[a-z._0-9]{7,30}@[a-z]{3,5}[.][a-z]{2,4}' value="<?php echo $email; ?>">
						</div>
					</div>
					<div class='form-group col-6'>
						<label class='col-form-label'><h4>Enter Previous password</h4></label>
						<div>
							<input class='form-control' type='text' placeholder='*******' name='txtoldpass' pattern='[A-Za-z 0-9]@+_-.%]{8,25}' value="">
						</div>
					</div>
					<div class='form-group col-6'>
						<label class='col-form-label'><h4>Enter new Password</h4></label>
						<div>
							<input class='form-control' type='text' placeholder='*******' name='txtnewpass' pattern='[A-Za-z 0-9]@+_-.%]{8,25}' value="">
						</div>
					</div>
					<div class='form-group col-6'>
						<label class='col-form-label'><h4>Confirm new Password</h4></label>
						<div>
							<input class='form-control' type='text' placeholder='*******' name='txtcnewpass' pattern='[A-Za-z 0-9]@+_-.%]{8,25}' value="">
						</div>
					</div>
				</div>
				<div class='form-group col-6'>
					<div>
						<input class='btn btn-lg' type='submit' name='btn_sub' value="Update profile details">
					</div>
				</div>
			</form>

		</div>

	</div>










	</body>

	</html>
	<?php
	include('footer.php');

	?>