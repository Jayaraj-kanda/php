<?php 
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['Username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	
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

	<style type="text/css">
		
		body {
	background:#1690A7 ;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}




margin-bottom: 40px;
}


label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}


.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
 text-transform: uppercase; 
}

a {
	float: right;
	
	padding: 10px 15px;
		color: #fff;

	border-radius: 5px;
	margin-right: 10px;
	border: none;
	text-decoration: none;
}
a:hover{
	opacity: .7;
}
	</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">MEDIK</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="home.php" class="nav-link"><span><b>Home</b></span></a></li>
	          <li class="nav-item"><a href="phonecheck.php" class="nav-link"><span><b>My Appointments</b></span></a></li>
	          <li class="nav-item"><a href="details.php" class="nav-link"><span><b>Health Care</b></span></a></li>
	          <li class="nav-item"><a href="logout.php" class="nav-link"><span><b>Logout</b></span></a></li>
	          
	          	          	
	          <li class="nav-item cta mr-md-2"><a href="register.php" class="nav-link">Appointment</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
	  



     <h1>Hello, <?php echo $_SESSION['Username']; ?></h1>
     
</body>
</html>

<?php 
}else{
     header("Location: login index.php");
     exit();
}
 ?>