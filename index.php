<?php include("dbcon.php");
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MEDIK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

<style>

     .drop{
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  padding-top: 10px;
  text-decoration: none;
  background-color:;
}

 

li.dropdown {
	position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {

  color: black;
  padding: 10px 14px;
  text-decoration:none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: skyblue;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">MEDIK</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#department-section" class="nav-link"><span>Department</span></a></li>
	          <li class="nav-item"><a href="#doctor-section" class="nav-link"><span>Doctors</span></a></li>
	          
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	          
	          	
<li class="nav-item">
	          	 <li class="dropdown">
    <a href="javascript:void(0)" class="drop">Login</a>
    <div class="dropdown-content">
      <a href="login index.php" >User</a>
      <a href="Admin index_login.php">Staff Login</a>
     
    </div>

  </li>
</li>
	          <li class="nav-item cta mr-md-2"><a href="register.php" class="nav-link">Appointment</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap js-fullheight" style="background-image: url('images/home.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay">
      	
	            
      </div>
      <div class="container">

        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
          	<div class="mt-5">
          		
	            <h1 class="mb-4">We are here <br>for your Care</h1>
	           
	            <p><a href="register.php" class="btn btn-primary py-3 px-4">Make an appointment</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container1">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">We Are <span>Medik</span> For Your Service</h2>
			            <p> You're about to overcome something<br>
								You're been dealing with your mind<br>
								and heart will soon  peace <br>
								again be patient.
								<br>Everything will
								be okay.</p>
			            <p><a href="register.php" class="btn btn-primary py-3 px-4">Make an appointment</a> <a href="#contact-section" class="btn btn-secondary py-3 px-4">Contact us</a></p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
			<div class="container">
        <div class="row d-flex">
	        <div class="col-md-7 py-5">
	        	<div class="py-lg-5">
		        	<div class="row justify-content-center pb-5">
			          <div class="col-md-12 heading-section ftco-animate">
			            <center><h2 class="mb-3">Our Services</h2></center>
			          </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Emergency Services</h3>
			                <p>The emergency services of our hospital <br>operates 24 hours a day<br>We are ready to service you everytime.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Qualified Doctors</h3>
			                <p>Get an Expert Medical Opinion from one of our world-renowned specialists so you can have the answers and confidence to make informed decisions about your health</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Outdoors Checkup</h3>
			                <p>There is an outdoor checkup provided by Medik hospital <br>on every weekend from 9 A.M to 5 P.M.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-24-hours"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">24 Hours Service</h3>
			                <p> Instead of roaming here and there with your ailing patients you may directly come to Our Hospital. The emergency section is opened 24 hours of a day.</p>
			              </div>
			            </div>      
			          </div>
			        </div>
			      </div>
		      </div>
		    
			
		</section>

    <section class="ftco-intro img" style="background-image: url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container3">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Your Health is Our Priority</h2>
						<p>                                                                                                            </p>
						<p class="mb-0"></a></p>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="img img-dept align-self-stretch" style="background-image: url(images/dept-1.jpg);"></div>
    			</div>

    			<div class="col-md-8">
    				<div class="row no-gutters">
    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Neurology</a></h3>
    								<p></p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Surgical</a></h3>
    								<p></p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Dental</a></h3>
    								<p></p>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Opthalmology</a></h3>
    								<p></p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Cardiology</a></h3>
    								<p></p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Traumatology</a></h3>
    								<p></p>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Nuclear Magnetic</a></h3>
    								<p></p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">X-ray</a></h3>
    								<p></p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Arthroscopy</a></h3>
    								<p></p>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		
		<section class="ftco-section" id="doctor-section">
			<div class="container-fluid px-5">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Qualified Doctors</h2>
            <p></p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-1.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. ISH ANAND</h3>
								<span class="position mb-2">Neurologist</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="https://twitter.com/login?lang=en"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="https://accounts.google.com"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <p><a href="reister.php" class="btn btn-primary">Book now</a></p>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-2.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. Srivastava</h3>
								<span class="position mb-2">Ophthalmologist</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="https://twitter.com/login?lang=en"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="https://accounts.google.com"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <p><a href="register.php" class="btn btn-primary">Book now</a></p>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-3.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. SANJAY GUPTA</h3>
								<span class="position mb-2">Dentist</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="https://twitter.com/login?lang=en"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="https://accounts.google.com"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <p><a href="register.php" class="btn btn-primary">Book now</a></p>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-4.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr. PRIYANKA</h3>
								<span class="position mb-2">Pediatrician</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="https://twitter.com/login?lang=en"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="https://accounts.google.com"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <p><a href="register.php" class="btn btn-primary">Book now</a></p>
	              </div>
							</div>
						</div>
					</div>
					
		</section>

		<section class="ftco-facts img ftco-counter" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-5 heading-section heading-section-white">
						<span class="subheading">Fun facts</span>
						<h2 class="mb-4">Over 5,100 patients trust us</h2>
						<p class="mb-0"><a href="register.php" class="btn btn-secondary px-4 py-3">Make an appointment</a></p>
					</div>
					<div class="col-md-7">
						<div class="row pt-4">
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>Happy Patients</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="84">0</strong>
		                <span>Number of Doctors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Number of Staffs</span>
		              </div>
		            </div>
		          </div>
	          </div>
					</div>
				</div>
			</div>
		</section>


    

   
    <section class="ftco-section contact-section" id="contact-section">
      <div class="container5">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Us</h2>
            <p></p>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Medik Hospital,<br>
                   Western Street Roads
                   Surampalem.
	            </p>
	          </div>
          </div>
         
        
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="suc.php" method="POST" class="bg-light p-5 contact-form">
            	
              <div class="form-group">
                <input type="text" name="yourname" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="Email" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" cols="30" rows="7" class="form-control"  placeholder="Message"></textarea>
              </div>
              <div class="form-group">
              <a href="suc.php"> <input type="submit" name="send" value="Send" class="btn btn-secondary py-3 px-5"></a>
              </div>
            </form>
           
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>                 
  
  <script src="js/main.js"></script>
    
  </body>
</html>