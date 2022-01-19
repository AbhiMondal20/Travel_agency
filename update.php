<?php
session_start();
include "connection.php";

$id   = $_SESSION[id];
$name = $_POST[name];
$email  = $_POST[email];
$phone= $_POST[phone];
$state = $_POST[state];
$country  = $_POST[country];
$address= $_POST[address];


$sql = "update `data` set `name` = '$name', `email` = '$email', `phone` = '$phone', 
`state` = '$state', `country` = '$country', `address` = '$address' where `id` = '$id'";

	mysqli_query($conn,$sql);

header("location:settings.php");

?>