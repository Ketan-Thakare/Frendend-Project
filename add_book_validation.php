<?php
error_reporting(0);
include('connection.php');
$bookno=$_POST['bookid'];
$bname=$_POST['bname'];
$bdetails=$_POST['bdetails'];
$bAuthor=$_POST['bAuthor'];
$Publication=$_POST['Publication'];
$course=$_POST['course'];
$class=$_POST['class'];
$sem=$_POST['sem'];
$bPrice=$_POST['bPrice'];
$img=$_FILES['book']['name'];
$timg=$_FILES['book']['tmp_name'];
$folder='books/'.$img;
move_uploaded_file($timg, $folder);
$in="insert into mybooks values('0','$bname','$bdetails','$bAuthor','$Publication','$course','$class','$sem','$bPrice','$folder','$bookno')";
$q=mysqli_query($con,$in);
if ($q) {
	$massage="Book Added Successfully!";
		header("location:add_book.php?emailsms=$massage ");
}

else{
	$massage="Book Not Added!";
		header("location:add_book.php?emailsms=$massage ");
}

?>