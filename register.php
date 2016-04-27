<?php  
 include ('core/init.php');
 

 if(isset($_SESSION['uname']))
{			
	header("location: index.php");
}

$_SESSION['error']="";
if(empty($_POST)==false)
{
	
	//user data validation start//
	$_SESSION['error']="";
	$uname=mysqli_real_escape_string($con, $_POST['uname']);//$_POST['uname'];
	$fname=mysqli_real_escape_string($con, $_POST['fname']);//$_POST['fname'];
	$lname=mysqli_real_escape_string($con, $_POST['lname']);//$_POST['lname'];
	$pass= mysqli_real_escape_string($con, $_POST['pwd']);//$_POST['pwd'];
	$rpass=mysqli_real_escape_string($con, $_POST['rpwd']);//$_POST['rpwd'];
	$email= filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //$_POST['email'];
	$remail=filter_var($_POST['remail'], FILTER_SANITIZE_EMAIL);//$_POST['remail'];
	$addr== mysqli_real_escape_string($con, $_POST['addr']);//$_POST['addr'];

	if(user_exist())
 	{$_SESSION['error']= "Username already exist";}
 	else if(preg_match("/\\s/", $uname)==true)
	{$_SESSION['error']= "Username must not contain spaces"; }
	else if($pass!=$rpass)
	{$_SESSION['error']= "Password not matching";}
	else if(strlen($pass)<5)
	{$_SESSION['error']="Password at least 5 chararters long"; }
	else if(strlen($pass)> 32)
	{$_SESSION['error']= "Password too long"; }
	
	else if(user_email_exist())
	{$_SESSION['error']= "User email already taken"; }	
	else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false || ($email!=$remail) )
	{$_SESSION['error']= "Invalid Email address"; }	
	//iser data validation end//


	else 
	{
		$qry="INSERT INTO `aloud.com`.`user_details` ( `username`, `first_name`, `last_name`, `email`, `password`) VALUES ( '$uname', '$fname', '$lname', '$email', '$pass');";
		mysqli_query($con, $qry);
		
	}



}






?>





<?php include('master_page/register.php'); ?>