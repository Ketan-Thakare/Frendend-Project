<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body{
			background-image:url("background/back1.jpg") ;
			background-repeat: no-repeat;
			background-size:100% ;

		}
		#head {
			width: 100%;
			height: 80px;
			position: relative;
			align-items: center;
				background: linear-gradient(to left,#36d1dc,#5b86e5);
			}
			#proname{
            position: absolute;
            font-size: 40px;
            top: 10px;
            left: 550px;
		}
		#head img{

			position: absolute;
            left: 850px;
		}
		#studentform{

            position: relative;
			width: 600px;
			height: 320px;
		background: white;
			box-shadow: 2px 2px 2px gray;
			border-radius: 10px;
		}
		#formtitle{
			position: absolute;
			top: 20px;
			left: 240px;
			font-size: 30px;
		}
		input{
			outline: none;
			border: inset;
			position: absolute;
			left: 220px;
			width: 300px;
			height: 30px;
		}
		label{
position: absolute;
			left: 60px;
		}
#submit{
	position: absolute;
	left: 220px;
	width: 100px;
	height: 30px;
	background: green;
	color: white;
	border-radius: 5px;
	box-shadow: 2px 2px 2px gray;
	border: none;
}
#back{
	position: absolute;
	left: 428px;
	width: 100px;
	height: 30px;
		background: red;
	color: white;
	border-radius: 5px;
	box-shadow: 2px 2px 2px gray;
	border: none;
}
a{
text-decoration:none;
color:white;
}
	</style>

</head>
<body>
<div id="head">
		<label id="proname">E Notes System</label>
		<img src="images/logo.png" width="80px"height="80px;">
	</div><br><br><br><br><br><br>
	<center>
	<div id="studentform"><center>
<label id="formtitle">Teacher Login</label></center>
<form action="teachar_login_validation.php" method="GET"><br><br><br><br><br>
	<label>Enter Your Email id</label><input type="email" name="em" placeholder="Enter Your Email id" required><br><br><br>
		<label>Enter Your Password</label><input type="password" name="pass" placeholder="Enter Your Email id" required><br><br><br><br>
		<input type="submit" name="" id="submit" value="Login">
		<button id="back"><a href="index.php">back</a></button>
</form>

	</div>
	</center>

</body>
</html>