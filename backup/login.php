<?php 
	
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
	
	if($_POST['submit'])
	{

		include_once("connect.php");
		

		$typed_username=strip_tags($_POST['username']);
		$typed_password=strip_tags($_POST['password']);

		

		$details= "SELECT id, username, password from user_details where username= '$typed_username' AND access='1' LIMIT 1";

		


		$qry = mysqli_query($con ,$details);
		
		if($qry)
		{
			
			$val=mysqli_fetch_row($qry);
			
			$db_name=$val[1];
			$db_pass=$val[2];
			echo $db_name, ' ';
		}
	
		
		if($typed_username==$db_name && $typed_password==$db_pass)
		{

			
			$_SESSION['username']=$typed_username;
			$_SESSION['id']= $val[0];

			
			header('Location: index.php');
		}
		
		else
		{

			echo "Incorrect user or password!!!!!";
		}

		

		
	}

?>








<!DOCTYPE html>
<html> 
<head>
	<title></title> 
</head>
<body>

	<form method ="post" action="login.php">
		<input type="text" name="username"   placeholder="Username"> <br/>
			
		<input type="password"  placeholder="Password" name="password"> <br/>
		<input type="submit" name="submit" value="login">
	</form>
</body>
</html>