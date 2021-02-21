<?php
include('header.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
/* / contact1-responsive */
/* /contact1 */
</style>
<body>
	<div class="content-div" style="padding-top: 150px">
    <!-- Inner Content Box ==== -->

	 <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg); ">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">CONTACT US</h1>
				 </div>
            </div>
        </div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Contact Us</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		
		
	 <!-- contact1 -->
	  <section class="contact-1">
		<div class="contacts-9 py-5">
		  <div class="container py-lg-4">
			<div class="headerhny-title text-center">
				
				<h1 class="hny-title mb-0">Leave a Message</h1>
				<p class="hny-title mb-lg-5 mb-4">If you have a question regarding our services, feel free to contact us using the form below.</p>
			</div>
			<div class="page-banner contact-page">
            <div class="container-fuild">
                <div class="" style="margin-left: 35%;">
					  <div class="col-lg-6 col-md-6 ">
						<img src="assets/images/gallery/contact.png" alt="">
					</div> </div></div>
				</div>
			<div class="contact-view mt-lg-5 mt-4">
			  <div class="conhny-form-section">
				<form action="php/contactcode.php" method="GET" class="formhny-sec">
						<div class="form-grids">
							<div class="form-input">
								<input type="text" name="Name" id="Name" placeholder="Enter your name *" required />
							</div>
							<div class="form-input">
								<input type="text" name="Subject" id="Subject" placeholder="Enter subject " required />
							</div>
							<div class="form-input">
								<input type="email" name="Sender" id="Sender" placeholder="Enter your email *"
									required />
							</div>
							<div class="form-input">
								<input type="text" name="Phone" id="Phone" placeholder="Enter your Phone Number *"
									required />
							</div>
						</div>
						<div class="form-input mt-4">
							<textarea name="Message" id="Message" placeholder="Type your query here"
								required=""></textarea>
						</div>
						<div class="submithny text-right mt-4">
							<button class="btn read-button" name="btn_sub">Submit Message</button>
						</div>
					</form>
			  </div>

			  <div class="d-grid contact-addres-inf mt-5 pt-lg-4">
				<div class="contact-info-left d-grid">
					<div class="contact-info">
						<div class="icon">
							<span class="fa fa-location-arrow" aria-hidden="true"></span>
						</div>
						<div class="contact-details">
							<h4>Address:</h4>
							<p>Lorem dolor sit, New York, USA</p>
						</div>
					</div>
					<div class="contact-info">
						<div class="icon">
							<span class="fa fa-phone" aria-hidden="true"></span>
						</div>
						<div class="contact-details">
							<h4>Phone:</h4>
							<p><a href="tel:+598-658-456">+598-658-346</a></p>
							<p><a href="tel:+598-658-457">+598-658-436</a></p>
						</div>
					</div>
					<div class="contact-info">
						<div class="icon">
							<span class="fa fa-envelope-open-o" aria-hidden="true"></span>
						</div>
						<div class="contact-details">
							<h4>Mail:</h4>
							<p><a href="mailto:mail@example.com" class="email">info@mangtaa.com</a></p>
							<p><a href="mailto:mail@example.com" class="email">mangtaa@support.com</a></p>
						</div>
					</div>
				</div>
			</div>
			</div>
		  </div>
		</div>
		<div class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!2sin" style="border:0" allowfullscreen=""></iframe>
		</div>
	  </section>
	  <!-- /contact1 -->

</body>
</html>
<?php 
include('footer.php');
?>