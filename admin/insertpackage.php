<?php

include "connection.php";

$mysqli = "INSERT INTO `packages`(`id`, `photo`, `name`, `description`) VALUES ('','$_POST[files]','$_POST[name]','$_POST[description]')";

if(isset($_POST['submit']))
{	
	if(mysqli_query($conn,$mysqli)==true)
	{
		echo "Insert_Succesfully";

		//header("location:index.php");
	}

	else
	{
		echo "Insert Again";
	}
}	


?>