<?php

 include "connection.php";

$mysqli = "INSERT INTO `allpackage`(`id`, `winterpackage`,`days`, `price`) VALUES ('','$_POST[wname]','$_POST[wdays]','$_POST[wprice]')";

//echo "$mysqli";
	
if(isset($_POST['submit']))
{	
	if(mysqli_query($conn,$mysqli)==true)
	{
		//echo "Insert_Succesfully";

		header("location:winterpackage.php");
	}

	else
	{
		echo "Insert Again";
	}
}	


?>