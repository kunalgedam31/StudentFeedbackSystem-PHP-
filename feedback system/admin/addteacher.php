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
				top:250px;
				left:280px;
				right:270px;
				background-color:#4682B4;
				height:480px;
				padding:40px;
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
				.teacherhead{
					position:absolute;
					top:180;
					left:580px;
					text-align:center;
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
	<div class="teacherhead"><center><font style="font-size:26px; color:gray; font-family:Times new roman; text-align:center; font-style:bold; "> ADD TEACHER <br><br><br> </font></div>
	<div class="main">
	<?php	
		$con = mysql_connect("localhost","root","");
		mysql_select_db("feedback_system", $con) or die(Mysql_error());
	?>
		<form method="post" action="#" style="text-align:right;">
			Teacher name  : <input type="input" id="first_name" name="first_name" placeholder="teacher_name*" style="width:300px; padding:10px; borger:0px;" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
			User name :   <input type="input" id="user_name" name="user_name" placeholder="username*" style="width:300px; padding:10px; borger:0px;" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
			Password :    <input type="password" id="password" name="password" placeholder="password*" style="width:300px; padding:10px; borger:0px;" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
			Confirm password : <input type="password" id="confirm_password" name="confirm_password" placeholder="confirm_password*" style="width:300px; padding:10px; borger:0px;" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
			<?php
			$sql = "select * from branch";
			$result = mysql_query($sql,$con) or die(Mysql_error());
			$records = Mysql_num_rows($result);
			
			?>
			branch :   <select id="branch" name="branch" placeholder="branch*" style="width:300px; padding:10px; borger:0px;" required>
						<option value="Select Branch" disabled selected>--Select Branch--</option>
						<?php
						while($row = Mysql_fetch_array($result))
						{
							$bid=$row['bid'];
							$bname=$row['bname'];
						?>
						<option value="<?php echo $bname; ?>" ><?php echo $bname; }?></option>
						</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
			<?php
			$sql1 = "select * from class";
			$result1 = mysql_query($sql1,$con) or die(Mysql_error());
			$records1 = Mysql_num_rows($result1);
			?>			
			
			class :   <select id="class" name="class" placeholder="class*" style="width:300px; padding:10px; borger:0px;" required>
						<option value="Select Class" disabled selected>--Select Class--</option>
						<?php
						while($row1 = Mysql_fetch_array($result1))
						{
							$cid=$row1['cid'];
							$cname=$row1['cname'];
						?>
						<option value="<?php echo $cname; ?>" ><?php echo $cname; }?></option>
						</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
			
			<?php
			$sql2 = "select * from subject";
			$result2 = mysql_query($sql2,$con) or die(Mysql_error());
			$records2 = Mysql_num_rows($result2);
			?>
			subject :   <select id="subject" name="subject" placeholder="subject*" style="width:300px; padding:10px; borger:0px;" required>
						<option value="Select subject" disabled selected>--Select Subject--</option>
						<?php
						while($row2 = Mysql_fetch_array($result2))
						{
							$sid=$row2['sid'];
							$sname=$row2['sname'];
						?>
						<option value="<?php echo $sname; ?>" ><?php echo $sname; }?></option>
						</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
			
			<br><br>
			<center>
			<input type="submit" name="add" value="Add" style="Background-color:#FF3333; text-align:center; border:0px; font-size:20px; font-family:times new roman; color:white; width:80px; height:auto; padding:5px; text-align:center;">
			</center>
			<br>
		</form>
	</div>
	<?php
	if(isset($_POST['add']))
	{
		$tname=@$_POST['first_name'];
		$uname=@$_POST['user_name'];
		$pass=@$_POST['password'];
		$pass=md5($pass);
		$conpass=@$_POST['confirm_password'];
		$conpass=md5($conpass);
		$branch=@$_POST['branch'];
		$class=@$_POST['class'];
		$subject=@$_POST['subject'];

		$tname=ucwords(strtolower($tname));
		$branch=ucwords(strtolower($branch));
		$class=ucwords(strtolower($class));
		$subject=ucwords(strtolower($subject));
		 
		if($pass!=$conpass)
		{
			echo '<script type="text/javascript">alert("Password does not matched");window.location=\'addteacher.php\';</script>';
		}
		else
		{
			$sql4="select * from teacher WHERE tuser='$uname' ";
			$query=Mysql_query($sql4,$con)or die(Mysql_error());
			$record=Mysql_num_rows($query);
			$row = Mysql_fetch_array($query);
			
			if($record==0)
			{				
				Mysql_query("insert into teacher(tname,tuser,tpass,tconpass,tclass,tbranch,tsubject) values('$tname','$uname','$pass','$conpass','$class','$branch','$subject')") or die(Mysql_error());
				echo '<script type="text/javascript">alert("Teacher is added successfully"); window.location=\'editteacher.php\';</script>';
			}
			else
			{	
				echo '<script type="text/javascript">alert("YOU CANNOT SELECT THIS USERNAME BECAUSE USERNAME HAS TAKEN BEFORE");window.location=\'addteacher.php\';</script>';
			}
		}
	}
?>
	</body>
</html>
