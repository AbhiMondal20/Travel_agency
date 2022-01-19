<?php

 include "connection.php";

$mysqli = "INSERT INTO `allpackage`(`id`,`days`, `price`) VALUES ('','$_POST[mdays]','$_POST[mprice]')";

//echo "$mysqli";
	
if(isset($_POST['submit']))
{	
	if(mysqli_query($conn,$mysqli)==true)
	{
		//echo "Insert_Succesfully";

		header("location:monsoonpackage.php");
	}

	else
	{
		echo "Insert Again";
	}
}	


?>