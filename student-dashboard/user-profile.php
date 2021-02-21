<?php
session_start();
include ('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<div class="col-lg-12 col-md-12 col-sm-12 m-b30" style="padding-top:100px; "  >
							<div class="profile-bx text-center" style="width: 600px; margin: auto;"  >
								<div class="user-profile-thumb" >
									<img src="assets/images/profile/pic1.jpg" alt=""/>
								</div>

								<div class="profile-info" >
									<h4>	<?php
			include('config.php');
          $obj= new connect;
			$count=1;
			$query=$obj->select("select*from student where table_id='1'");
			while ( $row=mysqli_fetch_array($query)) {
							echo" $row[2]";}?></h4>
									
								</div>
								<div class="profile-social">
									<ul class="list-inline m-a0">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>



								

								<div class="profile-tabnav">
									<ul class="nav nav-tabs">
<!-- 
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#courses"><i class="ti-book"></i><?php echo ucfirst($_SESSION['email']) ?></a>
										</li>
 -->
										<?php
			$count=1;
			$query=$obj->select("select*from student where table_id='1'");
			while ( $row=mysqli_fetch_array($query)) {
							echo"
                             <li class='nav-item'>
											<a class='nav-link active' data-toggle='tab' href='#courses'><i class='ti-book'></i>$row[7]</a>
										</li>
							<li class='nav-item'><a  class='nav-link' data-toggle='tab'>$row[10]</a></li>
							</a>
							<li class='nav-item'><a  class='nav-link' data-toggle='tab'><i class='ti-pencil-alt'></i> $row[9] </a></li>
							<li class='nav-item'><a  class='nav-link' data-toggle='tab'>$row[3] </a></li>
							";					}			?>
										<!-- < class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#quiz-results"><i class="ti-bookmark-alt"></i>address </a>
										</> -->
										<!-- <li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#edit-profile"><i class="ti-pencil-alt"></i><?php echo ucfirst($_SESSION['number']) ?></a>
										</li> -->
										<!-- <li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#change-password"><i class="ti-lock"></i>courses</a>
										</li> -->
									</ul>
								</div>
							</div>
						</div>

						<!--Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="#"><img alt="" src="assets/images/logo.png" width="122" height="27"></a>
				<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="dashboard.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
		                	<span class="ttr-label">Dashborad</span>
		                </a>
		            </li>
					<li>
						<a href="mycourse.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label"> My Courses</span>
		                </a>
		            </li>
		            <li>
						<a href="admission.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label">Admission Form</span>
		                </a>
		            </li>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-email"></i></span>
		                	<span class="ttr-label">Mailbox</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
		                		<a href="mailbox.html" class="ttr-material-button"><span class="ttr-label">Mail Box</span></a>
		                	</li>
		                	<li>
		                		<a href="mailbox-compose.html" class="ttr-material-button"><span class="ttr-label">Compose</span></a>
		                	</li>
							<li>
		                		<a href="mailbox-read.html" class="ttr-material-button"><span class="ttr-label">Mail Read</span></a>
		                	</li>
		                </ul>
		            </li>
					<li>
						<a href="challan.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-calendar"></i></span>
		                	<span class="ttr-label">Fees</span>
		                	<span class=""><i class=""></i></span>
		                </a>
		            </li>
		                <li>

						<a href="student-attendence.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-calendar"></i></span>
		                	<span class="ttr-label">MY Attendence</span>
		                	<span class=""><i class=""></i></span>
		                </a>
		                <!-- <ul>
		                	<li>
		                		<a href="" class="ttr-material-button"><span class="ttr-label">Basic Calendar</span></a>
		                	</li>
		                	<li>
		                		<a href="list-view-calendar.html" class="ttr-material-button"><span class="ttr-label">List View</span></a>
		                	</li>
		                </ul> -->
		            </li>
					
					
					<li>
						<a href="user-profile.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-user"></i></span>
		                	<span class="ttr-label">My Profile</span>
		                	<span class=""><i class=""></i></span>
		                </a>
		               <!--  <ul>
		                	<li>
		                		<a href="user-profile.html" class="ttr-material-button"><span class="ttr-label">User Profile</span></a>
		                	</li>
		                	<li>
		                		<a href="teacher-profile.html" class="ttr-material-button"><span class="ttr-label">Teacher Profile</span></a>
		                	</li>
		                </ul> -->
		            </li>
		            <li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end
</body>
</html>
<?php 
include ('footer.php');
 ?>