<!DOCTYPE HTML>
<html>

	<?php include ('head.php');?>
	<body>
		<?php include 'menu_bar.php'; ?> 
		<div class="container-fluid">
			<div class="row">
				<h2 class="demo-text">Post Article</h2>
				<div class="container">
				<div class="title">
                    <div class="col-md-9"> 
					    <div class="input-group">
							<span class="input-group-addon" id="basic-addon1">Title</span>
							  <input type="text" name="title" class="form-control" placeholder="max 150 character" aria-describedby="basic-addon1">
						</div>
					  </div>
				 </div>
				<div class="row">
					<div class="col-lg-12 nopadding">
						<textarea id="txtEditor"></textarea> 
						
					</div>
				</div>
				</div>
				
				<div class="container" style="margin-top: 5px; margin-left: 6%;">
					<button onclick="func()"; type="submit" class="btn btn-default">Submit</button>	
				</div>
				<p id="para"></p>
				
			</div>
		</div>
		
		<?php include 'footer.php'; ?>	<!--  footer added -->
		
	</body>
</html>
