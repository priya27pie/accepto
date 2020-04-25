<?php
include('doctor-admin/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Accepto Technology</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Motorbike Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/superfish.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
<!--//Custom Theme files-->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet"> 

<!-- //web-fonts --> 
</head> 
<body> 

	<!-- header -->
<!-- Header Start -->
<header class="navbar navbar-default navbar-fixed-top">
        <!--
		<div class="top-block">
            <div class="container"> 
                <div class="row">
                	<div class="col-md-6 col-sm-6 col-xs-12">
                		<div class="lt">
                			<ul>
		                        <li>
		                            <i class="fas fa-phone-volume" style="padding: 0 5px 0 0;color: #FFF;"></i>
		                            +91 7980785847
		                        </li>
		                      
		                    </ul><div class="clearfix"></div>
                		</div>
                	</div>
                	<div class="col-md-6 col-sm-6 col-xs-12">
                		<div class="rt">
                			<ul>
		                        <li>
		                        
		                        </li>
		                        <li>
		                        </li>
		                    </ul><div class="clearfix"></div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
        -->

        <div class="last-block">
            <div class="container"> 
                <div class="row">

					<div class="col-md-3 col-sm-3 col-sx-6">
						<div class="logo-block">
                            <a href="index.php">
                         	<img src="images/logo-1.png"  alt="">
                          	</a>
                        </div>
					</div>

                    <div class="col-md-9 col-sm-9 col-sx-6">
                        <div class="navigation">
                            <nav id="nav-wrap">
                                <ul class="sf-menu" id="example">
					                <li <?php if (stripos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
					                        echo 'class="active"';}
					                    ?>><a href="index.php" class="hyper">Home</a>
					                </li>
					                <li <?php if (stripos($_SERVER['REQUEST_URI'], 'corona.php') !== false) {
					                        echo 'class="active"';}
					                    ?>><a href="corona.php" class="hyper">CORONA INFO</a>
					                </li>

									<li <?php if (stripos($_SERVER['REQUEST_URI'], 'service.php') !== false) {
					                        echo 'class="active"';}
					                    ?>><a href="service.php"class="hyper">Service</a>
					                </li>
                                    
                                      <li <?php if (stripos($_SERVER['REQUEST_URI'], 'online.php') !== false) {
                                            echo 'class="active"';}
                                        ?>><a href="online.php" class="hyper">Book online</a>
                                    </li>
                                    
                                      <li <?php if (stripos($_SERVER['REQUEST_URI'], 'jobs_blogs.php') !== false) {
                                            echo 'class="active"';}
                                        ?>><a href="jobs_blogs.php" class="hyper">Jobs &amp; Blogs</a>
                                    </li>                                    
                                       <li <?php if (stripos($_SERVER['REQUEST_URI'], 'contact.php') !== false) {
                                            echo 'class="active"';}
                                        ?>><a href="contact.php" class="hyper">Contact Us</a>
                                    </li>
                                    
                                 
                                    
                                <div class="clearfix"></div>
                                </ul>

                            </nav>
                        </div>
                    </div>
                    <!--
                    <div class="col-md-2 col-sm-2 col-xm-2">
                    	<div class="booking">
                    		<a href="#" style=""><img src="images/book-now.gif" class="book-now" alt=""></a>
                    	</div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    
</header>
	<!-- //header -->
	