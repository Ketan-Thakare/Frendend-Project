<?php 
include("connection.php");
$ademai="";
if (!empty($_REQUEST['emailsms'])) {
$ademai=$_REQUEST['emailsms'];

}
?>
<!DOCTYPE html>
<html>
<head>
		<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>
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
            left: 870px;
		}
		#user{
			 position: absolute;
            font-size: 20px;
            top: 20px;
            color: yellow;
            left: 50px;
            animation: username 10s linear infinite;
		}
		@keyframes username{
			50%{
				color: yellow;
			}
			100%{
				color: white;
			}
		}
		#list{
			position: relative;
			width: 1519px;
			height: 40px;
		background: yellow;
		left: -00px;
		top: -0px;
		}
		ul{
			
			margin: 0px;
			padding: 0px;
			

		}
		ul li{
			
			
			display: block;
			float: left;
			color: black;

		}
		ul li button{
			width: 150px;
			height: 40px;
			border: none;
			background: yellow;
		}
		ul li button:hover{
			background: green;
			color: white;
		}
			
		iframe{
			position: relative;
			top: -0px;
			width: 100%;
			height: 800px;
			overflow: hidden;
			overflow: scroll;
			z-index: 1;

		}
		a{
		color: black;
		}
	</style>
</head>
<body>
<div id="head">
	<label id="user">Student Dashbord : <?php echo $ademai;?></label>
		<label id="proname">E Notes System</label>
		<img src="images/logo.png" width="80px"height="80px;">
	</div>
	
	<div id="list">
				<ul>
			<!-- <li><a href="show_file.php" target="main_screen"><button><i class="fa fa-file-pdf-o" style="font-size:15px;color:red"></i> All Book</button></a></li> -->
			<li><a href="mcacourse.php" target="main_screen"><button><i class="fa fa-file-pdf-o" style="font-size:15px;color:red"></i>  MCA</button></a></li>
            <li><a href="mbacourse.php" target="main_screen"><button><i class="fa fa-file-pdf-o" style="font-size:15px;color:red"></i> MBA</button></a></li>
            <li><a href="BookIssueForm.php" target="main_screen"><button><img src="icon/issue.png" width="15px" height="15px" />  Book Issue</button></a></li>
            <li><a href="StudentBookRequest.php" target="main_screen"><button><img src="icon/Request.png" width="15px" height="15px" /> Book Request</button></a></li>
            <li><a href="index.php"><button><img src="icon/logout.png" width="15px" height="15px" /> Logout</button></a></li>
            
		</ul>
	</div>
	
	<div>
		
		<iframe name="main_screen"></iframe>
	</div>
</body>
</html>