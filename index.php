<?php 
include 'core/init.php';

?>



<!DOCTYPE HTML>
<html lang="en-US">


<?php include 'master_page/head.php'; ?>

<body>
	<?php include 'master_page/menu_bar.php'; ?>  <!-- //////////////menu_bar added/////////////// -->
	<?php include 'master_page/tabs.php'; ?>	
	<?php include 'master_page/category.php';?>
	
	




	<div class="container"> <div class="text"><h3>Recent post</h3></div></div>
		

	<?php foreach($all_post as $key=> $val):?>
		<section id="body"> 
		   <div class="container">
		      <div class="row">
			      <div class="col-xs-10 col-sm-10 col-md-8 col-lg-9">
			          <div class="media">
						  <div class="media-left media-middle">
								<a href="#">
									  <img class="media-object" src="img/user.png" alt="...">
								</a>
							  		</div>
							  	
							  	<div class="media-body">
								<h4 class="media-heading"><strong><?php  echo $val['post_title'];?></strong></h4>
								
								<a href="#">
								<!-- user -->
								<span class="user"><?php echo  $val['user_id'] ?></span>
								</a>
								<ul class="list">
									
									<span>
									<?php 
										$date= new DateTime( $val['post_date']);
										echo date_format($date, 'd-M-y');
										/*echo date_format($date, 'd-b-y');*/
									?>

									</span>
									<span class="bullet"> • </span>
									<span><?php echo "3k Views";?></span>

								</ul>
								
								  	


								  	<h5>
								  		<?php echo $val['article']?>
									</h5>
			                         <p><a href="#" class="btn btn-primary" role="button">Read more</a></p>
							  </div>
                        </div>
					</div>
				</div>
			</div>
	<?php endforeach;?>



			<section id="paginton">
                <div class="container">
				  <nav>
					  <ul class="pager">
						<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
						

						<!-- pages from to -->						
 						<li><?php for($a=1; $a<=10; $a++): ?>
						<a href="?page=<?php echo $a?>"> <?php echo $a;?></a>
						<?php endfor; ?> </li>				


						<li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
					  </ul>
					</nav>
				</div>
			</section>
		
		<?php include 'master_page/footer.php'; ?>	<!--  footer added -->
			
	
</body>
</html>