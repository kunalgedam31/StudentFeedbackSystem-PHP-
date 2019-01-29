 <?php
	session_start();
 ?>
<html>
	<head>
		<style>
						
			.head{
				font-size:32px;
				background-color:#4682B4;
				color:white;
				text-align:center;
				padding:10px;
				position:absolute;
				top:0px;
				left:0px;
				right:0px;
				z-index:0;
			}
			body{
				background-color:lavender;
			}
			.logout {
				background-color: #f44336;
				border-radius: 2px;
				color: white;
				border:none;
				padding: 10px 28px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				position:absolute;
				top:80px;
				right:30px;
				
			}
			.logout:Hover {
				background-color: #ff4336;
				padding: 11px 29px;
				font-size: 16px;
			}
			.add {
				background-color: #4CAF50;
				border-radius: 2px;
				color: white;
				border:none;
				padding: 10px 28px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				position:absolute;
				top:80px;
				right:180px;
				
			}
			.add:Hover {
				background-color: #4CCF50;
				padding: 11px 29px;
				font-size: 16px;
			}
			.home {
				background-color: #008CBA;
				border-radius: 2px;
				color: white;
				border:none;
				padding: 10px 28px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				position:absolute;
				top:80px;
				left:30px;
				
			}
			.home:Hover {
				background-color: #008CBA;
				padding: 11px 29px;
				font-size: 16px;
			}
			
			
			.main{
				position:absolute;
				top:180px;
				left:280px;
				right:270px;
				
				height:450px;
				padding:20px;
				text-align:center;
				border-radius: 20px;
			}
			
			table {
						border-collapse: collapse;
						width: 100%;
						
						
					}

	
				th{
					height: 50px;
					background-color: #4682B4;
					color: white;
					font-size:18px;
				}
				th,td{
					padding: 15px;
					text-align: left;
					border-bottom: 1px solid #ddd;
				}
				
				tr:nth-child(even) {
					background-color: #f2f2f2;
					}
				tr:hover {
					background-color: #f5f5ff;
					}
				
				.button {
					background-color: #4CAF50;
					border-radius: 2px;
					color: white;
					border:none;
					padding: 10px 30px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 16px;
				}
				.button:hover{
					padding: 11px 31px;
				}
				.edit {
					background-color: #4CAF50;
					border-radius: 2px;
					color: white;
					border:none;
					padding: 8px 26px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 14px;
				}
				.delete {
				background-color: #f44336;
				border-radius: 2px;
				color: white;
				border:none;
				padding: 8px 26px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 14px;
				}
				.edit:hover {
					padding: 9px 27px;
				}
				.delete:hover {
					padding: 9px 27px;
				}
				

		</style>
		<title>
				Student Feedback System
		</title>
	</head>
	<body>
	
	<div class="head"> Student Feedback System </div>
	<a href="http://localhost/feedback%20sytem/index.php" class="logout"> LOGOUT</a>
	<a href="addteacher.php" class="add"> ADD</a>
	<a href="admin.php" class="home"> HOME</a>
	<div class="main">
	<?php	
		$con = mysql_connect("localhost","root","");
		mysql_select_db("feedback_system", $con) or die(Mysql_error());

		$sql = "select * from teacher";
		$result = mysql_query($sql,$con) or die(Mysql_error());
		$records = Mysql_num_rows($result);
		
		if($records==0)
		{
				echo "No teacher is added";
		}
		else
		{
	?>
		<table>
		<tr>
			<th> Teacher Id </th>
			<th> Teacher Name </th>
			<th> User Name </th>
			<th> Branch </th>
			<th> Class </th>
			<th> Subject </th>
			<th> Edit Teacher </th>
			<th> Delete Teacher </th>
		<tr>
	<?php
			while($row = Mysql_fetch_array($result))
			{
				$tid=$row['tid'];
				$tname=$row['tname'];
				$tuser=$row['tuser'];
				$tbranch=$row['tbranch'];
				$tclass=$row['tclass'];
				$tsubject=$row['tsubject'];
	?>
		<tr>
			<td> <?php echo $tid; ?></td>
			<td> <?php echo $tname; ?> </td>
			<td> <?php echo $tuser; ?></td>
			<td> <?php echo $tbranch; ?></td>
			<td> <?php echo $tclass; ?></td>
			<td> <?php echo $tsubject; ?></td>
			<td> <form action="updateteacher.php?ID=<?php echo $tid; ?>" method="post">  <input type="submit" onclick="myFunction()" name="edit" id="edit" class="edit" value="EDIT"> </form> </td>
			<td> <form action="editteacher.php?ID=<?php echo $tid; ?>" method="post">  <input type="submit" name="delete" id="delete" class="delete" value="DELETE"> </form> </td>
		</tr>
	<?php
			}
		}
	?>
	</div>
	
	<?php
		if( isset($_POST['delete']) )
		{
			$tid1=$_GET['ID'];
			$sql2 = "delete from teacher where tid='$tid1' ";
			$result = mysql_query($sql2,$con) or die(Mysql_error());
			echo '<script type="text/javascript">alert("Teacher is deleted sucessfully.");window.location=\'editteacher.php\';</script>';
		}
			
	?>
	

	</body>
</html>
