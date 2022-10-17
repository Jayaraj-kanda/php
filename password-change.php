<?php
session_start();
$page_title ="Password change update";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
      
    
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt=4">
          
          <div class="card">
          <div class="card-header">
            <h4 class="card-title">
              Change password
            </h4>
          </div>
<div class="card-body">
  <div class="row">
    <div class="col-md-6">
    	<?php
          if(isset($SESSION['status']))
          {

            ?>
            <div class="alert alert-success">
            	<h5><?=$_SESSION['status']; ?></h5>
            </div>
            <?php

               unset($_SESSION['status']);

          }

    	?>
      <form action="password-reset-code.php" method="POST">  
      
         <div class="form-group">

         	<input type="hidden" name="password_token" value= "<?php if(isset($_GET['email'])){echo$_GET['email']; }?>">
     <label style="margin-top: 30px;">Email Adress:</label>   <input  type="text" name="email"  value="<?php if(isset($_GET['email'])){echo $_GET['email']; }?>" class="form-control" placeholder="Enter Email Adress" required="">
     <label style="margin-top: 30px;">New Password :</label>   <input type="text" name="new_password" class="form-control" placeholder="Enter new password" required="">
      <label style="margin-top: 30px;">Confirm Password :</label>  <input type="text" name="confirm_password" class="form-control" placeholder="Enter conform Password" required="">
       

      </div>
      <button type="submit" name="password_update" class="btn btn-primary"> Update Password</button>
  </form>

    </div>
  
  </div>
 
             </div>

        </div>
        
</div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>