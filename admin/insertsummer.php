<?php

 include "connection.php";

$mysqli = "INSERT INTO `allpackage`(`id`,`summerpackage`, `days`, `price`) VALUES ('','$_POST[sname]','$_POST[sdays]','$_POST[sprice]')";

//echo "$mysqli";
	
if(isset($_POST['submit']))
{	
	if(mysqli_query($conn,$mysqli)==true)
	{
		//echo "Insert_Succesfully";

		header("location:summerpackage.php");
	}

	else
	{
		echo "Insert Again";
	}
}	


?>