<?php  
	
	function user_exist()
	{
	
		 //include 'db/connect.php';
		 global $con;
		 $uname=$_POST['uname'];
		 echo $uname;
		 $qry="SELECT * FROM user_details where username='$uname' ";
		 $res=mysqli_query($con,$qry) or die('error error'); 
		 $row=mysqli_fetch_row($res);
		 return $row[0] ? 1:0;
	
	} 

?>