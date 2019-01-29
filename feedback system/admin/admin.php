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
			.active {
				background-color: #4CAF50;
				border-radius:20px;
				color: white;
				border:none;
				
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 14px;
				
				position:absolute;
				top:280px;
				left:430px;
				width:250px;
				height:100px;
				font-size:32px;
				padding-top:50px;
			}
			.editbranch {
				background-color: #4CAF50;
				border-radius: 20px;
				color: white;
				border:none;
				
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 14px;
				position:absolute;
				top:280px;
				left:130px;
				width:250px;
				height:100px;
				font-size:32px;
				padding-top:50px;
			}
			.editclass {
				background-color: #4CAF50;
				border-radius: 20px;
				color: white;
				border:none;
				
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 14px;
				position:absolute;
				top:80px;
				left:430px;
				width:250px;
				height:100px;
				font-size:32px;
				padding-top:50px;
			}
			.editteacher {
				background-color: #4CAF50;
				border-radius: 20px;
				color: white;
				border:none;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 14px;
				position:absolute;
				top:80px;
				left:130px;
				width:250px;
				height:100px;
				font-size:32px;
				padding-top:50px;
			}
			.editsubject {
				background-color: #4CAF50;
				border-radius: 20px;
				color: white;
				border:none;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 14px;
				position:absolute;
				top:480px;
				left:130px;
				width:250px;
				height:100px;
				font-size:32px;
				padding-top:50px;
			}
			.logout1 {
				background-color: #f44336;
				border-radius: 20px;
				color: white;
				border:none;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 14px;
				position:absolute;
				top:480px;
				left:430px;
				width:250px;
				height:100px;
				font-size:32px;
				padding-top:50px;
			}
			.editteacher:hover{
				background-color: #4CBF50;
			}
			.active:hover{
				background-color: #4CBF50;
			}
			.editbranch:hover{
				background-color: #4CBF50;
			}
			.editclass:hover{
				background-color: #4CBF50;
			}
			.editsubject:hover{
				background-color: #4CBF50;
			}
			.logout1:hover{
				background-color: #ff4336;
			}
			
			.main{
				position:absolute;
				top:150px;
				bottom:20px;
				left:280px;
				right:270px;
				background-color:#4682B4;
				height:650px;
				padding:20px;
				text-align:center;
				border-radius: 20px;
			}
			
		</style>
		<title>
				Student Feedback System
		</title>
	</head>
	<body>
	
	<div class="head"> Student Feedback System </div>
	<a href="http://localhost/feedback%20sytem/index.php" class="logout"> LOGOUT</a>
	<div class="main">
		<a href="activatestudent.php" class="active"> Activate Student</a>
		<a href="editbranch.php" class="editbranch"> Edit Branch</a>
		<a href="editteacher.php" class="editteacher"> Edit Teacher</a>
		<a href="editclass.php" class="editclass"> Edit Class</a>
		<a href="editsubject.php" class="editsubject"> Edit Subject</a>
		<a href="http://localhost/feedback%20sytem/index.php" class="logout1"> Logout</a>
	</div>

	</body>
</html>