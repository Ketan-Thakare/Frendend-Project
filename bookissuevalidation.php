<?php
include("connection.php");
$bookid=$_POST['bookid'];
$bname=$_POST['bname'];
$issue=$_POST['issue'];
$in="insert into bookissue values('0','$bookid','$bname','$issue')";
$q=mysqli_query($con,$in);
if ($q) {
	$massage="Send book issue from teacher!";
		header("location:BookIssueForm.php?emailsms=$massage ");
}
else{
		$massage="Book issue not send!";
		header("location:BookIssueForm.php?emailsms=$massage ");
}
?>