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
			.name {
				
				color: gray;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 22px;
				position:absolute;
				top:80px;
				left:30px;
				font-style:Italic;
				
			}
			.name:Hover {
				
				font-size: 23px;
			}
			
			
			.main{
				position:absolute;
				top:190px;
				left:20%;
				right:20%;
				height:auto;
				padding:25px;
				font-size:20px;
				color:white;
				border-radius: 20px;
				background-color: #4682B4;
				text-transform:uppercase;
			}
			.else{
				position:absolute;
				top:190px;
				left:20%;
				right:20%;
				height:auto;
				padding:25px;
				font-size:20px;
				color:white;
				border-radius: 20px;
				background-color: #4682B4;
				text-transform:uppercase;
			}
				
				.button {
					background-color: #f44336;
					border-radius: 2px;
					color: white;
					border:none;
					padding: 12px 36px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 18px;
				}
				.button:hover{
					padding: 13px 38px;
				}
				.update {
					background-color: #4CAF50;
					border-radius: 2px;
					color: white;
					border:none;
					padding: 11px 22px;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 14px;
					top:80px;
					right:180px;
					position:absolute;
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
				.update:hover {
					padding: 12px 27px;
				}
				.delete:hover {
					padding: 9px 27px;
				}
				.header{
					color: gray;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 30px;
					position:absolute;
					top:140px;
					left:0px;
					right:0px;
					text-align:center;
				}
				input[type=range] {
				  -webkit-appearance: none;
				  margin: 18px 0;
				  width: 80%;
				}
				input[type=range]:focus {
				  outline: none;
				}
				input[type=range]::-webkit-slider-runnable-track {
				  width: 100%;
				  height: 8.4px;
				  cursor: pointer;
				  animate: 0.2s;
				  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
				  background: #3071a9;
				  border-radius: 1.3px;
				  border: 0.2px solid #010101;
				}
				input[type=range]::-webkit-slider-thumb {
				  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
				  border: 1px solid #000000;
				  height: 36px;
				  width: 16px;
				  border-radius: 3px;
				  background: #ffffff;
				  cursor: pointer;
				  -webkit-appearance: none;
				  margin-top: -14px;
				}
				input[type=range]:focus::-webkit-slider-runnable-track {
				  background: #367ebd;
				}
				input[type=range]::-moz-range-track {
				  width: 100%;
				  height: 8.4px;
				  cursor: pointer;
				  animate: 0.2s;
				  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
				  background: #3071a9;
				  border-radius: 1.3px;
				  border: 0.2px solid #010101;
				}
				input[type=range]::-moz-range-thumb {
				  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
				  border: 1px solid #000000;
				  height: 36px;
				  width: 16px;
				  border-radius: 3px;
				  background: #ffffff;
				  cursor: pointer;
				}
				input[type=range]::-ms-track {
				  width: 100%;
				  height: 8.4px;
				  cursor: pointer;
				  animate: 0.2s;
				  background: transparent;
				  border-color: transparent;
				  border-width: 16px 0;
				  color: transparent;
				}
				input[type=range]::-ms-fill-lower {
				  background: #2a6495;
				  border: 0.2px solid #010101;
				  border-radius: 2.6px;
				  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
				}
				input[type=range]::-ms-fill-upper {
				  background: #3071a9;
				  border: 0.2px solid #010101;
				  border-radius: 2.6px;
				  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
				}
				input[type=range]::-ms-thumb {
				  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
				  border: 1px solid #000000;
				  height: 36px;
				  width: 16px;
				  border-radius: 3px;
				  background: #ffffff;
				  cursor: pointer;
				}
				.bor{
					border-width:2px;
					border-color:white;
				}
				.side{
					position:absolute;
					width:220px;
					height:400px;
					top:130px;
					left:0px;
					background-color: #4682B4;
					font-size:20px;
					text-decoration:none;
					padding:10px;
					color:white;		
					border-radius:10px;
				}
				.tab{
					background-color: #4CAF50;
					border-radius: 2px;
					color: white;
					border:none;
					padding: 9px 20px;
					text-align: center;
					text-decoration: none;
					font-size: 12px;
					width:220px;
					text-transform:Uppercase;
				}
				.tab:hover{
					padding: 10px 20px;
					background-color: #4CDF50;
				}
				
		</style>
		<title>
				Student Feedback System
		</title>
	</head>
	<body>
	<?php
		$name=$_SESSION['NAME'];
		$id=$_SESSION['ID'];
		$roll=$_SESSION['ROLL'];
		$feedback=$_SESSION['FEEDBACK'];
		$branch=$_SESSION['BRANCH'];
		$class=$_SESSION['CLASS'];
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
		if(isset($_POST['update']))
		{
			$prompt_msg = "Enter the new student password";
			$name = prompt($prompt_msg);	
		}
		function prompt($prompt_msg){
		$a="";
		echo("<script type='text/javascript'> var answer = prompt('Enter the new password');  var a=document.write(answer);  window.location.href = student.php+'&password='+answer; </script> ");
		return($a);
		}
		if(isset($_GET['password']))
		{
			$spass=$_GET['password'];
			$spass=md5($spass);
			$sql3 = "update student set studpass='$spass' where studid='$id' ";
			$result = mysql_query($sql3,$con) or die(Mysql_error());
			echo '<script type="text/javascript">alert("Password is updated successfully.");window.location=\'student.php\';</script>';
		}
	if(isset($_POST['submit']))
	{
		$tid=@$_GET['ID'];
		$mark1=@$_POST['mark1'];
		$mark2=@$_POST['mark2'];
		$mark3=@$_POST['mark3'];
		$mark4=@$_POST['mark4'];
		$mark5=@$_POST['mark5'];
		$mark6=@$_POST['mark6'];
		$average=($mark1+$mark2+$mark3+$mark4+$mark5+$mark6)/6;
		Mysql_query("insert into feedback(q1,q2,q3,q4,q5,q6,sid,tid,average) values('$mark1','$mark2','$mark3','$mark4','$mark5','$mark6','$id','$tid','$average')") or die(Mysql_error());
		echo '<script type="text/javascript">alert("Feedback is successfully added"); window.location=\'student.php\';</script>';
	}
	if(isset($_POST['logout']))
		{
			$i=1;
			if (!isset($_SESSION))
			{
				session_start();
			}

			$_SESSION['ID']=null;
			$_SESSION['NAME']=null;
			$_SESSION['ROLL']=null;
			$_SESSION['FEEDBACK']=null;						
			$_SESSION['BRANCH']=null;
			$_SESSION['CLASS']=null;
			unset($_SESSION['ID']);
			unset($_SESSION['NAME']);
			unset($_SESSION['BRANCH']);
			unset($_SESSION['CLASS']);
			if ($i==1) 
			{
				echo '<script type="text/javascript">window.location="/feedback%20sytem/";</script>';
				exit;
			}	
		}
	?>
	
	<div class="head"> Student Feedback System </div>
	<form action="student.php" method="post">  <input type="submit" name="logout" id="logout" class="logout" value="LOGOUT"> </form>
	
	<div class="name">Hello, <?php echo $name; ?> </div>
	<div class="side">
	<center>SUBJECTS</center><br>
	<?php
	$sql = "select * from teacher where tbranch='$branch' and tclass='$class'";
	$result = mysql_query($sql,$con) or die(Mysql_error());
	$records = Mysql_num_rows($result);
	while($row = Mysql_fetch_array($result))
	{
		$tid=$row['tid'];
		$tname=$row['tname'];
		$tuser=$row['tuser'];
		$tbranch=$row['tbranch'];
		$tclass=$row['tclass'];
		$tsubject=$row['tsubject'];
	?>
	<form action="student.php?ID=<?php echo $tid; ?>" method="post">  <input type="submit" name="subject" id="edit" class="tab" value="<?php echo $tsubject; ?>"> </form>

	<?php
	}
	
	?>
	</div>
	<?php
	if( isset($_POST['subject']) )
	{
		$tid1=$_GET['ID'];
		
		$sql8 = "select * from feedback where sid='$id' and tid='$tid1'";
		$result8 = mysql_query($sql8,$con) or die(Mysql_error());
		$records8 = Mysql_num_rows($result8);
		if($records8==0)
		{
		
	?>
	
	<div class="header">FEEDBACK FORM</div>
	<div class="main">
		<form name="feedback" method="post" action="student.php?ID=<?PHP echo $tid1; ?>">
		_____________________________________________________________________________<BR><BR>
		1. Is teaching interactive ?<br>
		  &nbsp&nbsp&nbsp 1 <input type="range" min="1" max="10" value="1" step="1" name="mark1"> 10<BR>
		  _____________________________________________________________________________<BR>
		  <BR>
		2. Is the evaluation done on time ?<br>
		  &nbsp&nbsp&nbsp 1 <input type="range" min="1" max="10" value="1" step="1" name="mark2"> 10<BR>
		  _____________________________________________________________________________<BR><BR>
		3. How much syllabus was covered ?<br>
		  &nbsp&nbsp&nbsp 1 <input type="range" min="1" max="10" value="1" step="1" name="mark3">10<BR>
		  _____________________________________________________________________________<BR><BR>
		4. How good was the structure of the course ? <br>
		  &nbsp&nbsp&nbsp 1 <input type="range" min="1" max="10" value="1" step="1" name="mark4">10<BR>
		  _____________________________________________________________________________<BR><BR>
		5. Is the teacher is friendly ? <br>
		  &nbsp&nbsp&nbsp 1 <input type="range" min="1" max="10" value="1" step="1" name="mark5">10<BR>
		  _____________________________________________________________________________<BR><BR>
		6. Was there clarity in teaching of the course ? <br>
		  &nbsp&nbsp&nbsp 1 <input type="range" min="1" max="10" value="1" step="1" name="mark6">10<BR>
		  _____________________________________________________________________________<BR><BR><BR>
		
		<center>
		<input type="submit" name="submit" id="submit" class="button" value="SUBMIT"><br>
		</center>
		</form>	
	</div>
	<?php 
		}
		else
		{
		?>
		<div class="else">
		<center>THANKYOU!!!! FEEDBACK IS SUBMITTED</center>
		</div>
		<?php
		}
	}
	?>
	
	</body>
</html>
