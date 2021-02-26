<?php
session_start();
include('../config.php');
$obj = new Connectiondbp2;
include('top-header.php');

$name = $_SESSION['name'];
if (isset($_SESSION['email_part']) || isset($_COOKIE['email'])){
	$query = mysqli_query($obj->connect(), "select * from garde where Student_name = '$name'");
	$englishquery = mysqli_query($obj->connect(), "SELECT ((english)*100)DIV(100) As percent FROM garde WHERE Student_name= '$name'");
	$mathquery = mysqli_query($obj->connect(), "SELECT ((mathematics)*100)DIV(100) As percent FROM garde WHERE Student_name= '$name'");
	$socialstudiesquery = mysqli_query($obj->connect(), "SELECT ((social_studies)*100)DIV(100) As percent FROM garde WHERE Student_name= '$name'");
	$urduquery = mysqli_query($obj->connect(), "SELECT ((urdu)*100)DIV(100) As percent FROM garde WHERE Student_name= '$name'");
	$artquery = mysqli_query($obj->connect(), "SELECT ((art)*100)DIV(100) As percent FROM garde WHERE Student_name= '$name'");
	$sindhiquery = mysqli_query($obj->connect(), "SELECT ((sindhi)*100)DIV(100) As percent FROM garde WHERE Student_name= '$name'");
	$computerquery = mysqli_query($obj->connect(), "SELECT ((computer)*100)DIV(100) As percent FROM garde WHERE Student_name= '$name'");
	$sciencequery = mysqli_query($obj->connect(), "SELECT ((science)*100)DIV(100) As percent FROM garde WHERE Student_name= '$name'");
	while ($result = mysqli_fetch_array($query)) {
		$science = $result[2];
		$socialstudies = $result[3];
		$urdu = $result[4];
		$art = $result[5];
		$sindhi = $result[6];
		$english = $result[7];
		$computer = $result[8];
		$mathematics = $result[9];
	}
	while ($row1 = mysqli_fetch_array($englishquery)) {
		$englishpercent = $row1['percent'];
	}
	while ($row1 = mysqli_fetch_array($sciencequery)) {
		$sciencepercent = $row1['percent'];
	}
	while ($row1 = mysqli_fetch_array($socialstudiesquery)) {
		$socialstudiespercent = $row1['percent'];
	}
	while ($row1 = mysqli_fetch_array($urduquery)) {
		$urdupercent = $row1['percent'];
	}
	while ($row1 = mysqli_fetch_array($artquery)) {
		$artpercent = $row1['percent'];
	}
	while ($row1 = mysqli_fetch_array($sindhiquery)) {
		$sindhipercent = $row1['percent'];
	}
	while ($row1 = mysqli_fetch_array($computerquery)) {
		$computerpercent = $row1['percent'];
	}
	while ($row1 = mysqli_fetch_array($mathquery)) {
		$mathpercent = $row1['percent'];
	}
	echo " <body class='ttr-opened-sidebar ttr-pinned-sidebar' style='background-image: url(assets/images/main1.jpg);'>
	<div class='col-xl-4'>"; include('sidebar.php'); echo
	"</div>
	<!--Main container start -->
	<main class='ttr-wrapper'>
		<div class='container-fluid'>
			<div class='' style='margin-top: 10%;'></div>
			<div style='background:#f5fffe; width: 100%;'>
	
			<div class='topic' style=' padding-bottom:5%; padding-top: 10%;'>
				<h1 style='text-align: center; font-size: 50px;'> <I> <U> 1<sup>st</sup> Term Examination GRADES</U></I></h1>
				<!-- Card -->
				<div class='row'>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg1' style='background:#04c7a6 '>
							<div class='wc-item' style='font-color: black;'>
								<h4 class='wc-title'>
									Science
								</h4>
								<span class='wc-des'>
									scicence 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $science;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $sciencepercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $sciencepercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg2' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Computer
								</h4>
								<span class='wc-des'>
									Computer 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $computer;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $computerpercent."%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $computerpercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg3' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Mathematics
								</h4>
								<span class='wc-des'>
									Mathematics 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $mathematics;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $mathpercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $mathpercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Urdu
								</h4>
								<span class='wc-des'>
									Urdu 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $urdu;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $urdupercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $urdupercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Sindhi
								</h4>
								<span class='wc-des'>
									Sindhi 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $sindhi;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $sindhipercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $sindhipercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Social studies
								</h4>
								<span class='wc-des'>
									Social studies 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $socialstudies;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $socialstudiespercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $socialstudiespercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Drawing / ART
								</h4>
								<span class='wc-des'>
									Drawing / ART 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $art;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $artpercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $artpercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4 ' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									English
								</h4>
								<span class='wc-des'>
									English 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $english;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $englishpercent."%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $englishpercent."%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	</div>
	</div>
			<!-- Card END -->

		<div class='' style='margin-top: 20%;'></div>


		<div style='background:#f5fffe; width: 100%;'>

		<!-- Card END -->
		
			<div class='topic' style=' padding-bottom:5%; padding-top: 10%;'>
				<h1 style='text-align: center; font-size: 50px;'> <I> <U> 2<sup>nd</sup> Term Examination GRADES</U></I></h1>
				<!-- Card -->
				<div class='row'>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg1' style='background:#04c7a6 '>
							<div class='wc-item' style='font-color: black;'>
								<h4 class='wc-title'>
									Science
								</h4>
								<span class='wc-des'>
									scicence 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $science;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $sciencepercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $sciencepercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg2' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Computer
								</h4>
								<span class='wc-des'>
									Computer 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $computer;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $computerpercent."%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $computerpercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg3' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Mathematics
								</h4>
								<span class='wc-des'>
									Mathematics 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $mathematics;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $mathpercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $mathpercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Urdu
								</h4>
								<span class='wc-des'>
									Urdu 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $urdu;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $urdupercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $urdupercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Sindhi
								</h4>
								<span class='wc-des'>
									Sindhi 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $sindhi;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $sindhipercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $sindhipercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Social studies
								</h4>
								<span class='wc-des'>
									Social studies 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $socialstudies;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $socialstudiespercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $socialstudiespercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Drawing / ART
								</h4>
								<span class='wc-des'>
									Drawing / ART 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $art;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $artpercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $artpercent . "%";
	echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4 ' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									English
								</h4>
								<span class='wc-des'>
									English 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>";
	echo $english;
	echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: ";
	echo $englishpercent . "%";
	echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
	echo $englishpercent;
	echo "</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- Card END -->

		<div class='' style='margin-top: 20%;'></div>


		<div style='background:#f5fffe; width: 100%;'>


			<div class='topic' style=' padding-bottom:5%; padding-top: 10%;'>
				<h1 style='text-align: center; font-size: 50px;'> <I> <U> 3<sup>rd</sup> Term Examination GRADES</U></I></h1>
				<!-- Card -->
				<div class='row'>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg1' style='background:#04c7a6 '>
							<div class='wc-item' style='font-color: black;'>
								<h4 class='wc-title'>
									Science
								</h4>
								<span class='wc-des'>
									scicence 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>"; echo $science; echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: "; echo $sciencepercent."%"; echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
										echo $sciencepercent."%";
									echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg2' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Computer
								</h4>
								<span class='wc-des'>
									Computer 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>"; echo $computer; echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: "; echo $computerpercent."%"; echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
										echo $computerpercent."%";
									echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg3' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Mathematics
								</h4>
								<span class='wc-des'>
									Mathematics 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>"; echo $mathematics; echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: "; echo $mathpercent."%"; echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
										echo $mathpercent."%";
									echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Urdu
								</h4>
								<span class='wc-des'>
									Urdu 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>"; echo $urdu; echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: "; echo $urdupercent."%"; echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
										echo $urdupercent."%";
									echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Sindhi
								</h4>
								<span class='wc-des'>
									Sindhi 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>"; echo $sindhi; echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: "; echo $sindhipercent."%"; echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
										echo $sindhipercent."%";
									echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Social studies
								</h4>
								<span class='wc-des'>
									Social studies 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>"; echo $socialstudies; echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: "; echo $socialstudiespercent."%"; echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
										echo $socialstudiespercent."%";
									echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									Drawing / ART
								</h4>
								<span class='wc-des'>
									Drawing / ART 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>"; echo $art; echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: "; echo $artpercent."%"; echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
										echo $artpercent."%";
									echo "</span>
								</span>
							</div>
						</div>
					</div>
					<div class='col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12'>
						<div class='widget-card widget-bg4 ' style='background:#04c7a6'>
							<div class='wc-item'>
								<h4 class='wc-title'>
									English
								</h4>
								<span class='wc-des'>
									English 7
								</span>
								<span class='wc-stats'>
									<span class='counter'>"; echo $english; echo "</span>/100
								</span>
								<div class='progress wc-progress'>
									<div class='progress-bar' role='progressbar' style='width: "; echo $englishpercent."%"; echo ";' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
								</div>
								<span class='wc-progress-bx'>
									<span class='wc-change'>
										Change
									</span>
									<span class='wc-number ml-auto'>";
										echo $englishpercent."%";
									echo "</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Card END -->

		</div>
		</div>
		<div class='' style='margin-top: 20%;'></div>";		
}
		include('footer.php');