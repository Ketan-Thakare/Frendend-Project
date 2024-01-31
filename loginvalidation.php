<?php 
include("connection.php");

$lemail=$_GET['em'];
$lpass=$_GET['pass'];

	$s="select * from student_regi where Email='$lemail' && Password='$lpass'";
	$q=mysqli_query($con,$s);
	$no=mysqli_num_rows($q);
	if ($no==1) {
		$massage=$lemail;
		header("location:student_dashbord.php?emailsms=$massage");
	}
	else{
		$massage="Login Filed";
	header("location:Student_Login.php?emailsms=$massage");
	}

?>