<?php 
	include 'core/init.php';
	//include 'func/user.php';
	
	if(empty($_POST)==false)
	{
		$uname= mysqli_real_escape_string($con,$_POST['username']);
		$pass = $_POST['password'];
		$_SESSION['status']="";
	}
			

	// user registered/not 
	$sql="SELECT * FROM user_details WHERE username='$uname'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_row($result);

	//user logged in
	if(isset($_SESSION['uname']))
	{			
		header("location: index.php");
	}
	
	//invalid user
	else if($row[0]==NULL || $uname!=$row[1]) 
	{
		
		if(empty($_POST)==true)$_SESSION['status']="";
		else $_SESSION['status']="user not exist";
		//header("location: login.php");
		
	}
	
	//valid user
	else
	{
		if($pass==$row[5])
		{
			$_SESSION['uname']=$uname;
		
			header("location: index.php");
			
		}
		else $_SESSION['status']="Incorrect password";
	}

	mysqli_free_result($result);
	mysqli_close($con);








?>

<?php include 'master_page/login.php';?>


