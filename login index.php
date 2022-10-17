<!doctype html>

<html lang="en">
  <head>
  	<title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style1.css">
	
    <style>
    .error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
	

    </style>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"> </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to login</h2>
								<p>Don't have an account?</p>
								<a href="signup.php" class="btn btn-white btn-outline-white">Sign Up</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="www.facebook.com" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="www.twitter.com" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>



			  
							<form  method="post"action="loginvalidate.php" class="signin-form">
			      		<div class="form-group mb-3">
			      			<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
			      			<label class="label" for="name">Username</label>
			      			<input type="text" name="Username" class="form-control" id="Username" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" name="password" id="password"class="form-control"  placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" value="Sign In" name="submit" class="form-control btn btn-primary submit px-3">Login</button>
		            </div>
		            
		            	
									
									<center>	<a href="password-reset.php">          Forgot Password?  </a></center>
									
		                          
		          </form>
		        </div> 
		      </div>
				</div>
			</div>
		</div>
	</section>


	<script src="js/jquery1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap1.min.js"></script>
  <script src="js/main2.js"></script>
  

	</body>
</html>

