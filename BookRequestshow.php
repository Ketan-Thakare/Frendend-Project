<!DOCTYPE html>
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
		table{
			width: 100%;
			
			overflow: hidden;
			overflow: scroll;
		}
		#main{
			width: 1100px;
			height: 500px;
			overflow: hidden;
			overflow: scroll;
		}
		#delete{
			width: 100px;
			height: 30px;
			background: red;
			color: white;
			border: none;
			box-shadow: 2px 2px 2px ;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<br><br><br>
	<center>
<div id="main">
	<center><label><h1>Student Books Request</h1></label></center>
	<table width="100%" border="">
		<tr>
			<th>id</th>
            <th>Book Name</th>
			<th>Book Details</th>
			<th>Book Author</th>
            <th>Book Publication</th>
			<th>Course Name</th>
			<th>Class Name</th>
			<th>Semester</th>
			<th>Delete</th>



		</tr>
		<?php
        include("connection.php");
        $s="select * from bookrequest";
        $q=mysqli_query($con,$s);
        while($f=mysqli_fetch_array($q)){
		?>
       <tr>
       	<th><?php echo $f['id'];?></th>
       	<th><?php echo $f['Bookname'];?></th>
       	<th><?php echo $f['Details'];?></th>
       	<th><?php echo $f['Author'];?></th>
       	<th><?php echo $f['Publication'];?></th>
       	<th><?php echo $f['CourseName'];?></th>
       	<th><?php echo $f['ClassName'];?></th>
       	<th><?php echo $f['Semester'];?></th>
       	
       	
       	<th><a href="deleteRequestrecord.php?id=<?php echo $f['id'];?>"><button id="delete">Delete</button></a></th>
       </tr>

		<?php
	}
	?>
	</table>
</div>
</center>
</body>
</html>