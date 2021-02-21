<?php 
include('../config.php');
$obj =  new Connectiondbp2;
$count = 1;
$result = mysqli_query($obj->connect(),"SELECT * FROM student");
include('header.php');

?>
<div class="container">	
 	<div class="col-1"><?php include('sidebar.php'); ?></div>
 	<div class="col-11 table-responsive small" style="margin-left: 190px; margin-top: 100px;">
		<table class='table table-striped small table-sm table-hover mt-5'>
			<thead>
				<tr class="text-center">
					<th scope='col'>Serial number</th>
					<th scope='col'>Student id</th>
					<th scope='col'>Name</th>
					<th scope='col'>Father name</th>
					<th scope='col'>Student class</th>
					<th scope='col'>Student email</th>
					<th scope='col'>Student mobile</th>
					<th scope='col'>Student home contact</th>
					<th scope='col'>Student address</th>
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
					<td>".$row[10]."</td>
					<td>".$row[2]."</td>
					<td>".$row[3]."</td>
					<td>".$row[8]."</td>
					<td>".$row[12]."</td>
					<td>".$row[9]."</td>
				  </tr>";	 
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