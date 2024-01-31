<?php
 include("connection.php");
 session_start();


 $s=$_SESSION["admin"];

 if ($s==true) {
	
 }
 else {
	header('location:index.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			background: #dfdfdf;
		}
		#main{
			background:linear-gradient(200deg,#43bfc7,#afeeee);
			width: 100%;
			height: 600px;
		
			margin: 0px;
			padding: 0px;
			position: relative;
			top:0px; 		
		}
		ul {
			margin: 0px;
			padding: 0px;
			
		}
		ul li{
			display: block;
			padding: 13px;

		}
		ul li button{
width: 250px;
			height: 40px;

box-shadow: 5px 5px 5px gray;
border-radius: 10px;
border:none;
	color: white;
		background: #29465B;

		}
		ul li button:hover{
	background: white;
color: black;
		}

		#f{
			position: absolute;
			top: 0px;
			left: 300px;
			width: 950px;
			height: 600px;
			z-index: 2;
			border: none;
		}
		#account{
position: relative;
left: 1100px;
top: 50px;
width: 300px;
height: 60px;
background:linear-gradient(200deg,#43bfc7,#afeeee);
text-align: center;
border: none;
border-radius: 10px;
		}
		#account label{
			position: absolute;
			top: 20px;
			left: 70px;
			font-size: 18px;
			color: white;
		}
		#account img{
			position: absolute;
			top: 0px;
			left: 20px;
		}
		#icon{
			position: relative;
			left: 
		}
		#button{
		
    background: linear-gradient(to bottom, #33ccff 16%, #cc00ff 88%);
			width: 250px;
			height: 600px;
		}
		#gif{
			position: relative;
			top: -730px;
			width: 150px;
			left: 30px;
			height: 150px;
			z-index: 1;
		}
		#show{
			background: linear-gradient(to bottom, #33ccff 16%, #cc00ff 88%);
			
			 position: absolute;
 left:1310px;
 top:120px;
width: 200px;
height: 600px;
 text-align: center;
 border-radius: 10px;
 color: white;
 z-index: 5;

		}
		#show ul li button{
			width: 200px;
			position: relative;
			left: -30px;

		}
	

		a{
			text-decoration: none;
			color: white;
		}#adminl{
			position: relative;
			top: 55px;
			left: 50px;
			z-index: 100;
		}#addbook{
				position: relative;
			top: 120px;
			left: -0px;
			z-index: 100;
			width: 40px;
			height: 40px;
		}
		#bookreport{
			position: relative;
			top: 190px;
			left: -40px;
			z-index: 100;
			width: 40px;
			height: 40px;
		}
#bookrequest{
	position: relative;
			top: 250px;
			left: -90px;
			z-index: 100;
			width: 40px;
			height: 40px;
}
#addstudent{
position: relative;
			top: 320px;
			left: -130px;
			z-index: 100;
			width: 40px;
			height: 40px;
}
#studentreport{
position: relative;
			top: 390px;
			left: -180px;
			z-index: 100;
			width: 40px;
			height: 40px;	
}
#issuebook{
	position: relative;
			top: 450px;
			left: -225px;
			z-index: 100;
			width: 40px;
			height: 40px;
}
#shutdown{
	position: relative;
			top: 520px;
			left: -260px;
			z-index: 100;
			width: 40px;
			height: 40px;
}
#imgtext {
  position: absolute;
  top: -10px;
  left: 500px;
  font-size: 40px;
  text-shadow: 5px 2px 2px black;
  color:green;
}
#imgtext:hover{
	font-size:41px;



	</style>
</head>
<body>
	
	<div id="imgtext"><h2>Teacher Dashboard</h2></div>
	<div id="account"><img src="icon/Admin1.png"><label ><?php echo $_SESSION["admin"];?></label></div>
	<div id="dis">
<div id="show">
		<ul>
		<!-- <li><a href="student_details.php" target="display"><button>student_details</button></a></li>
		<li><a href="show_book.php" target="display"><button>show_book.php</button></a></li>
       <li><a href="Book_Report.php" target="display"><button>Book Report</button></a></li>
       <li><a href="Book_Request.php"target="display"><button>Book Request</button></a></li>
       <li><a href="Add_Student.php"target="display"><button>Add Student</button></a></li>
       <li><a href="Student_Report.php"target="display"><button>Student Report</button></a></li>
       <li><a href="Issue_Book.php"target="display"><button>Issue Book</button></a></li>
       <li><a href="Issue_Report.php"target="display"><button>Issue Report</button></a></li>
       <li><a href="Admin_Logout.php"><button>Logout</button></a></li> -->
        </ul>
	</div>
</div>
<img src="icon/admin1.png" id="adminl">
<img src="icon/book_add.png" id="addbook">
<img src="icon/bookreport.png" id="bookreport">
<img src="icon/bookrequest.png" id="bookrequest">
<img src="icon/addstudent.png" id="addstudent">
<img src="icon/studentreport.png" id="studentreport">
<img src="icon/issuebook.png" id="issuebook">
<img src="icon/shutdown.png" id="shutdown">
	<div id="main">
		
	<div id="button">
		<ul>
		<li><a href="adminp.php?em=<?php echo $_SESSION["admin"];?>" target="display"><button>Admin</button></a></li>
		<li><a href="Add_Book.php" target="display"><button>Add Book</button></a></li>
       <li><a href="Book_Report.php" target="display"><button>Book Report</button></a></li>
       <li><a href="userBookRequest.php"target="display"><button>Book Request</button></a></li>
       <li><a href="Add_Student.php"target="display"><button>Add Student</button></a></li>
       <li><a href="student_details.php"target="display"><button>Student Report</button></a></li>
       <li><a href="show_book.php"target="display"><button>Issue Book</button></a></li>
       <li><a href="Admin_Logout.php"><button>Logout</button></a></li>
        </ul>
	</div>
	<img id="gif"src="icon/digital-marketing.gif">
	<iframe id="f"name="display" ></iframe>
	</div>
	

</body>
</html>