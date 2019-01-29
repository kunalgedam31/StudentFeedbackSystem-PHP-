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
				left:0px;
				right:5px;
				height:450px;
				padding:5px;
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
					padding: 8px 22px;
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
				padding: 8px 22px;
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
	<?php
		$con = mysql_connect("localhost","root","");
		mysql_select_db("feedback_system", $con) or die(Mysql_error());
		
		if( isset($_POST['activate']) )
		{
			$sid7=$_GET['ID'];
			$sql2 = "update student set admin='1' where studid='$sid7'";
			$result = mysql_query($sql2,$con) or die(Mysql_error());
			echo '<script type="text/javascript">window.location=\'activatestudent.php\';</script>';
		}
		if( isset($_POST['deactivate']) )
		{
			$sid8=$_GET['ID'];
			$sql2 = "update student set admin='0' where studid='$sid8'";
			$result = mysql_query($sql2,$con) or die(Mysql_error());
			echo '<script type="text/javascript">window.location=\'activatestudent.php\';</script>';
		}
		if( isset($_POST['delete']) )
		{
			$sid1=$_GET['ID'];
			$sql2 = "delete from student where studid='$sid1' ";
			$result = mysql_query($sql2,$con) or die(Mysql_error());
			echo '<script type="text/javascript">alert("Student is deleted sucessfully.");window.location=\'activatestudent.php\';</script>';
		}
		if(isset($_POST['edit']))
		{
			$prompt_msg = "Enter the new student password";
			$name = prompt($prompt_msg);	
		}
		function prompt($prompt_msg){
		$a="";
		echo("<script type='text/javascript'> var answer = prompt('Enter the new password');  var a=document.write(answer);  window.location.href = window.location.href+'&password='+answer; </script> ");
		return($a);
		}
		if(isset($_GET['password']))
		{
			$spass=$_GET['password'];
			$sid2=$_GET['ID'];
			$spass=md5($spass);
			$sql3 = "update student set studpass='$spass' where studid='$sid2' ";
			$result = mysql_query($sql3,$con) or die(Mysql_error());
			echo '<script type="text/javascript">alert("Password is updated successfully.");window.location=\'activatestudent.php\';</script>';
		}		
	?>
	<div class="head"> Student Feedback System </div>
	<a href="http://localhost/feedback%20sytem/index.php" class="logout"> LOGOUT</a>
	
	<a href="admin.php" class="home"> HOME</a>
	<div class="main">
	<?php	
		

		$sql = "select * from student";
		$result = mysql_query($sql,$con) or die(Mysql_error());
		$records = Mysql_num_rows($result);
		
		if($records==0)
		{
				echo "No Student found";
		}
		else
		{
	?>
		<table>
		<tr>
			<th> Student Id </th>
			<th> Student Name </th>
			<th> Roll Number</th>
			<th> User Name </th>
			<th> Password </th>
			<th> Branch </th>
			<th> Class </th>
			<th> Status </th>
			
			<th> Update Password </th>
			<th> Delete Student </th>
		<tr>
	<?php
			while($row = Mysql_fetch_array($result))
			{
				$sid=$row['studid'];
				$sname=$row['studname'];
				$sroll=$row['roll'];
				$suser=$row['studuser'];
				$spass=$row['studpass'];
				$sbranch=$row['studbranch'];
				$sclass=$row['studclass'];
				$admin=$row['admin'];
				
	?>
		<tr>
			<td> <?php echo $sid; ?></td>
			<td> <?php echo $sname; ?> </td>
			<td> <?php echo $sroll; ?> </td>
			<td> <?php echo $suser; ?></td>
			<td> <?php echo $spass; ?> </td>
			<td> <?php echo $sbranch; ?></td>
			<td> <?php echo $sclass; ?></td>
			<td> <?php  if($admin==0)
						{
						?>
						<form action="activatestudent.php?ID=<?php echo $sid; ?>" method="post">  <input type="submit" name="activate" id="activate" class="edit" value="ACTIVATE"> </form>
						<?php
						}	
						else
						{
						?>
						<form action="activatestudent.php?ID=<?php echo $sid; ?>" method="post">  <input type="submit" name="deactivate" id="deactivate" class="delete" value="DEACTIVATE"> </form>	
						<?php 
						}
				?></td>
			
			<td> <form action="activatestudent.php?ID=<?php echo $sid; ?>" method="post">  <input type="submit" name="edit" id="edit" class="edit" value="UPDATE"> </form> </td>
			<td> <form action="activatestudent.php?ID=<?php echo $sid; ?>" method="post">  <input type="submit" name="delete" id="delete" class="delete" value="DELETE"> </form> </td>
		</tr>
	<?php
			}
		}
	?>
	</div>
	
	
	

	</body>
</html>
