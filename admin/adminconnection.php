<?php
$conn= new mysqli('localhost', 'root','','travel');

if($conn->connect_error)
	{
		echo "Connection Error";
	}
	else
	{
		echo "Successfully_Connected";	
	}

?>




