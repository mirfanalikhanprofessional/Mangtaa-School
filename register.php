<?php 
session_start();
require 'vendor/autoload.php';
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
 ?>
<!DOCTYPE html >
<html lang="en">

<head>

	<!-- META ============================================= -->
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
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title> </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body id="bg" style="">
	
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
			<a href="index.html"><img src="" alt="">logo</a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Register Now <span></span></h2>
					<p>Login Your Account <a href="login.php">Click here</a></p>
				</div>	
				<form class="contact-bx" action="" method="POST">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your First Name</label>
									<input name="firstname" type="text" required="" class="form-control" pattern="[a-z A-Z]{3,16}">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Last Name</label>
									<input name="lastname" type="text" required="" class="form-control" pattern="[a-z A-Z]{3,16}">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email Address</label>
									<input name="email" type="email" required="" class="form-control" pattern="[a-z 0-9]{7,30}@[a-z]{3,5}[.][a-z]{2,4}" title="Enter Like example@gmail.com">
								</div>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Your Contact Number in the format 0332-7829691</label>
									<input name="number" type="text" class="form-control" required="" pattern="[0-9]{4}[-][0-9]{8}">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Password</label>
									<input name="password" type="text" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Submit form</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>
<?php 

// if (isset($_POST['submit']))
// {
// $firstname=$_POST['firstname'];
// $lastname=$_POST['lastname'];
// $email=$_POST['email'];
// $password=$_POST['password'];
// $number=$_POST['number'];
// $code=rand(1000,10000);

// session_start();
// $_SESSION['pcode']=$code;
// $_SESSION['firstname']=$firstname;
// $_SESSION['lastname']=$lastname;
// $_SESSION['email']=$email;
// $_SESSION['password']=$password;
// $_SESSION['number']=$number;


// $transport = (new Swift_SmtpTransport('smtp.gmail.com',465,'ssl'))
//   ->setUsername('mangtaa.school@gmail.com')
//   ->setPassword('mangtaa.school123@')
// ;

// // Create the Mailer using your created Transport
// $mailer = new Swift_Mailer($transport);

// // Create a message
// $message = (new Swift_Message('verification code'))
//   ->setFrom(['mangtaa.school@gmail.com' => 'admin'])
//   ->setTo($email)
//   ->setBody('Use this verification code is'.$code)
//   ;

// // Send the message
// $result = $mailer->send($message);
// header("location:indexcode.php?msg=success");

// }


// Create the Transport

/*$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];
$code=rand(1000,10000);
// session_start();
// $_SESSION['code']=$code;
// $_SESSION['firstname']=$firstname;
// $_SESSION['lastname']=$lastname;
// $_SESSION['email']=$email;
// $_SESSION['password']=$password;
// $_SESSION['number']=$number;
//Use the REST API Client to make requests to the Twilio REST API
// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC98bef79a57cf4c62029f4eef29486099';
$token = '3683ce6b16bccfc6fb69c96d2b9e31c4';
$client = new Client($sid, $token);
// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $number,
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+13607955049',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'.$code
    ]
);
header("location:registercode.php");*/
if(isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$number=$_POST['number'];
	$code=rand(1000,10000);
	
	$_SESSION['fcode']=$code;
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	$_SESSION['email']=$email;
	$_SESSION['password']=$password;
	$_SESSION['number']=$number;

	$transport = (new Swift_SmtpTransport('smtp.gmail.com',465,'ssl'))
	  ->setUsername('mangtaa.school@gmail.com')
	  ->setPassword('mangtaa.school123@')
	;
	// Create the Mailer using your created Transport
	$mailer = new Swift_Mailer($transport);
	// Create a message
	$message = (new Swift_Message('verification code'))
	  ->setFrom(['mangtaa.school@gmail.com' => 'admin'])
	  ->setTo($email)
	  ->setBody('Use this verification code is'.$code)
	  ;
	// Send the message
	$result = $mailer->send($message);

/*$sid = 'AC98bef79a57cf4c62029f4eef29486099';
$token = '3683ce6b16bccfc6fb69c96d2b9e31c4';
$client = new Client($sid, $token);
// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $number,
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+13607955049',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'.$code
    ]

);
*/
 	

}

// Required if your environment does not handle autoloading

echo "<script>window.open('registercode.php')</script>";
// Use the REST API Client to make requests to the Twilio REST API



?>
