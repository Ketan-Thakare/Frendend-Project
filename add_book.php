<?php 
include("connection.php");
$ademai="";
if (!empty($_REQUEST['emailsms'])) {
$ademai=$_REQUEST['emailsms'];
 echo "<script>alert('$ademai')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body{
			background-image: url("background/back1.jpg");
			background-repeat:no-repeat ;
			background-size: 100%;

		}
		#main_form{
		width: 1000px;
		height: 500px;	
		
		position: relative;
		}
		#maintitle{
			position: absolute;
			font-size: 30px;
			left: 450px;
		}
		#first_form{
			width: 500px;
			height: 400px;
		
			position: absolute;
left: 00px;
		}
#first_form input{
	width: 300px;
	height: 30px;
	position: absolute;
	left: 130px;

}
#first_form label{

	position: absolute;
	left: 30px;

}
#second_form{
			width: 500px;
			height: 400px;
			
			position: absolute;
left:450px;
		}
#second_form input{
	width: 300px;
	height: 30px;
	position: absolute;
	left: 160px;

}
input[type='submit']{
	background: green;
	color: white;
	border:none;

}
#second_form label{

	position: absolute;
	left: 30px;

}
#cancel{
	color: white;
	border:none;

	background: red;
	width: 300px;
	height: 30px;
	position: absolute;
	left: 160px;
}::-webkit-file-upload-button{
background: #2E8B57;
	border-radius: 5px;
	color: white;
height: 30px;
}
select{
	position: absolute;
	left: 160px;
	width: 300px;
	height: 30px;
}		
	</style>
</head>
<body>
	<br><br>
	<center>
<div id="main_form">

	<label id="maintitle">Add Book</label>
	<br><br><br><br><br>
	<form action="add_book_validation.php" method="POST" enctype="multipart/form-data">
		<div id="first_form">
			<label>Book Id:</label><input type="text" name="bookid" placeholder="Enter Book Id.." required><br><br><br>
	
	<label>Book Name:</label><input type="text" name="bname" placeholder="Enter Book Name.." required><br><br><br>
	<label>Book Details :</label><input type="text" name="bdetails" placeholder="Book Details.." required><br><br><br>
<label>Book Author :</label><input type="text" name="bAuthor" placeholder="Book Author.." required><br><br><br>
<label>Book Publication :</label><input type="text" name="Publication" placeholder="Publication" required><br><br><br>
<input type="submit" name="">
</div>

<div id="second_form">
	<label>Course Name :</label><select name="course">
	<option value="MCA">MCA</option>
	<option value="MBA">MBA</option>
	<option value="BCA">BCA</option>
</select>
<br><br><br>
<label>Class Name :</label>
<select name="class">
	<option value="FY">FY</option>
	<option value="SY">SY</option>
	<option value="TY">TY</option>
</select><br><br><br>
<label>Semester:</label><select name="sem">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
</select><br><br><br>
<label>Book Price :</label><input type="text" name="bPrice" placeholder="Book Price.." required ><br><br><br>


<label>Upload Book :</label><input type="file" name="book" required><br><br><br>
<button id="cancel">Cancel</button>
</div>
</form>
</div>
</center>
</body>
</html>