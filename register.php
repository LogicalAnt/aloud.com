<?php  
 include ('core/init.php');
 

 if(isset($_SESSION['uname']))
{			
	header("location: index.php");
}


if(empty($_POST)==false)
{
	
	$_SESSION['error']="";
	$uname=$_POST['uname'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$pass=$_POST['pass'];
	$rpass=$_POST['rpass'];
	$email=$_POST['email'];
	$remail=$_POST['remail'];
	$addr==$_POST['addr'];

	if(user_exist())
 	{$_SESSION['error']= "Username already exist";}
 	else if(preg_match("/\\s/", $uname)==true)
	{$_SESSION['error']= "Username must not contain spaces"; }


	/*else
		echo "no";

		

	if($row[0])
		
	

	if($pass!= $rpass) {$_SESSION['error']= "Password not matching";}
	//else if(strlen($pass)<6){$_SESSION['error']= "Password at least 6 characters long";}*/

	/*

	mysqli_free_result($result);
		mysqli_close($con);*/


}






?>





<?php include('master_page/register.php'); ?>