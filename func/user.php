<?php

	//include 'core/init.php';
	$link = mysqli_connect("localhost", "root", "53359", "aloud.com");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
	/*function user_exist($uname)
	{
		$sql="SELECT id FROM user_details WHERE username='$uname'";
		$result=mysqli_query($link,$sql);
		$row=mysqli_fetch_row($result);
			
			//if($row[0]!=NULL)
			echo $row[0];

			//else return 0; 

	}
	*/
?>