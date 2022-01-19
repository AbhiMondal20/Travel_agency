<?php

include "connection.php";

$mysqli = "INSERT INTO `contact`(`id`, `name`, `email`, `subject`, `message`,`rate`,`follow`)
 VALUES ('','$_POST[name]','$_POST[email]','$_POST[sub]','$_POST[msg]','$_POST[rate]','$_POST[follow]')";
 
	//echo "$mysqli";
	
if(isset($_POST['submit']))
{	
	if(mysqli_query($conn,$mysqli)==true)
	{
		//echo "Insert_Succesfully";

		header("location:contact.php");
	}

	else
	{
		echo "Insert Again";
	}
}	

?>