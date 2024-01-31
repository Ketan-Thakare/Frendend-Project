<?php
include("connection.php");
?>
<Html>  
<head>   
<title>  
Registration Page  
</title> 
<style>
div{
border:solid 2px;
width:300px;
height:500px;
box-shadow:2px 2px 2px 2px gray;
}
#name{
	width:200px;
	height:30px;
	
}
#phone{
		width:200px;
	height:30px;
	
}
#email{
	width:200px;
	height:30px;
	
}
#pass{
	width:200px;
	height:30px;
	
}
#repass{
	width:200px;
	height:30px;
	
}
div{
	background:linear-gradient(to left,#9900cc,#ff0099);
}
</style> 
<script>
function validat(){
	var name=form1.fullname.value;
	if(name==""){
		alert("place enter you are name!");
		return folse;
	}
	var phone=form1.phone.value;
	if(phone==""){
		alert("place enter you are phone no!");
		return folse;
	}
		var email=form1.email.value;
		if(email==""){
		alert("place enter you are email id!");
		return folse;
	}
			var pass=form1.pass.value;
			if(pass==""){
		alert("place enter password!");
		return folse;
	}
				var repass=form1.repass.value;
				if(repass==""){
		alert("place enter repass password!");
		return folse;
	}
	if(pass!=repass){
			alert("place enter password not mach!");
		return folse;
	}
		alert(" registration successfull!");
		return folse;
}
</script>
</head>  
<body bgcolor="Lightskyblue">
<center>  
<div>
<form action="login.php" method="GET" name="form1" onsubmit="validat();">  <h1> registration form</h1>
<label> Full name </label>         
<input type="text" id="name" name="fullname" size="15"/> <br> <br>  
Phone :      
<input type="text" id="phone" name="phone" size="10"/> <br> <br>  
Email:  
<input type="email" id="email" name="email"/> <br>    
<br> <br>  
Password:  
<input type="Password" id="pass" name="pass"> <br>   
<br> <br>  
Re-type password:  
<input type="Password" id="repass" name="repass"> <br> <br>  
<input type="submit" value="Submit"/>  <button>cancel</button>
</form>  
</label></div>
<?php
$nam=$_GET['fullname'];
$phon=$_GET['phone'];
$emai=$_GET['email'];
$pas=$_GET['pass'];
$repas=$_GET['repass'];
$data="INSERT INTO login VALUES('$nam','$phon','$emai','$pas','$repas')";
$CHE=MYSQLI_QUERY($conection,$data);
mysql_errno($data);
if($CHE){
	echo "";
}
else{
	echo "Data not insert into database!";

	}
?>
</body>  
</html>  