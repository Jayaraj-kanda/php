<?php 
$servername = "sql6.freesqldatabase.com";
$username = "sql6527297";
$password = "79KgKNFAhN";
$dbname = "sql6527297";
$conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "";


 ?>