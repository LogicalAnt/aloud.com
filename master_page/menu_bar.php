<section id="menu"> 
               <div class="container">
			       <nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <div class="icon">
						  <!--  <img src="img/hom.png" alt=""><a href="#"></a></img> -->
						   <a href="index.php"><img src="img/logo_sample_ 3.png" alt="aloud.com"></a>

						  <!--  <img src="img/logo_sample_ 3.png" alt="Aloud"><a href="index.php"></a></img> -->
						  </div>
						  
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  
						  
						  <ul class="nav navbar-nav navbar-right">
							<li><a href="#"><?php echo $_SESSION['uname'];?></a></li>
							<li><a href="login.php">Login</a></li>
							<li><a href="logout.php">Logout</a></li>
							<li><a href="register.php">sign up</a></li>

							
						  </ul>



						  <form class="navbar-form navbar-left" role="search">
							<div class="form-group">
							  <input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						  </form>
						</div><!-- /.navbar-collapse -->
					  
					  </div><!-- /.container-fluid -->
					</nav>
			   </div>   
			</section>