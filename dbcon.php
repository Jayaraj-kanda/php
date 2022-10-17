<?php 
$servername = "sql6.freesqldatabase.com";
$username = "sql6527297";
$password = "79KgKNFAhN";
$dbname = "sql6527297";
$conn = mysqli_connect($servername, $username, $password, $dbname);




 ?>

<?php 
	if(isset($_POST['send'])){
		
		$yourname = $_POST['yourname'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$inserted = mysqli_query($conn, "INSERT INTO feedback (`yourname`, `email`, `subject`, `message`) values ('".$yourname."', '".$email."', '".$subject."', '".$message."')");
		if($inserted){
			
		}
		else{

			
		}
	}
 ?>