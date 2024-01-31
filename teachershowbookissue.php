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
			width: 1000px;
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
	<center><label><h1>Student File issue Report</h1></label></center>
	<table width="100%" border="">
		<tr>
			<th>Book id</th>
            <th>Book Name</th>
			<th>Book issue</th>
			<th>Delete</th>
		</tr>
		<?php
        include("connection.php");
        $s="select * from bookissue";
        $q=mysqli_query($con,$s);
        while($f=mysqli_fetch_array($q)){
		?>
       <tr>
       	<th><?php echo $f['bookno'];?></th>
       	<th><?php echo $f['bookname'];?></th>
       	<th><?php echo $f['bookissue'];?></th>
       	<th><a href="deleteissuerecord.php?id=<?php echo $f['bookno'];?>"><button id="delete">Delete</button></a></th>
       </tr>

		<?php
	}
	?>
	</table>
</div>
</center>
</body>
</html>