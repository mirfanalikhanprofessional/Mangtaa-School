<?php
session_start();
// include ('header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
	.contact-1 .conhny-form-section {
  margin: 0 auto;
  width: 70%;
  background: white;
}

.contact-1 .form-grids {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 25px;
}

.contact-1 .formhny-sec input,
.contact-1 .formhny-sec textarea {
  background: /*var(---primary)*/ #e8e8df;
  border: 1px solid /*var(---primary)*/ #e8e8df;
  font-size: 16px;
  padding: 12px 15px;
  width: 100%;
  border-radius: 6px;
  height: 55px;
  color: var(--theme-para);
  font-weight: 600;
  /* background: #f0f0a5;*/
}

.contact-1 .formhny-sec input:focus,
.contact-1 .formhny-sec textarea:focus {
  outline: none;
  border: 1px solid var(--sc-primary);
  box-shadow: none;
  background: var(--theme-bg);
}

.contact-1 .formhny-sec h5 {
  font-size: 25px;
  line-height: 30px;
  margin-bottom: 20px;
  color: var(--theme-title);
}

.contact-1 .formhny-sec textarea {
  resize: none;
  min-height: 140px;
}

.contact-1 .contact-info-left {
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 40px;
}

.contact-1 .contact-info {
  padding: 2em;
  background: #fff;
  border-radius: 6px;
  display: grid;
  grid-template-columns: auto 1fr;
  grid-gap: 20px;
  background: var(--theme-lite);
}

.contact-1 .icon {
  width: 60px;
  height: 60px;
  text-align: center;
  border-radius: 50%;
  line-height: 54px;
  border: 2px solid /*var(--theme-border) */black;
  background: /*var(--primary)*/ black;
}

.contact-1 .icon span.fa {
  font-size: 20px;
  color:/* var(--theme-rose)*/ yellow;
}

.contact-1 .contact-info h4 {
  font-size: 18px;
  color: var(--theme-title);
  margin: 0px 0 10px 0;
  font-weight: 700;
}

.contact-1 .contact-info p {
  color: var(--theme-para);
  font-size: 16px;
  transition: 0.3s ease-in;
  font-weight: 400;
}

.contact-1 .contact-info a {
  display: block;
  color: var(--theme-para);
  font-size: 16px;
  transition: 0.3s ease-in;
}

.contact-1 .contact a:hover {
  display: block;
  color: var(--theme-rose);
  text-decoration: underline;
  transition: 0.3s ease-in;
}

.contact-1 .contact-map iframe {
  width: 100%;
  height: 400px;
  display: block;
  background: var(--theme-lite);
  padding: 10px;
}

/* contact1-responsive */
@media(max-width: 992px) {
  .contact-1 .cont-details {
    order: 2;
  }
  .contact-1 .contact-info-left {
    grid-template-columns:1fr;
    grid-gap: 40px;
  }
  .contact-1 .conhny-form-section {
    margin: 0 auto;
    width: 100%;
  }

  .contact-1 .cont-details p,
  .contact-1 .cont-details p a {
    font-size: 16px;
  }

  .contact-1 .cont-details h5 {
    font-size: 32px;
    line-height: 35px;
  }

  .contact-1 .contact-view {
    grid-template-columns: 1fr;
  }

  .contact-1 .map-content-9 {
    margin-bottom: 40px;
  }

  .contact-1 .contact-map iframe {
    width: 100%;
    height: 300px;
  }
}
@media(max-width:667px) {
  .contact-1 .contact-info-left {
    grid-template-columns: 1fr;
    grid-gap:20px;
  }
}
@media(max-width: 480px) {
  .contact-1 button.btn.read-button {
    display: block;
    width: 100%;
  }
}
@media(max-width: 480px) {
  .contact-1 .form-grids {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 20px;
  }

  .contact-1 .contact-map iframe {
    width: 100%;
    height: 240px;
  }

  .contact-1 button.btn-contact {
    width: 100%;
  }
}
.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.contact-1 .contact-info-left {
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 40px;
}

.contact-1 .contact-info {
  padding: 2em;
  background: #fff;
  border-radius: 6px;
  display: grid;
  grid-template-columns: auto 1fr;
  grid-gap: 20px;
  background: /*var(--theme-lite) */#e8e8df;
}
.d-grid {
  display: grid;
}

.headerhny-title {
  margin-bottom: 30px;
}
 .py-lg-4 {
    padding-top: 1.5rem !important;
  }

h4,
 {
  margin: 0;
  padding: 0;
  font-family: 'Open Sans', sans-serif;
  font-weight: 600;
}
</style>
</head>
<body style="background-image: url(assets/main.jpg);">

									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="assets/images/avatars/profile-pic.jpg" />
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<i class="ace-icon fa fa-circle light-green"></i>
															&nbsp;
															<span class="white">Alex M. Doe</span>
														</a>

														<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
															<li class="dropdown-header"> Change Status </li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle green"></i>
&nbsp;
																	<span class="green">Available</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle red"></i>
&nbsp;
																	<span class="red">Busy</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle grey"></i>
&nbsp;
																	<span class="grey">Invisible</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>

											<div class="space-6"></div>

											<div class="profile-contact-info">
												<div class="profile-contact-links align-left">
													<a href="#" class="btn btn-link">
														<i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
														Add as a friend
													</a>

													<a href="#" class="btn btn-link">
														<i class="ace-icon fa fa-envelope bigger-120 pink"></i>
														Send a message
													</a>

													<a href="#" class="btn btn-link">
														<i class="ace-icon fa fa-globe bigger-125 blue"></i>
														www.alexdoe.com
													</a>
												</div>

												<div class="space-6"></div>

												<div class="profile-social-links align-center">
													<a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
														<i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
													</a>

													<a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
														<i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
													</a>

													<a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
														<i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
													</a>
												</div>
											</div>

			  </div>

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
							";					}		

		?>