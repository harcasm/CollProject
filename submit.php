<?php
$con = mysqli_connect('127.0.0.1','root','rajat','Forms');
if (!con) {
	die('Connection Failed: ' . 	mysql_error());
	}
$Name=$_POST['Name'];
$Telephone=$_POST['Telephone'];
$Emaile=$_POST['Email'];
$Stream=$_POST['Stream'];
$Message=$_POST['Message'];
$user_info = "INSERT INTO Form VALUES (`Name`, `Email`, `Telephone`, `Stream`, `Message`)";


if (!mysqli_query($con,$user_info)) {
	die('Error: ' . mysql_error($con)); }
echo 'Done';
mysqli_close($con); ?>
