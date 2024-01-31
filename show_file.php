
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
			background: linear-gradient(to left,#36d1dc,#5b86e5);

		}
		.grand_parent{
			width: 100%;
			height: 100vh;
			
			color: white;
		}
		.parent{
			width: 90vw;
			height: auto;
			margin: auto;
			justify-content: space-around;
			display: flex;
            transition: all 0.2 linear;
			flex-wrap: wrap;
		}
		.child{
			overflow: hidden;
			overflow: scroll;
			height: 700px;
            
			
			box-shadow: 0 0 20px #bac3c3;
			flex: 1 1 500px;
			margin: 20px;


		}
		
		@media(max-width:768px){
			.grand_parent{
				height: auto;
			}
		}
		#book{
			width: 600px;
			height: 500px;
		}
		label{
			color: black;
		}
	#delete{
		width: 100px;
		height: 30px;
		order: none;
		border-radius: 5px;
		background: red;
		color: white;
	}
	#update{
		width: 100px;
		height: 30px;
		order: none;
		border-radius: 5px;
		background: green;
		color: white;
	}
	</style>
</head>
<body>
<div class="grand_parent">
	<div class="parent">
		<?php
       include("connection.php");
       $s="select * from mybooks";
       $q=mysqli_query($con,$s);
       while($f=mysqli_fetch_array($q)){
		?>
		<div class="child">
			<center>
			<?php echo "<embed src='".$f['book']."' id='book'>" ?>
			</center>
			<label><label>Book Id :<?php  echo $f['booknumber'];?></label><br>
			<label>Book Name :<?php  echo $f['bname'];?></label><br>
			<label>Book Details :<?php  echo $f['bDetails'];?></label><br>
			<label>Book Author :<?php  echo $f['bAuthor'];?></label><br>
            <label>Book Publication :<?php  echo $f['bPublication'];?></label><br>
            <label>Book Course :<?php  echo $f['Course'];?></label><br>
            <label>Book Class :<?php  echo $f['sClass'];?></label><br>
            <label>Book Semester :<?php  echo $f['Semester'];?></label><br>
            <label>Book Price :<?php  echo $f['BookPrice'];?></label>
          
		</div>
		<?php

	}
	?>
	</div>
</div>
</body>
</html>