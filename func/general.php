<?php  
	
	function user_exist()
	{
	
		 //include 'db/connect.php';
		 global $con;
		 $uname=mysqli_real_escape_string($con, $_POST['uname']);
		 
		 $qry="SELECT * FROM user_details where username='$uname' ";
		 $res=mysqli_query($con,$qry) or die('error error'); 
		 $row=mysqli_fetch_row($res);
		 return $row[0] ? 1:0;
	
	}

	function user_email_exist()
	{
	
		 //include 'db/connect.php';
		 global $con;
		 $email=mysqli_real_escape_string($con, $_POST['email']);
		 
		 $qry="SELECT * FROM user_details where email='$email' ";
		 $res=mysqli_query($con,$qry) or die('error error'); 
		 $row=mysqli_fetch_row($res);
		 return $row[0] ? 1:0;
	
	} 

?>