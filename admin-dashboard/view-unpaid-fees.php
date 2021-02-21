<?php 
include('../config.php');
$obj = new Connectiondbp2;
include('header.php');

$result = mysqli_query($obj->connect(),"SELECT * FROM fees WHERE Status = 'unpaid'"); 
?>
<div class="container-fluid">
	<div class="col-4">
		<?php include('sidebar.php') ?>
	</div>
	<div class="col-8">
		<table class='table table-striped table-sm table-hover' style="margin-left: 350px; margin-top: 200px;">
			<thead>
				<tr class="text-center">
					<th scope='col'>Serial number</th>
					<th scope='col'>Student id</th>
					<th scope='col'>Name</th>
					<th scope='col'>Student Class</th>
					<th scope='col'>Due date</th>
					<th scope='col'>Amount remaining to be paid</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$count = 1;
					while($row=mysqli_fetch_array($result)){
						echo "<tr class='text-center'>
								<th scope='row'>".$count++."</th>
								<td>".$row[0]."</td>
								<td>".$row[1]."</td>
								<td>".$row[2]."</td>
								<td>".$row[7]."</td>
								<td>".$row[6]."</td>
							  </tr>";	 
					}


				 ?>
	</div>
</div>


<?php 
include('footer.php');

?>