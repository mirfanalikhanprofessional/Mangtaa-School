<?php
session_start();
include('../config.php');
if (isset($_COOKIE['email']) == '' && isset($_SESSION['email_part']) == '') {
	setcookie("email", $email, time() + 0, "/");
	header("Location: ../index.php");
}
include('top-header.php');
$obj = new selectionp2;
?>
<style>
	body {
		background-image: url(assets/images/main1.jpg);
	}
</style>
<?php
if (isset($_SESSION['email_part'])) {
	echo "<div class='containter-fuild' style='margin-top: 3%;'>
		<div class='col-xl-4'>";
	include('sidebar.php');
	echo "</div>  
		<div class='col-xl-8' style='margin-left: 350px;'> 
		<div class='col-8' style='margin-left: 110px; margin-top:100px;'>
		<div class='col-xl-12' >
		<!-- PAGE CONTENT BEGINS -->
		<div class='space-6'></div>
			<form action='' method='POST' class='text-center'>
					<select name='select' style='margin-left: 20px;' required>
						<option value=' selected>Select student</option>";
	$query = $obj->select("SELECT * FROM student");
	while ($row = mysqli_fetch_array($query)) {
		echo "<option value='" . $row[1] . "'>" . $row[1] . "</option>";
	}
	echo "</select>
									<input type='submit' class='btn' value='Go' name='btn_sub' style='margin-top: 10px;'>
								</form>";
	if (isset($_POST['btn_sub'])) {
		if (isset($_POST['select'])) {
			$select = $_POST['select'];
			$result = $obj->select("SELECT * FROM student WHERE Student_name = '$select'");
			$find_name = mysqli_fetch_array($result);
			$name = $find_name[1];
			$id = $find_name[0];
			$class = $find_name[2];
			echo "<div class='row receipt' id='receipt' style='padding-top: 100px; width: 1000px; margin: auto;'>
							<div class='col-sm-10 col-sm-offset-1'>
							<div class='widget-box transparent'>
							<div class='widget-header widget-header-large'>
							<h2 class='widget-title grey lighter' style='text-align: center; padding-top: 50px;'>
							<i class='ace-icon fa fa-leaf green' style='font-size: 24px;'></i>
							Student Receipt
							</h2>
							<div class='widget-toolbar no-border invoice-info' style='font-size: 14px; padding-left: 20px;'>
							<span class='invoice-info-label'>Month:</span>
							<span class='red'>";
			echo date('F');
			echo "</span>
							<br />
							<span class='invoice-info-label'>Date:</span>
							<span class='blue'>";
			echo date('d-m-y');
			echo "</span>
							</div>
							<div class='widget-toolbar hidden-500'>
							<a href='#'>
							<i class='ace-icon fa fa-print' style=' padding-left: 20px;'></i>
							</a>
							</div>
							</div>

							<div class='widget-body'>
							<div class='widget-main padding-34'>
							<div class='row'>
							<div class='col-lg-6'>
							<div class='row'>
							<div class='col-xs-11 label label-lg label-info arrowed-in arrowed-right' style='font-size: 16px;  padding-left: 30px;'>
							<b>School Detail</b>
							</div>
							</div>

							<div>
							<ul class='list-unstyled spaced'>
							<li>
								<i class='ace-icon fa fa-caret-right blue' style=' padding-left: 20px;'></i>EMAIL :<i>Mangtaa.schoo@gmail.com</i>
							</li>

							<li>
								<i class='ace-icon fa fa-caret-right blue' style=' padding-left: 20px;'></i>CONTACT:<i>+13607955049</i>
							</li>
							</ul>
							</div>
							</div>
							<div style='margin-top: -8%; padding-left: 110px;'>
							<ul class='list-unstyled  spaced'>
							<li>
								<i class='ace-icon fa fa-caret-right green'></i>";
			echo ucfirst(($name));
			echo "</li>

							<li>
								<i class='ace-icon fa fa-caret-right green'></i>";
			echo $id;
			echo "</li>
							<li>
								<i class='ace-icon fa fa-caret-right green'></i>";
			echo $class;
			echo "</li>
							</ul>
							</div>
							</div>
							</div>
							<div class='space'></div>
							<div>
							<table class='table table-striped table-bordered'>
							<thead style='font-size: 13px;'>
							<tr>
							<th class='center'>S.No</th>
							<th>  </th>
							<th class='hidden-480'>Amount</th>
							</tr>
							</thead>
							<tbody style='font-size: 13px;'>
							<tr>
							<td class='center'>1</td>
							<td class='hidden-500'> Registration fees </td>
							<td class='hidden-500'></td>
							</tr>
							<tr>
							<td class='center'>2</td>
							<td class='hidden-500'> Tuition Fees</td>
							<td class='hidden-500'>5000</td>
							</tr>
							<tr>
							<td class='center'>3</td>
							<td class='hidden-500'> Discount</td>
							<td class='hidden-500'></td>
							</tr>
							<tr>
							<td class='center'>4</td>
							<td class='hidden-500'>Certification Fees</td>
							<td class='hidden-500'></td>
							</tr>
							<tr>
							<td class='center'>5</td>
							<td class='hidden-500'> Other (Admission Recovery)</td>
							<td class='hidden-500'></td>
							</tr>
							<tr>
							<td class='center'>6</td>
							<td class='hidden-500'> TOTAL</td>
							<td class='hidden-500'>5000</td>
							</tr>
							<tr>
							<td class='center'>7</td>
							<td class='hidden-500'> Late Fee</td>
							<td class='hidden-500'>200</td>
							</tr>
							<tr>
							<td class='center'>8</td>
							<td class='hidden-500'>After Due Date</td>
							<td class='hidden-500'>5200</td>
							</tr>
							</tbody>
							</table>
							</div>
							<div class='hr hr8 hr-double hr-dotted'></div>
							<div class='row'>
							<div class='col-sm-5 pull-right'>
							<h6 class='pull-right' style='padding-left: 20px;'>
							<span class='red'>Note:</span> Deposite the amount using only this.
							<ul>
							<li> Chalan at Mangtaa Reception.</li>
							<li> Fee is NON-Refundable & NON-Transferable</li>
							<li> Late Fee will apply after Due Date</li>
							</ul> 
							</h6>
							</div>
							<div class='col-sm-7 pull-left'> </div>
							</div>
							<div class='space-6'></div>
							<div class='well'>
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>

							<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							</div><!-- /.row -->
							</div><!-- /.page-content -->
							</div>
							</div><!-- /.main-content -->



							</div><!-- /.main-container -->
							<button onclick='generatePDF()' class='btn btn-hover' style='margin-left: 750px; margin-top: 10px;'>Download</button>
					<!-- basic scripts -->

					<!--[if !IE]> -->
					<script src='assets/js/jquery-2.1.4.min.js'></script>

					<!-- <![endif]-->
					<!--[if IE]>
					<script src='assets/js/jquery-1.11.3.min.js'></script>
					<![endif]-->
					<script src='assets/js/bootstrap.min.js'></script>
					<!-- page specific plugin scripts -->
					<!-- ace scripts -->
					<script src='assets/js/ace-elements.min.js'></script>
					<script src='assets/js/ace.min.js'></script>
					<!-- inline scripts related to this page -->";
		}
	}
} else if (isset($_COOKIE['email'])) {
	echo "<div class='containter-fuild' style='margin-top: 3%;'>
		<div class='col-xl-4'>";
	include('sidebar.php');
	echo "</div>  
		<div class='col-xl-8' style='margin-left: 350px;'> 
		<div class='col-8' style='margin-left: 110px; margin-top:100px;'>
		<div class='col-xl-12' >
		<!-- PAGE CONTENT BEGINS -->
		<div class='space-6'></div>
			<form action='' method='POST' class='text-center'>
					<select name='select' style='margin-left: 20px;' required>
						<option value=' selected>Select student</option>";
	$query = $obj->select("SELECT * FROM student");
	while ($row = mysqli_fetch_array($query)) {
		echo "<option value='" . $row[1] . "'>" . $row[1] . "</option>";
	}
	echo "</select>
									<input type='submit' class='btn' value='Go' name='btn_sub' style='margin-top: 10px;'>
								</form>";
	if (isset($_POST['btn_sub'])) {
		if (isset($_POST['select'])) {
			$select = $_POST['select'];
			$result = $obj->select("SELECT * FROM student WHERE Student_name = '$select'");
			$find_name = mysqli_fetch_array($result);
			$name = $find_name[1];
			$id = $find_name[0];
			$class = $find_name[2];
			echo "<div class='row receipt' style='padding-top: 100px; width: 1000px; margin: auto;'>
							<div class='col-sm-10 col-sm-offset-1'>
							<div class='widget-box transparent'>
							<div class='widget-header widget-header-large'>
							<h2 class='widget-title grey lighter' style='text-align: center; padding-top: 50px;'>
							<i class='ace-icon fa fa-leaf green' style='font-size: 24px;'></i>
							Student Receipt
							</h2>
							<div class='widget-toolbar no-border invoice-info' style='font-size: 14px; padding-left: 18px;'>
							<span class='invoice-info-label'>Month:</span>
							<span class='red'>";
			echo date('F');
			echo "</span>
							<br />
							<span class='invoice-info-label'>Date:</span>
							<span class='blue'>";
			echo date('d-m-y');
			echo "</span>
							</div>
							<div class='widget-toolbar hidden-500'>
							<a href='#'>
							<i class='ace-icon fa fa-print' style=' padding-left: 20px;'></i>
							</a>
							</div>
							</div>

							<div class='widget-body'>
							<div class='widget-main padding-34'>
							<div class='row'>
							<div class='col-lg-6'>
							<div class='row'>
							<div class='col-xs-11 label label-lg label-info arrowed-in arrowed-right' style='font-size: 16px;  padding-left: 30px;'>
							<b>School Detail</b>
							</div>
							</div>

							<div>
							<ul class='list-unstyled spaced'>
							<li>
								<i class='ace-icon fa fa-caret-right blue' style=' padding-left: 20px;'></i>EMAIL :<i>Mangtaa.schoo@gmail.com</i>
							</li>

							<li>
								<i class='ace-icon fa fa-caret-right blue' style=' padding-left: 20px;'></i>CONTACT:<i>+13607955049</i>
							</li>
							</ul>
							</div>
							</div>
							<div style='margin-top: -8%; padding-left: 110px;'>
							<ul class='list-unstyled  spaced'>
							<li>
								<i class='ace-icon fa fa-caret-right green'></i>";
			echo ucfirst(($name));
			echo "</li>

							<li>
								<i class='ace-icon fa fa-caret-right green'></i>";
			echo $id;
			echo "</li>
							<li>
								<i class='ace-icon fa fa-caret-right green'></i>";
			echo $class;
			echo "</li>
							</ul>
							</div>
							</div>
							</div>
							<div class='space'></div>
							<div>
							<table class='table table-striped table-bordered'>
							<thead style='font-size: 13px;'>
							<tr>
							<th class='center'>S.No</th>
							<th>  </th>
							<th class='hidden-480'>Amount</th>
							</tr>
							</thead>
							<tbody style='font-size: 13px;'>
							<tr>
							<td class='center'>1</td>
							<td class='hidden-500'> Registration fees </td>
							<td class='hidden-500'></td>
							</tr>
							<tr>
							<td class='center'>2</td>
							<td class='hidden-500'> Tuition Fees</td>
							<td class='hidden-500'>5000</td>
							</tr>
							<tr>
							<td class='center'>3</td>
							<td class='hidden-500'> Discount</td>
							<td class='hidden-500'></td>
							</tr>
							<tr>
							<td class='center'>4</td>
							<td class='hidden-500'>Certification Fees</td>
							<td class='hidden-500'></td>
							</tr>
							<tr>
							<td class='center'>5</td>
							<td class='hidden-500'> Other (Admission Recovery)</td>
							<td class='hidden-500'></td>
							</tr>
							<tr>
							<td class='center'>6</td>
							<td class='hidden-500'> TOTAL</td>
							<td class='hidden-500'>5000</td>
							</tr>
							<tr>
							<td class='center'>7</td>
							<td class='hidden-500'> Late Fee</td>
							<td class='hidden-500'>200</td>
							</tr>
							<tr>
							<td class='center'>8</td>
							<td class='hidden-500'>After Due Date</td>
							<td class='hidden-500'>5200</td>
							</tr>
							</tbody>
							</table>
							</div>
							<div class='hr hr8 hr-double hr-dotted'></div>
							<div class='row'>
							<div class='col-sm-5 pull-right'>
							<h6 class='pull-right' style='padding-left: 20px;'>
							<span class='red'>Note:</span> Deposite the amount using only this.
							<ul>
							<li> Chalan at Mangtaa Reception.</li>
							<li> Fee is NON-Refundable & NON-Transferable</li>
							<li> Late Fee will apply after Due Date</li>
							</ul> 
							</h6>
							</div>
							<div class='col-sm-7 pull-left'> </div>
							</div>
							<div class='space-6'></div>
							<div class='well'>
							</div>
							</div>
							</div>
							</div>
							</div>
							</div>

							<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							</div><!-- /.row -->
							</div><!-- /.page-content -->
							</div>
							</div><!-- /.main-content -->



							</div><!-- /.main-container -->

					<!-- basic scripts -->
					<button onclick='generatePDF()' class='btn btn-hover' style='margin-left: 750px; margin-top: 10px;'>Download</button>						
					<!--[if !IE]> -->
					<script src='assets/js/jquery-2.1.4.min.js'></script>

					<!-- <![endif]-->
					<!--[if IE]>
					<script src='assets/js/jquery-1.11.3.min.js'></script>
					<![endif]-->
					<script src='assets/js/bootstrap.min.js'></script>
					<!-- page specific plugin scripts -->
					<!-- ace scripts -->
					<script src='assets/js/ace-elements.min.js'></script>
					<script src='assets/js/ace.min.js'></script>
					<script src='https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js'></script>
					<!-- inline scripts related to this page -->";
		}
	}
}
echo '<script>
	function generatePDF() {
		// Choose the element that our invoice is rendered in.
		const element = document.getElementById("receipt");
		// Choose the element and save the PDF for our user.
		html2pdf(document.receipt, {
				html2canvas: {scale: 4}
			})
			.from(element)
			.save();
	}
</script>';
include('footer.php');
?>
