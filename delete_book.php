<?php
include("connection.php");
$id=$_GET['id'];
$d="delete from mybooks where booknumber='$id'";
$q=mysqli_query($con,$d);
if ($q) {
	$massage="Book Deleted Successfully!";
		header("location:teacher_show_book.php?emailsms=$massage ");
}
else{
	$massage="Book Not Deleted!";
		header("location:teacher_show_book.php?emailsms=$massage ");
}
?>