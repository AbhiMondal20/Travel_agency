<?php

 include "connection.php";

$mysqli = "INSERT INTO `allpackage`(`id`,`devotionalpackage`,`days`, `price`) VALUES ('','$_POST[dname]','$_POST[ddays]','$_POST[dprice]')";

//echo "$mysqli";
	
if(isset($_POST['submit']))
{	
	if(mysqli_query($conn,$mysqli)==true)
	{
		//echo "Insert_Succesfully";

		header("location:devotionalpackage.php");
	}

	else
	{
		echo "Insert Again";
	}
}	


?>