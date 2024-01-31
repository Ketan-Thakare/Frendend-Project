bookrequestvalidation.php
a<?php
error_reporting(0);
include('connection.php');
$bname=$_POST['bname'];
$bdetails=$_POST['bdetails'];
$bAuthor=$_POST['bAuthor'];
$Publication=$_POST['Publication'];
$course=$_POST['course'];
$class=$_POST['class'];
$sem=$_POST['sem'];
$in="insert into bookrequest values('0','$bname','$bdetails','$bAuthor','$Publication','$course','$class','$sem')";
$q=mysqli_query($con,$in);
if ($q) {
	$massage="Book Request send!";
		header("location:StudentBookRequest.php?emailsms=$massage ");
}

else{
	$massage="Book Request not send!";
		header("location:StudentBookRequest.php?emailsms=$massage ");
}

?>