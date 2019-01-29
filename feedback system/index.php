<?php
	session_start();
	include 'views/header.php';
?>
<!doctype>
	<html>
		<head>
			<title>
				Student Feedback System
			</title>
			<style>
				
				.login{
					
					background-color:#4682B4;
					text-align:center;
					padding:20px;
					position:absolute;
					top:200;
					left:450px;
					right:450px;
					margin-left:auto;
					margin-Right:auto;
					box-shadow:gray 5px 5px;
					border:2px 2px 2px 2px;
					border-radius:5px;
					color:white;
					font-size:15px;
				}
				
				body{
					background-color:lavender;
				}
				.button {
					background-color: #4CAF50;
					border-radius: 2px;
					color: white;
					border:none;
					padding: 10px 28px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 14px;
				}
				
				a{
					Text-decoration:None;
					color:Red;
				}
				a:hover{
					color:light red;
				}
			</style>
		</head>
		
		<body>
			
			<center>
			<div class="login">
				<form action="#" method="post">
					<input type="text" id="username" name="username" placeholder="Username*" style="width:350px; height:30px; padding:5px; margin-top:5px; " required><br> 
					<input type="password" id="password" name="password" placeholder="Password*" style="width:350px; height:30px; padding:5px; margin-top:5px; " required><br>
					<select name="log-as" id="log-as" placeholder="Log As*" style="width:350px; height:30px; padding:5px; margin-top:5px; " required>
						  <option value="untitled">Log As*</option>
						  <option value="staff">Staff</option>
						  <option value="student">Student</option>
					</select> <br><br>
					<input type="submit" name="login" id="login" class="button" value="LOG IN"><br>
				</form>
				
				NEW STUDENT CLICK HERE TO <a href="signup.php"> SIGN UP </a>
			</div></CENTER>
		</body>
	</html>
	<?php
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$UserName=$_POST['username'];
			$Password=$_POST['password'];	
			$type=$_POST['log-as'];
			
			if($type=="untitled" and $UserName=="admin123" and $Password=="admin123") 
			{	
					header("location:admin/admin.php");
			}
			if($type=="untitled")
			{
				echo '<script type="text/javascript">alert("Please select log as field");</script>';
			}
			else
			{
				$Password=md5($Password);
				$con = mysql_connect("localhost","root","");
				mysql_select_db("feedback_system", $con) or die(Mysql_error());
				if($type=="student")
				{
					$sql = "select * from student where studuser='$UserName' and studpass='$Password'";
					$result = mysql_query($sql,$con) or die(Mysql_error());
					$records = Mysql_num_rows($result);
					$row = Mysql_fetch_array($result);
					if ($records==0)
					{
					echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
					}
					else if($row['admin']==0)
					{
					echo '<script type="text/javascript">alert("You are registered but not activated please contact to your administrator");window.location=\'index.php\';</script>';	
					}	
					else
					{
						session_start();
						$_SESSION['ID']=$row['studid'];
						$_SESSION['NAME']=$row['studname'];
						$_SESSION['ROLL']=$row['roll'];
						$_SESSION['FEEDBACK']=$row['feedback'];
						$_SESSION['BRANCH']=$row['studbranch'];
						$_SESSION['CLASS']=$row['studclass'];
						header("location:student/student.php");
					}
				}
				if($type=="staff")
				{
					$sql1 = "select * from teacher where tuser='$UserName' and tpass='$Password'";
					$result1 = mysql_query($sql1,$con) or die(Mysql_error());
					$records1 = Mysql_num_rows($result1);
					$row1 = Mysql_fetch_array($result1);
					if ($records1==0)
					{
					echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
					}	
					else
					{
						session_start();
						$_SESSION['ID']=$row1['tid'];
						$_SESSION['NAME']=$row1['tname'];
						$_SESSION['BRANCH']=$row1['tbranch'];
						$_SESSION['CLASS']=$row1['tclass'];
						header("location:teacher/teacher.php");
					}
				}
			}
		}
	?>