	<ul class="nav" id="side-menu">
						<li <?php if (stripos($_SERVER['REQUEST_URI'],'dashboard.php')!== false) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="dashboard.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
 
					
					<li <?php if (stripos($_SERVER['REQUEST_URI'],'article.php')!== false  ||stripos($_SERVER['REQUEST_URI'],'all-article.php')!== false  ) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fa fa-file-text-o nav_icon"></i>Article<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							<li>
									<a href="article.php">Add Article</a>
								
									<a href="all-article.php">All Article</a>
								</li>
									 
								
								</ul>
						</li>	
										
				 




	
					<li <?php if (stripos($_SERVER['REQUEST_URI'],'testi.php')!== false  ||stripos($_SERVER['REQUEST_URI'],'all-testi.php')!== false  ) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fa fa-file-text-o nav_icon"></i>Testimonial<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							<li>
									<a href="testi.php">Add Testimonial</a>
								
									<a href="all-testi.php">All Testimonial</a>
								</li>
									 
								
								</ul>
						</li>	












				 
													
<li <?php if (stripos($_SERVER['REQUEST_URI'],'user.php')!== false   ) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fa fa-file-text-o nav_icon"></i>User<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							<li>
									<a href="user.php">User</a>
								
									 
								</li>
									 
								
								</ul>
						</li>	
													
						
								
						
						
					</ul>