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
		$branch=$_SESSION['BRANCH'];
		$class=$_SESSION['CLASS'];
		$con = mysql_connect("localhost","root","");
		mysql_select_db("feedback_system", $con) or die(Mysql_error());
		
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
		if(isset($_GET['password']))
		{
			$spass=$_GET['password'];
			$sid2=$_GET['ID'];
			$spass=md5($spass);
			$sql3 = "update student set studpass='$spass' where studid='$sid2' ";
			$result = mysql_query($sql3,$con) or die(Mysql_error());
			echo '<script type="text/javascript">alert("Password is updated successfully.");window.location=\'activatestudent.php\';</script>';
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
	<?php
		$a1=0;
		$a2=0;
		$a3=0;
		$a4=0;
		$a5=0;
		$a6=0;
		$sum=0;
		$sql8 = "select * from feedback where tid='$id'";
		$result8 = mysql_query($sql8,$con) or die(Mysql_error());
		$records8 = Mysql_num_rows($result8);
		while($row = Mysql_fetch_array($result8))
		{
			$q1=$row['q1'];
			$q2=$row['q2'];
			$q3=$row['q3'];
			$q4=$row['q4'];
			$q5=$row['q5'];
			$q6=$row['q6'];
			$average=$row['average'];
			$a1=$a1+$q1;
			$a2=$a2+$q2;
			$a3=$a3+$q3;
			$a4=$a4+$q4;
			$a5=$a5+$q5;
			$a6=$a6+$q6;
			$sum=$sum+$average;
		}
		$a1=$a1/$records8;
		$a2=$a2/$records8;
		$a3=$a3/$records8;
		$a4=$a4/$records8;
		$a5=$a5/$records8;
		$a6=$a6/$records8;
		$sum=$sum/$records8;
		
	?>
	<div class="head"> Student Feedback System </div>
	<form action="teacher.php" method="post">  <input type="submit" name="logout" id="logout" class="logout" value="LOGOUT"> </form>
	<div class="name">Hello, <?php echo $name; ?> </div>
	
	<div class="header">STUDENT FEEDBACK'S</div>
	<div class="main">
		<form name="feedback" method="post" action="student.php?ID=<?PHP echo $tid1; ?>">
		_____________________________________________________________________________<BR><BR>
		1. Is teaching interactive ?<br><br>
		  &nbsp&nbsp&nbsp  Average Rating :<font style="color:orange;"> <?php echo round($a1,1); ?> out of 10</font><BR>
		  _____________________________________________________________________________<BR>
		  <BR>
		2. Is the evaluation done on time ?<br><br>
		  &nbsp&nbsp&nbsp Average Rating : <font style="color:orange;"><?php echo round($a2,1); ?> out of 10</font><BR>
		  _____________________________________________________________________________<BR><BR>
		3. How much syllabus was covered ?<br><br>
		  &nbsp&nbsp&nbsp Average Rating : <font style="color:orange;"><?php echo round($a3,1); ?> out of 10</font><BR>
		  _____________________________________________________________________________<BR><BR>
		4. How good was the structure of the course ?<br> <br>
		  &nbsp&nbsp&nbsp Average Rating : <font style="color:orange;"><?php echo round($a4,1); ?> out of 10</font><BR>
		  _____________________________________________________________________________<BR><BR>
		5. Is the teacher is friendly ? <br><br>
		  &nbsp&nbsp&nbsp Average Rating : <font style="color:orange;"><?php echo round($a5,1); ?> out of 10</font><BR>
		  _____________________________________________________________________________<BR><BR>
		6. Was there clarity in teaching of the course ? <br><br>
		  &nbsp&nbsp&nbsp Average Rating : <font style="color:orange;"><?php echo round($a6,1); ?> out of 10</font><BR>
		  _____________________________________________________________________________<BR><BR><BR>
		
		7. Overall student feedback average rating is ? <br><br>
		  &nbsp&nbsp&nbsp Average Rating : <font style="color:orange;"><?php echo round($sum,1); ?> out of 10</font><BR>
		  _____________________________________________________________________________<BR><BR><BR>
		  
		</form>	
	</div>
	</body>
</html>
