
 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Medik</title>
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

     <!--<style type="text/css">
      
     display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .4rem 0;
}   label {
  
    </style>-->
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  	
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Medik</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="index.php#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="index.php#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="index.php#department-section" class="nav-link"><span>Department</span></a></li>
	          <li class="nav-item"><a href="index.php#doctor-section" class="nav-link"><span>Doctors</span></a></li>
	          
	          <li class="nav-item"><a href="index.php#contact-section" class="nav-link"><span>Contact</span></a></li>
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/doct1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Appointment</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>


    <center>
 </div>  <div class="col-md-5 d-flex">
            <div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
              <form action="sec.php" method="POST" class="appointment-form ftco-animate">
                <h3>Free Consultation</h3>
                <div class="">
                  <div class="form-group">
                    <input type="text"  name="firstname" class="form-control" placeholder="First Name" required>
                  </div>
                  <div class="form-group">
                    <input type="text"  name="lastname" class="form-control" placeholder="Last Name" required>
                  </div>
                </div>
                <div class="">
                  <div class="form-group">
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="service"  id="service" class="form-control">
                          <option name="selectyour" value="">Select Your Services</option>
                          <option name="Neurology" value="Neurology">Neurology</option>
                          <option name="Cardiology" value="Cardiology">Cardiology</option>
                          <option  name="Dental" value="Dental">Dental</option>
                          <option name="Ophthalmology" value="Ophthalmology">Ophthalmology</option>
                          <option name="Other Services" value="Other Services">Other Services</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="number"  pattern="^\d{10}$"
 name="phone" class="form-control" placeholder="Phone" required>
                  </div>
                </div>
                <div class="">
                  <div class="form-group">
                    <div class="input-wrap">
                      <div class="icon"><span class="ion-md-calenda"></span></div>
                            

          <input type="date"  name="date" class="form-control appointment_date" placeholder="DD/MM/YYYY"  required>
            
                     <!-- <input type="text"  name="date" class="form-control appointment_date" placeholder="Date" required>-->
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-wrap">
                      <div class="icon"><span class="ionios-clock"></span></div>
                      <input type="time" id="appt" class="form-control appointment_time" name="time" min="09:00" max="18:00" required>
                      <!--<input type="text" name="time" class="form-control appointment_time" placeholder="Time" required>-->
                    </div>
                  </div>
                </div>
                <div class="">
                  <div class="form-group">
                    <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message" required></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="register" value="Appointment" class="btn btn-secondary py-3 px-4" required>
                  
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </center>
    
  

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