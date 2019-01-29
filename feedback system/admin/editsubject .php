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
				.addsubject{
					position:absolute;
					top:80px;
					right:180px;
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
	<div class="addSubject">
		<form action="#" method="post">
			<input type="text" id="sname" name="sname" placeholder="Subject Name*" style="width:350px; height:30px; padding:5px; margin-top:5px; " required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="submit" name="add" id="add" class="button" value="ADD">
		</form>
	</div>
	
	<div class="head"> Student Feedback System </div>
	<a href="http://localhost/feedback%20sytem/index.php" class="logout"> LOGOUT</a>
	<a href="admin.php" class="home"> HOME</a>
	<div class="main">
	<?php
		
		$con = mysql_connect("localhost","root","");
		mysql_select_db("feedback_system", $con) or die(Mysql_error());
		$sql = "select * from subject";
		$result = mysql_query($sql,$con) or die(Mysql_error());
		$records = Mysql_num_rows($result);
		
		if($records==0)
		{
				echo "No Records Found";
		}
		else
		{
	?>
		<table>
		<tr>
			<th> Subject Id </th>
			<th> Subject Name </th>
			<th> Edit Subject </th>
			<th> Delete Subject </th>
		<tr>
	<?php
			while($row = Mysql_fetch_array($result))
			{
				$sid=$row['sid'];
				$sname=$row['sname'];
	?>
		<tr>
			<td> <?php echo $sid; ?></td>
			<td> <?php echo $sname; ?> </td>
			<td> <form action="editsubject.php?ID=<?php echo $sid; ?>" method="post">  <input type="submit" onclick="myFunction()" name="edit" id="edit" class="edit" value="EDIT"> </form> </td>
			<td> <form action="editsubject.php?ID=<?php echo $sid; ?>" method="post">  <input type="submit" name="delete" id="delete" class="delete" value="DELETE"> </form> </td>
		</tr>
	<?php
			}
		}
	?>
	</div>
	
	<?php
		$s_name="";
		if(isset($_POST['add']))
		{
		$s_name=$_POST['sname'];	
		$sql1 = "insert into subject(sname) values('$s_name')";
		$result = mysql_query($sql1,$con) or die(Mysql_error());
		echo '<script type="text/javascript">alert("Subject is added sucessfully.");window.location=\'editsubject.php\';</script>';
		}
		if( isset($_POST['delete']) )
		{
			$sid1=$_GET['ID'];
			$sql2 = "delete from subject where sid='$sid1' ";
			$result = mysql_query($sql2,$con) or die(Mysql_error());
			echo '<script type="text/javascript">alert("Subject is deleted sucessfully.");window.location=\'editsubject.php\';</script>';
		}
		
		if(isset($_POST['edit']))
		{
			$prompt_msg = "Enter the new subject name";
			$sid3=$_GET['ID'];
			$result = mysql_query("Select sname from subject where sid='$sid3' ");
			$row1 = Mysql_fetch_array($result);
			$promptvalue=$row1['sname'];
			$name = prompt($prompt_msg,$promptvalue);
			
		}
		if(isset($_GET['subject']))
		{
			$s_name=$_GET['subject'];
			$sid2=$_GET['ID'];
			$sql3 = "update subject set sname='$s_name' where sid='$sid2' ";
			$result = mysql_query($sql3,$con) or die(Mysql_error());
			echo '<script type="text/javascript">alert("Subject is edited sucessfully.");window.location=\'editsubject.php\';</script>';
		}	
		function prompt($prompt_msg,$promptvalue){
		echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."','".$promptvalue."');  var a=document.write(answer);  window.location.href = window.location.href+'&subject='+answer; </script> ");
		return($a);
		}
	?>
	

	</body>
</html>
