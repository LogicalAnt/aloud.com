<?php  


//mysqli_connect("localhost", "root", "53359", "aloud.com") or die("DATABASE SERVER ERROR");

	$con = mysqli_connect("localhost", "root", "53359", "aloud.com");

	if(mysqli_connect_errno())
	{
		echo "Database Connection Error: " . mysqli_connect_error();
	}

?>