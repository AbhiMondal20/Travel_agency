<?php
session_start();

include "connection.php";
$cid=$_SESSION['id'];

$mysqli = "INSERT INTO `userprofile`(`id`,`cid`, `departure`, `arrival`, `phone`, `trip`, `work`, `adult`, `child`) VALUES 
('',$cid,'$_POST[date1]','$_POST[date2]','$_POST[tel]','$_POST[tripselect]','$_POST[radio]','$_POST[adult]','$_POST[child]')";

if(isset($_POST['submit']))
{	
	if(mysqli_query($conn,$mysqli)==true)
	{
		//echo "Insert_Succesfully";

		header("location:booking.php");
	}

	else
	{
		echo "Insert Again";
	}
}	

?>