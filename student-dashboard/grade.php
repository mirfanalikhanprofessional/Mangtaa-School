<?php 
include('../config.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>  </title>
</head>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar" style="background-image: url(assets/images/main1.jpg);">
	<?php include('header.php'); ?>
<div class="col-xl-4" > <?php include('sidebar.php')?> </div> 
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">	
			<div class="" style="margin-top: 10%;"></div>


<div style="background:#f5fffe; width: 100%;">


			<div class="topic" style=" padding-bottom:3%; padding-top: 10%;">
				<h1 style="text-align: center; font-size: 50px;"> <I> <U> 1st Term Examination GRADES</U></I></h1>			<!-- Card -->
			<div class="row" >
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12" >
					<div class="widget-card widget-bg1"style="background:#04c7a6 ">					 
						<div class="wc-item"style="font-color: black;">
							<h4 class="wc-title">
								Science
							</h4>
							<span class="wc-des">
								scicence 7 
							</span>
							<span class="wc-stats">
								<span class="counter"><?php ($_SESSION['sci']) ?></span>/100
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									78%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg2"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								 Computer
							</h4>
							<span class="wc-des">
								 Computer 7
							</span>
							<span class="wc-stats">
								<span class="counter"><?php ($_SESSION['com']) ?></span>/100
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									88%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg3"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
							   Mathematics
							</h4>
							<span class="wc-des">
								 Mathematics 7 
							</span>
							 <span class="wc-stats">
								<span class="counter"><?php ($_SESSION['math']) ?></span>/100
							</span>			
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									92%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Urdu
							</h4>
							<span class="wc-des">
								Urdu 7
							</span>
							<span class="wc-stats">
								<span class="counter"><?php ($_SESSION['urdu']) ?></span>/100
							</span>			
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									68%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Sindhi
							</h4>
							<span class="wc-des">
								Sindhi 7
							</span>
							<span class="wc-stats">
								<span class="counter"><?php ($_SESSION['sin']) ?></span>/100
							</span>			
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									88%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Social studies
							</h4>
							<span class="wc-des">
								Social studies 7
							</span>
								<span class="wc-stats">
								<span class="counter"><?php ($_SESSION['s_st']) ?></span>/100
							</span>	
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									92%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4" style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Drawing / ART
							</h4>
							<span class="wc-des">
								Drawing / ART 7
							</span>
							<span class="wc-stats counter">
								<span class="counter"><?php ($_SESSION['art']) ?></span>
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									98%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4 " style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								English
							</h4>
							<span class="wc-des">
								English 7
							</span>
							<span class="wc-stats counter">
							<span class="counter"><?php ($_SESSION['eng']) ?></span>/100
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									90%
								</span>
							</span>
						</div>				      
					</div>
				</div>
			</div>


</div>
</div>
</div>

<!-- Card END -->
<div class="" style="margin-top: 20%;"></div>
<div style="background:#f5fffe; width: 100%;">
<div class="topic" style=" padding-bottom:5%; padding-top: 10%;">
<h1 style="text-align: center; font-size: 50px;"> <I> <U> 2nd Term Examination GRADES</U></I></h1>		<!-- Card -->
			<div class="row" >
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12" >
					<div class="widget-card widget-bg1"style="background:#04c7a6; ">					 
						<div class="wc-item"style="font-color: black;">
							<h4 class="wc-title">
								Science
							</h4>
							<span class="wc-des">
								scicence 7 
							</span>
							<span class="wc-stats">
								<span class="counter"><?php ($_SESSION['sci']) ?></span>/100
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									78%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg2"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								 Computer
							</h4>
							<span class="wc-des">
								 Computer 7
							</span>
							<span class="wc-stats">
								<span class="counter"><?php ($_SESSION['com']) ?></span>/100
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									88%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg3"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
							   Mathematics
							</h4>
							<span class="wc-des">
								 Mathematics 7 
							</span>
							 <span class="wc-stats">
								<span class="counter"><?php ($_SESSION['math']) ?></span>/100
							</span>			
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									92%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Urdu
							</h4>
							<span class="wc-des">
								Urdu 7
							</span>
							<span class="wc-stats">
								<span class="counter"><?php ($_SESSION['urdu']) ?></span>/100
							</span>			
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									68%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Sindhi
							</h4>
							<span class="wc-des">
								Sindhi 7
							</span>
							<span class="wc-stats">
								<span class="counter"><?php ($_SESSION['sin']) ?></span>/100
							</span>			
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									88%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Social studies
							</h4>
							<span class="wc-des">
								Social studies 7
							</span>
								<span class="wc-stats">
								<span class="counter"><?php ($_SESSION['s_st']) ?></span>/100
							</span>	
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									92%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4" style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Drawing / ART
							</h4>
							<span class="wc-des">
								Drawing / ART 7
							</span>
							<span class="wc-stats counter">
								<span class="counter"><?php ($_SESSION['art']) ?></span>
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									98%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4 " style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								English
							</h4>
							<span class="wc-des">
								English 7
							</span>
							<span class="wc-stats counter">
							<span class="counter"><?php ($_SESSION['eng']) ?></span>/100
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									90%
								</span>
							</span>
						</div>				      
					</div>
				</div>
			</div>


</div>
</div>

<div class="" style="margin-top: 20%;"></div>


<div style="background:#f5fffe; width: 100%;">


			<div class="topic" style=" padding-bottom:5%; padding-top: 10%;">
				<h1 style="text-align: center; font-size: 50px;"> <I> <U> 3rd Term Examination GRADES</U></I></h1>
			<!-- Card -->
			<div class="row" >
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12" >
					<div class="widget-card widget-bg1"style="background:#04c7a6 ">					 
						<div class="wc-item"style="font-color: black;">
							<h4 class="wc-title">
								Science
							</h4>
							<span class="wc-des">
								scicence 7 
							</span>
							<span class="wc-stats">
								<span class="counter">xxx</span>/100
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									xxx
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg2"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								 Computer
							</h4>
							<span class="wc-des">
								 Computer 7
							</span>
							<span class="wc-stats">
								<span class="counter">xxx</span>/100
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									xxx
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg3"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
							   Mathematics
							</h4>
							<span class="wc-des">
								 Mathematics 7 
							</span>
							 <span class="wc-stats">
								<span class="counter">xxx</span>/100
							</span>			
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									xxx
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Urdu
							</h4>
							<span class="wc-des">
								Urdu 7
							</span>
							<span class="wc-stats">
								<span class="counter">xxx</span>/100
							</span>			
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									xxx
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Sindhi
							</h4>
							<span class="wc-des">
								Sindhi 7
							</span>
							<span class="wc-stats">
								<span class="counter">xxx</span>/100
							</span>			
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									xxx
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4"style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Social studies
							</h4>
							<span class="wc-des">
								Social studies 7
							</span>
								<span class="wc-stats">
								<span class="counter">xxx</span>/100
							</span>	
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									xxx
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4" style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Drawing / ART
							</h4>
							<span class="wc-des">
								Drawing / ART 7
							</span>
							<span class="wc-stats counter">
								xxx
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									xxx
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4 " style="background:#04c7a6">					 
						<div class="wc-item">
							<h4 class="wc-title">
								English
							</h4>
							<span class="wc-des">
								English 7
							</span>
							<span class="wc-stats counter">
								<span class="counter"> xxx </span>/100
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									xxx
								</span>
							</span>
						</div>				      
					</div>
				</div>
			</div>
		</div>
			<!-- Card END -->

</div>
</div>



			<div class="" style="margin-top: 20%;"></div>
			
</body>
</html>

<?php
class grade extends Connectiondbp2{
	function grades($name,$sci,$com,$math,$urdu,$sin,$s_st,$art,$eng)
	{
		
		$query="SELECT * FROM garde WHERE Studen"; /*WHERE Student_name='$name' OR scicence='$sci' OR Computer='$com'OR Mathematics='$math' OR urdu='$urdu' OR s_st='$s_st',OR art='$art' OR eng='$eng', ";*/
		$result = mysqli_query($this->connect(),$query);
		$count = mysqli_num_rows($result);
		session_start();
		$fetch = mysqli_fetch_array($result);
		$_SESSION['name']=$fetch[0];
		$_SESSION['sci']=$fetch[1];
		$_SESSION['com']=$fetch[7];
		$_SESSION['math']=$fetch[8];
		$_SESSION['urdu']=$fetch[3];
		$_SESSION['s_st']=$fetch[2];
		$_SESSION['art']=$fetch[4];
		$_SESSION['eng']=$fetch[6];
		$_SESSION['sin']=$fetch[5];

		$obj->grade($name,$sci,$com,$math,$urdu,$sin,$s_st,$art,$eng);
	} 
}

?>
<?php 
/*if (isset($_POST['grade'])) 
{
	$name= $_POST['name'];
	$scicence=$_POST['sci'];
	$Computer=$_POST['com'];
	$Mathematics=$_POST['math'];
	$urdu=$_POST['urdu'];
	$s_st=$_POST['s_st'];
	$art=$_POST['art'];
	$eng=$_POST['eng'];
	$sin=$_POST['sin'];


	
	$obj->grade($name,$sci,$com,$math,$urdu,$sin,$s_st,$art,$eng);
}*/
 ?>