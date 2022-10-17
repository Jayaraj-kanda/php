<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appoint";
$conn = mysqli_connect($servername, $username, $password, $dbname);

 ?>

<?php 
  if(isset($_POST['signup'])){
    
    $Username = $_POST['Username'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $inserted = mysqli_query($conn, "INSERT INTO signup (`Username`, `number`,`email`, `password`, `password2`) values ('".$Username."',    '".$number."', '".$email."', '".$password."', '".$password2."')");
    include 'signupsucc.php';
    if($inserted){
      
    }
    else{

      
    }
  }
 ?>