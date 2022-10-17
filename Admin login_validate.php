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
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM doctors WHERE Username='$Username' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);


                  if ($row['Username'] ==="Admin" && $row['password'] === "Admin") {
            	    $_SESSION['Username'] = $row['Username'];
            	      $_SESSION['service'] = $row['service'];
            	      $_SESSION['number'] = $row['number'];
            	     header("Location:index.php");
		               exit();
		                  }
		                else
		                  {

                             if ($row['Username'] ==="nuerology" && $row['password'] === "nuerology") {
            	                      $_SESSION['Username'] = $row['Username'];

            	                      $_SESSION['service'] = $row['service'];
            	                      $_SESSION['number'] = $row['number'];
            	                     
            	                      header("Location: nuerology.php");
		                             exit();
		                           }

		                      elseif ($row['Username'] ==="cardiology" && $row['password'] === "cardiology") {
            	                      $_SESSION['Username'] = $row['Username'];
            	                      $_SESSION['service'] = $row['service'];
            	                      $_SESSION['number'] = $row['number'];
            	                     
            	                      header("Location:cardiology.php");
		                             exit();
		                           }
		                        elseif ($row['Username'] ==="opthamology" && $row['password'] === "opthamology") {
            	                      $_SESSION['Username'] = $row['Username'];
            	                      $_SESSION['service'] = $row['service'];
            	                      $_SESSION['number'] = $row['number'];
            	                     
            	                      header("Location:opthamology.php");
		                             exit();
		                           }
		                          elseif ($row['Username'] ==="dental" && $row['password'] === "dental") {
            	                      $_SESSION['Username'] = $row['Username'];
            	                      $_SESSION['service'] = $row['service'];
            	                      $_SESSION['number'] = $row['number'];
            	                     
            	                      header("Location:dental.php");
		                             exit();
		                           }
		                            elseif ($row['Username'] ==="other services" && $row['password'] === "other services") {
            	                      $_SESSION['Username'] = $row['Username'];
            	                      $_SESSION['service'] = $row['service'];
            	                      $_SESSION['number'] = $row['number'];
            	                     
            	                      header("Location:other services.php");
		                             exit();
		                           }  
                         else{
				    header("Location: Admin index_login.php?error=Incorect User name or password");
		              exit();
			               }
			}
		}else{
			header("Location: Admin index_login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location:Admin index_login.php");
	exit();
}