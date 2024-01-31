<?php
include('connection.php');
$sname=$_POST['sname'];
$semail=$_POST['semail'];
$mo=$_POST['mo'];
$sclass=$_POST['sclass'];
$scourse=$_POST['scourse'];
$pass=$_POST['pass'];
$in="insert into student_regi values('0','$sname','$semail','$mo','$sclass','$scourse','$pass')";
$q=mysqli_query($con,$in);
if ($q) {

$massage="Student Registration Successfully!";
		header("location:registration.php?emailsms=$massage ");
	}
	else{
		$massage="Student Registration filed!";
		header("location:registration.php?emailsms=$massage ");
	}
?>
