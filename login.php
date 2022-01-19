



<?php
session_start();
include "connection.php";

		$name= $_POST['name'];
		$password= $_POST['pass'];
		$mysqli="SELECT * FROM `data` WHERE `Name`= '$name' AND `Password`= '$password'";
		$res= mysqli_query($conn,$mysqli);
		$row= mysqli_num_rows($res);
		if($row!=0)
			{
				$user= mysqli_fetch_array($res);
				$_SESSION['name']= $user['name'];
				$_SESSION['id']= $user['id'];
				//echo $_SESSION['name'];
				header("location:userdashboard.php");
				//echo "logged IN";
			}
			else
			{


				echo "Name or Password you entered are wrong";
			}
?>