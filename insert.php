<?php

include "connection.php";

$mysqli = "INSERT INTO `data`(`id`, `name`, `email`, `phone`, `state`, `country`, `address`, `password`) 
VALUES ('','$_POST[name]','$_POST[email]','$_POST[phn]','$_POST[state]','$_POST[country]','$_POST[add]','$_POST[pass]')";
//echo "$mysqli";
if(isset($_POST['submit']))
{	
	if(mysqli_query($conn,$mysqli)==true)
	{
		//echo "Insert_Succesfully";

		header("location:index.php");
	}

	else
	{
		echo "Insert Again";
	}
}	

?>