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
    <title>Registration Form</title>
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
        #main{
            position: relative;
            width: 600px;
            height: 500px;
          box-shadow: 2px 2px 2px gray;

        }
        input{
            width: 300px;
            height: 30px;
            outline: none;
            border: inset;
            position: absolute;
            left: 180px;
        }
        label{
           position: absolute;
            left: 100px; 
        }
        #submit{
           position: absolute;
           left: 180px; 
width: 100px;
height: 30px;
color: white;
background: blue;
        }

        a{
            text-decoration: none;
            color: white;
        }
        #login{
           position: absolute;
           left: 388px; 
           color: white;
           width: 100px;
           background: green;
           height: 30px;
        }
   </style>
</head>
<body>
    <div id="head">
    <label id="user">Student Registration</label>
        <label id="proname">E Notes System</label>
        <img src="images/logo.png" width="80px"height="80px;">
    </div>
    <br>
    <center>

    <div id="main">
    <h2>Registration Form</h2>
    <form action="student_regi_validation.php" method="POST">
        <label>Name :</label><input type="text" id="sname" name="sname" placeholder="Enter your Name" required><br><br><br>
        <label>Email :</label><input type="email" id="semail" name="semail" placeholder="Enter your Email id"required><br><br><br>
        <label>Mobile :</label><input type="number" id="mo" name="mo"placeholder="Enter your Mobile Number " required><br><br><br>
       <label>Class:</label><input type="text" id="sclass" name="sclass"placeholder="Enter your Class" required><br><br><br>
        <label>Course:</label><input type="text" id="scourse" name="scourse"placeholder="Enter your Course Name" required><br><br><br>
        <label>Password:</label><input type="password" id="pass" name="pass"placeholder="Enter your Password " required><br><br><br>
       

        <input type="submit" value="Registration" id="submit">
        <button id="login"><a href="Student_Login.php">Login</a></button>
    </form>
</div>
</center>
</body>
</html>
