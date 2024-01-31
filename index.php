<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link rel="stylesheet" href="styleLogin.css">
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
            left: 850px;
		}
		#imageslider{
			position: relative;
			
			width: 100%;
			height: 600px;
		
			align-items: center;
			 
		}
		#imageslider img{
            
            width: 100%;
			height: 600px;
		}

		#student{
			background: linear-gradient(to left,#36d1dc,#5b86e5);
			color: white;font-size: 20px;
            position: absolute;
            top: 300px;
            left: 850px;
            width: 250px;
            height: 80px;
            border: none;
            box-shadow: 2px 2px 2px gray;
            border-radius: 10px;

		}
		#te{
		background: linear-gradient(to left,#36d1dc,#5b86e5);
		color: white;
		font-size: 20px;
			width: 250px;
			height: 80px;
			position: absolute;
            top: 300px;
            left: 400px;

            border: none;
            box-shadow: 2px 2px 2px gray;
            border-radius: 10px;

		}
		#student:hover{
			background: linear-gradient(to left,#43e97b,#38f9d7);
		}
		#te:hover{
background: linear-gradient(to left,#43e97b,#38f9d7);
		}
		#operation{
			position: absolute;
			top: 70px;
		}
		#operation1, #operation2, #operation3, #operation4, #operation5, #operation6{
			position: absolute;
			top: 70px;
			left: 10px;
		}
		#operation2{
			position: absolute;
			left: 50px;
		}
		#operation3{
			position: absolute;
			left: 90px;
		}
		#operation4{
			position: absolute;
			left: 130px;
		}
		#operation5{
			position: absolute;
			left: 170px;
		}
		#operation6{
			position: absolute;
			left: 210px;
		}
	</style>
</head>
<body>
		 <center>
	<div id="head">
		<label id="proname">E Notes System</label>
		<img src="images/logo.png" width="80px"height="80px;">
	</div>

	<div id="imageslider">

<section>

  <center><img class="mySlides" src="images/2nd.jpg">
  <!-- >style="width:550px; height: 470px;" -->
  <img class="mySlides" src="images/formB.jpg">
  <img class="mySlides" src="background/back5.jpg">
  <img class="mySlides" src="background/back4.jpg">
  <img class="mySlides" src="background/back3.jpg">
  <img class="mySlides" src="background/back2.jpg">
  <img class="mySlides" src="background/back1.jpg">
  <a href="Student_Login.php"><button id="student">Student</button></a>
  <a href="Teacher_Login.php"><button id="te">Teacher</button></a>
</center>
</section>
</div>
 </center>
   <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="backImg.jpg" alt="" w>
        <div class="text">
          <span class="text-1">Every new System is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
      
        <div class="text">
 
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">About...</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <b>" Revolutionizing Note-Taking: Building an E-Notes System for the Modern Age"</b>
               
                  
               
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <br><br><br>
                E-notes systems offer tools for creating and managing digital notes, which can include text, images, and multimedia elements.
             
              </div>
              
              <div class="button input-box">
            
              </div>
              <div class="text sign-up-text"> <label for="flip"><h1>Contact up</h1></label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Contact...</div>
        <form action="#">
          <br><br><br>
          
              <div class="input-box">
              	<table width="400px" style="height:30px">
              		
              		<tr>
              			<td><img src="background/call.png" width="15px" height="15px"> Contact no: </td>
              			<td> (+91)-8080161922     + 8380063768 </td>
              		</tr>
              		<tr>
              			<td><img src="background/mail.png" width="15px" height="15px"> E-mail ID </td>
              			<td>e-notes@mail.com</td>
              		</tr>
              		<tr>
              			<!-- <td><img src="background/address.png" width="15px" height="15px"> Address</td>
              			<td>(+91)-8080161922     + 8380063768</td> -->
              		</tr>
              	</table><br><br>
              
              		
              			
              			<a href="google.com"><img src="background/facebook.png" width="25px" height="25px"id="operation1"></a>
              			<a href="youtube.com"><img src="background/instagram.png" width="25px" height="25px"id="operation2"></a>
              			<a href="Student_Login.php"><img src="background/telegram.png" width="25px" height="25px"id="operation3"></a>
              			<a href="Student_Login.php"><img src="background/twitter.png" width="25px" height="25px"id="operation4"></a>
              			<a href="whatsapp.com"><img src="background/whatsapp.png" width="25px" height="25px"id="operation5">
              			<a href="Student_Login.php"><img src="background/youtube.png" width="25px" height="25px"id="operation6"></a>
              	
              
            


              
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
            
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
            
              </div>
           
              <div class="text sign-up-text">  <label for="flip"><h1>About now</h1></label></div>
            </div>
      </form>
    
    </div>
    </div>
  </div>
</body>
</html>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>