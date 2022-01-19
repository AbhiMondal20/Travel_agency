<?php
session_start();
include "connection.php";

$id   = $_SESSION[id];
$add1 = $_POST[add1];
$add2  = $_POST[add2];
$phn= $_POST[phn];
$week = $_POST[week];
$support  = $_POST[support];
$message= $_POST[message];
$about= $_POST[about];

$sql = "update `settings` set `add1` = '$add1', `add2` = '$add2', `phn` = '$phn', 
`week` = '$week', `support` = '$support', `message` = '$message', `about` = '$about' where `id` = '$id'";

	mysqli_query($conn,$sql);

header("location:settings.php");

?>