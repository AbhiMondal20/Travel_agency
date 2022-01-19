<?php

include "connection.php";

$mysqli = "INSERT INTO `adminreg`(`id`, `name`, `email`, `password`) VALUES 
('','$_POST[name]','$_POST[email]','$_POST[pass]')";

//echo $mysqli;
if(isset($_POST['submit']))
{	
	if(mysqli_query($conn,$mysqli)==true)
	{
		//echo "Insert_Succesfully";

		header("location:table.php");
	}

	else
	{
		echo "Insert Again";
		//header("location:error.php");
	}
}	

?>