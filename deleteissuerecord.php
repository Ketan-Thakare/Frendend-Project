<?php
include("connection.php");
$id=$_GET['id'];
$d="delete from bookissue where bookno='$id'";
$q=mysqli_query($con,$d);
if ($q) {
	$massage="Book isuue record deleted!";
		header("location:teachershowbookissue.php?emailsms=$massage ");
}
else{
	$massage="Book isuue record not deleted!";
		header("location:teachershowbookissue.php?emailsms=$massage ");
}
?>