<?php
$_SERVER = "localhost";
$username ="root";
$password = "";
$database = "travel";


$conn = mysqli_connect($_SERVER, $username, $password, $database);

if($conn->connect_error)
	{
		echo "Connection Error";
	}
	else
	{
		echo "Successfully_Connected";	
	}

?>




