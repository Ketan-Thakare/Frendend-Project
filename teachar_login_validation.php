<?php
$em=$_GET['em'];
$pass=$_GET['pass'];
if ($em=="teacher@gmail.com"&&$pass=="teacher@123") {
	header('location:teachar_dashbord.php');
	// code...
}
else{
	header('location:Teacher_Login.php');
}
?>