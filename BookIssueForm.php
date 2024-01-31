<?php 
include("connection.php");
$ademai="";
if (!empty($_REQUEST['emailsms'])) {
$ademai=$_REQUEST['emailsms'];
 echo "<script>alert('$ademai')</script>";
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body{
			background-image:url("background/back1.jpg") ;
			background-size: 100%;
			background-repeat: no-repeat;
		}
		#main{
			width: 500px;
			height: 450px;
			box-shadow: 2px 2px 2px;
			position: relative;
		}
		#title{
			position: absolute;
			left: 225px;
			font-size: 25px;
		}
		input{
			position: absolute;
			left: 130px;
			width: 300px;
			height: 30px;
		}
		label{
			position: absolute;
			left: 130px;
			
		}
		textarea{
				position: absolute;
			left: 130px;
		}
		input[type="submit"]{
			width: 100px;
			height: 30px;
			position: absolute;
			left: 130px;
			background: green;
			color: white;
			border: none;
			border-radius: 5px;
		}

		#cancel{
            width: 100px;
			height: 30px;
			position: absolute;
			left: 333px;
			background: red;
			color: white;
			border: none;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<br><br><br>
	<center>
<div id="main">
<label id="title">Book Issue </label><br><br><br>
<form action="bookissuevalidation.php" method="POST">
	<label>Book Id</label><br><br><input type="number" name="bookid" placeholder="Enter Book Id..">
	<br><br><br>
	<label>Book Name</label><br><br><input type="text" name="bname" placeholder="Enter Book Name..">
	<br><br><br>
	<label id="issuelabel">Book Issue in Details</label><br><br><textarea name="issue"style="width:300px;height: 70px;"></textarea>
	<br><br><br><br><br><br>
	<input type="submit" name=""><button id="cancel">Cancel</button>
</form>
</div>
</center>
</body>
</html>