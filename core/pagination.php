<?php  

	$con = mysqli_connect("localhost", "root", "53359", "aloud.com");
	//echo $con ? 0:1; 
	$temp= mysqli_query($con, "SELECT * FROM articles");
	
	
	$page = isset( $_GET['page'] ) ? (int) $_GET['page']:1;
	$per_page = (int) 5;
	$tot_post= mysqli_num_rows( $temp);

	$from = $page>1 && $page<ceil($tot_post/$per_page)  ? ($page * $per_page - $per_page): 0;
	
	/*&& $page<ceil($tot_post/ $per_page)*/

	$qry = "SELECT post_id, user_id, post_title, article, post_date from articles LIMIT {$from}, {$per_page}";
	$res=mysqli_query($con,$qry) or die('Error  occured'); 

	for($a=$from; $a<$from+$per_page; $a++)
	{
		$all_post[]=mysqli_fetch_assoc($res);	
		
	}

?>