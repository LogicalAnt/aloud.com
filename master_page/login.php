<!DOCTYPE HTML>
<html lang="en-US">

<?php include ($_server['aloud.com/master_page'].'head.php'); ?> 
<body>
 	  <?php include ('menu_bar.php'); ?>
 	 	<section id="singup">
		  <div class="member">
	    	<div class="member-login" style="text-align: center;">
		
				<form class="login"  action="login.php" method="post" >
	
					<div style="font-size: 28px; padding-bottom: 5px;" class="formtitle">Member Login</div>
					<p  style="color: red;"> <?php echo $_SESSION['status'];?> </p>
					
					<div class="input" style="padding-bottom: 10px;">
						<input style="border: 1px solid greenyellow; padding: 10px 30px;" placeholder="Username" required="" type="text" name="username"> 
						
						<div class="message">
							
						</div>
						
					



					</div>
					<div class="input" style="padding-bottom: 10px;">
					<input style="border: 1px solid greenyellow; padding: 10px 30px;" placeholder="Password" required="" type="password" name="password">
					
					</div>
					<div class="buttons">
						
						<input class="bluebutton" value="Login" style="padding: 10px 20px; color: black border:1px solid; border-radius: 5px; background: #CBE8BA none repeat scroll 0% 0%;" type="submit" name="submit">
						<div class="clear"> </div>
					</div>
					
				</form>

			
				 
		</div>
	  
	  
	  </div>
	</section>
	 <?php include 'footer.php';?> 
</body>
</html>
