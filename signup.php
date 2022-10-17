<?php include("signupdatabase.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript">
 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 





function checkPassword(form) {
                password = form.password.value;
                password2 = form.password2.value;
  
                // If password not entered
                if (password == '')
                    alert ("Please enter Password");
                      
                // If confirm password not entered
                else if (password2 == '')
                    alert ("Please enter confirm password");
                      
                // If Not same return False.    
                else if (password != password2) {
                    alert ("\nPassword did not match: Please try again...")
                    return false;
                }
                  // If same return True.
                else{
                    //alert("Password Match:")
                    return true;
                }
            }



         




</script>
<!-- Custm Theme files -->
<link href="css/signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->

</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		
		<div class="main-agileinfo" style="border-radius: 20px;">
			<div class="agileits-top" >
				<form role="form "action="signupdatabase.php" onSubmit = "return checkPassword(this)" method="post">
					<input class="text"  style="border-radius: 20px;" type="text" name="Username" id="Username"  placeholder="Username" required="">

					<input class="text" style="margin-top: 30px;border-radius: 20px;" type="text" name="number" id="number"  placeholder="Mobile Number" required="">
					<input class="text email"  style="border-radius: 20px;" type="email" name="email"  placeholder="Email" required="">
					<input class="text" type="password"  style="border-radius: 20px;" name="password" id="password" onchange="check()"  placeholder="Password" required="">
					
					<input class="text w3lpass"  style="border-radius: 20px;" type="password" name="password2" id="password2" onchange="check()"  placeholder="Confirm Password" required="">
					
					<span id='message'></span>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit"  style="border-radius: 20px;" name="signup" value="signup">
				</form>
				<p>Already have an Account? <a href="login index.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>


	<!-- //main -->
</body>
</html>