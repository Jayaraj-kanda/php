<?php 
session_start(); 
include "dbconn.php";

if (isset($_POST['Username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Username = validate($_POST['Username']);
	$pass = validate($_POST['password']);

	if (empty($Username)) {
		header("Location: login index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM signup WHERE Username='$Username' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Username'] ==="Admin" && $row['password'] === "Admin") {
            	$_SESSION['Username'] = $row['Username'];
            	$_SESSION['number'] = $row['number'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['password2'] = $row['password2'];
            	header("Location:index.php");
		        exit();
		    }
		    else
		    {

            if ($row['Username'] === $Username && $row['password'] === $pass) {
            	$_SESSION['Username'] = $row['Username'];
            	$_SESSION['number'] = $row['number'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['password2'] = $row['password2'];
            	header("Location:home.php");
		        exit();
            }else{
				header("Location: login index.php?error=Incorect User name or password");
		        exit();
			}
			}
		}else{
			header("Location: login index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location:login index.php");
	exit();
}