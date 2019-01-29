<?php
			include 'views/header.php';
			session_start();
?>

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
					top:180;
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
					background-color: #4CAF50;;
					border-radius: 2px;
					color: white;
					border:none;
					padding: 10px 28px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 14px;
				}
				
				.signuphead{
					font-size:24px;
					color:DARKGRAY;
					text-align:center;
					position:absolute;
					top:140px;
					left:200px;
					right:200px;
				}
			
				
			</style>
		</head>
		
		<body>
			
			<center>
			<div class="signuphead">STUDENT SIGN UP</div>
			<div class="login">
			<?php	
				$con = mysql_connect("localhost","root","");
				mysql_select_db("feedback_system", $con) or die(Mysql_error());
			?>
				<form href="index.php" name="submit" method="post"><br>
					<input type="text" id="name" name="name" placeholder="Name*" style="width:350px; height:30px; padding:5px; margin-top:5px; " required><br>
					<input type="text" id="roll" name="roll" placeholder="Roll Number*" style="width:350px; height:30px; padding:5px; margin-top:5px; " required><br>
					<?php
					$sql = "select * from branch";
					$result = mysql_query($sql,$con) or die(Mysql_error());
					$records = Mysql_num_rows($result);					
					?>
					
					 <select id="branch" name="branch" placeholder="branch*" style="width:350px; height:30px; padding:5px; margin-top:5px;" required>
						<option value="Select Branch" disabled selected>--Select Branch--</option>
						<?php
						while($row = Mysql_fetch_array($result))
						{
							$bid=$row['bid'];
							$bname=$row['bname'];
						?>
						<option value="<?php echo $bname; ?>" ><?php echo $bname; }?></option>
					</select><br>
					
					<?php
					$sql1 = "select * from class";
					$result1 = mysql_query($sql1,$con) or die(Mysql_error());
					$records1 = Mysql_num_rows($result1);
					?>
					<select id="class" name="class" placeholder="class*" style="width:350px; height:30px; padding:5px; margin-top:5px;" required>
						<option value="Select Class" disabled selected>--Select Class--</option>
						<?php
						while($row1 = Mysql_fetch_array($result1))
						{
							$cid=$row1['cid'];
							$cname=$row1['cname'];
						?>
						<option value="<?php echo $cname; ?>" ><?php echo $cname; }?></option>
					</select>
						<br><BR>
					
					<input type="submit" name="submit" id="submit" class="button" value="SIGN UP"><br>
				</form>
			</div></CENTER>
			<?php
			if(isset($_POST['submit']))
			{
				$sname=@$_POST['name'];
				$roll=@$_POST['roll'];
				$pass=md5($roll);
				$branch=@$_POST['branch'];
				if($branch=="")
				{
					echo '<script type="text/javascript">alert("Please select branch"); window.location=\'signup.php\';</script>';
				}
				else
				{
				$class=@$_POST['class'];
				
				if($class=="")
				{
				echo '<script type="text/javascript">alert("Please select class"); window.location=\'signup.php\';</script>';
				}
				else
				{
				$sname=ucwords(strtolower($sname));
				$branch=ucwords(strtolower($branch));
				$class=ucwords(strtolower($class));
				 
					$sql4="select * from student WHERE roll='$roll' ";
					$query=Mysql_query($sql4,$con)or die(Mysql_error());
					$record=Mysql_num_rows($query);
					$row = Mysql_fetch_array($query);
					
					if($record==0)
					{				
						Mysql_query("insert into student(studname,roll,studuser,studpass,studbranch,studclass,admin,feedback) values('$sname','$roll','$roll','$pass','$branch','$class','0','0')") or die(Mysql_error());
						echo '<script type="text/javascript">alert("Signup Succefully"); window.location=\'index.php\';</script>';
					}
					else
					{	
						echo '<script type="text/javascript">alert("Roll number is already signup please contact to your admin");window.location=\'signup.php\';</script>';
					}
				}
				}
			}
		?>
		</body>
	</html>

	
	