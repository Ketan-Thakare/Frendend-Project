<?php
include("connection.php");
$id=$_GET['id'];
$d="delete from bookrequest where id='$id'";
$q=mysqli_query($con,$d);
if ($q) {
	$massage="Book isuue record deleted!";
		header("location:BookRequestshow.php?emailsms=$massage ");
}
else{
	$massage="Book isuue record not deleted!";
		header("location:BookRequestshow.php?emailsms=$massage ");
}
?>