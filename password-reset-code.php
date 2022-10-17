<?php
session_start();
include("dbconn.php");

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'vendor/autoload.php';
function send_password_reset($get_name,$get_email,$token)
{
   $mail = new PHPMailer(true);
  //Server settings
                                          
    $mail->isSMTP();                                            //Send using SMTP
                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;       
    $mail->Host ='smtp.gmail.com';                            //Enable SMTP authentication
    $mail->Username   = 'jayarajkanda1433@gmail.com';   
    $mail->password = 'Jayaraj143';                  //SMTP username
      //Optional name

    $mail->SMTPSecure ='tsl';

    $mail->Port = 587;


    $mail->setFrom('jayarajkanda1433@gmail.com','JAYARAJ KANDA');

    $mail->addAddress($get_email);
    $mail->isHTML(true);
    $mail->Subject = 'Reset password notification';

    $email_template ='<h2>HELLO</h2>
    <h3>You Are recieving this email because we recieved a password reset request for your account.</h3>
    <br></br>
    


    ';

    $mail->Body =$email_template;
    $mail->send();



}

if (isset($_POST['password_reset_link'])) {

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$token = md5(rand());

	$check_email="SELECT * FROM signup WHERE email='$email' LIMIT 1";
	$check_email_run =mysqli_query($conn, $check_email);
	
	if(mysqli_num_rows($check_email_run) > 0)
	{
     
     $row = mysqli_fetch_array($check_email_run);
      $get_name = $row['Username'];
      $get_email = $row['email'];
      $update_token= "UPDATE signup SET verify_token='$token' WHERE email='$get_email' LIMIT 1 ";
      $update_token_run =mysqli_query($conn, $update_token);

      if($update_token_run)
      {
           send_password_reset($get_name,$get_email, $token);
            $_SESSION['status'] = "We Emailed you a password reset link";
		header("Location: password-reset.php");
		exit(0);


      }
      else
      {
         $_SESSION['status'] = "Something went wrong. #1";
		header("Location: password-reset.php");
		exit(0);

      }

	}
	else
	{

		$_SESSION['status'] = "No Email Found";
		header("Location: password-reset.php");
		exit(0);
	}

}

if (isset($_POST['password_update']))
 {
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$new_password= mysqli_real_escape_string($conn,$_POST['new_password']);
	$connfirm_password= mysqli_real_escape_string($conn,$_POST['confirm_password']);
	$token= mysqli_real_escape_string($conn,$_POST['password_token']);

	if(!empty($token))
	{


       if (!empty($email) && !empty($new_password) && !empty($connfirm_password)) 
       {
       	 //checking token is valid or not
       	$check_token="SELECT verify_token FROM signup WHERE verify_token='$token' LIMIT 1";
       	$check_token_run=mysqli_query($conn, $check_token);
       	if(mysqli_num_rows($check_token_run) > 0)
       	{

             if($new_password == $connfirm_password)
             {
                  $update_password = "UPDATE signup SET password='$new_password' WHERE verify_token='$token' LIMIT 1";
                  $update_password_run= mysqli_query($conn,$update_password );
                  if ($update_password_run)
                   {
                   	$new_token=md5(rand())."funda";
                  	$update_to_new_token = "UPDATE signup SET verify_token='$new_token' WHERE verify_token='$token' LIMIT 1";
                  $update_to_new_token_run= mysqli_query($conn,$update_to_new_token_run );
                  		$_SESSION['status'] = "New password succesfully updated";
		       header("Location:login index.php");
		          exit(0);
                   }
                  }
                  else
                  {

             	$_SESSION['status'] = "Did not update password. something went wrong ";
		       header("Location: password-change.php?token=$token&email=$email");
		          exit(0);
                   }

             }
             else
             {

             	$_SESSION['status'] = "password and confirm password does not match";
		header("Location: password-change.php?token=$token&email=$email");
		exit(0);
             }
       	}

       	else
       	{
       $_SESSION['status'] = "Invalid token";
		header("Location: password-change.php?token=$token&email=$email");
		exit(0);

       	}
       }
       else
       {
		$_SESSION['status'] = "All fields are mandatory";
		header("Location: password-change.php?token=$token&email=$email");
		exit(0);

       }
	}
	else
	{
		$_SESSION['status'] = "No Token Avaialble";
		header("Location: password-change.php");
		exit(0);
	}


?>