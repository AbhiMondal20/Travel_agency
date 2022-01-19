i<?php
	include "connection.php";
	$mysqli = " INSERT INTO `settings`(`id`, `add1`, `add2`, `phn`, `week`, `support`, `message`) VALUES 
	('','$_POST[add1]','$_POST[add2]','$_POST[phn]','$_POST[week]','$_POST[support]','$_POST[message]')";
	
	if(isset($_POST['submit']))
{	
	if(mysqli_query($conn,$mysqli)==true)
	{
		echo "Insert_Succesfully";

		//header("location:summerpackage.php");
	}

	else
	{
		echo "Insert Again";
	}
}
?>			