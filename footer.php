

<!-- footer -->
<footer id="footer">
	<div class="container">
		<div class="logo-block">
            <a href="index.php">
         		
         		<img src="images/footer-logo-raj.png"  alt=""></a>
        </div>
        	<div class="bottom-block">
        		<div class="col-md-7 col-sm-7 col-sx-12">
	        	<div class="lt">
					<ul>
	                    <li>
	                        <i class="fas fa-phone-volume" style="padding: 0 5px 0 0;color: #FFF;"></i>
	                        +91 97481 69607
	                    </li>
	                    <li>
	                        <i class="fas fa-envelope-open-text"style="padding: 0 5px 0 0;color: #FFF;"></i>
	                        <a href="help@accepto.in">help@accepto.in</a>
	                    </li>
	                </ul><div class="clearfix"></div>
				</div>
				</div>
				<div class="col-md-5 col-sm-5 col-sx-12">
				<div class="rt">
					<a href="#"><h2><i class="fab fa-facebook-f"></i></h2></a>
					<a href="#"><h2><i class="fab fa-twitter"></i></h2></a>
					<a href="#"><h2><i class="fab fa-linkedin-in"></i></h2></a>
					<a href="#"><h2><i class="fab fa-google-plus-g"></i></h2></a>
				</div>
				</div>
		</div>
		<div class="top-block">
			<ul>
				<li><a href="index.php" class="hyper">Home</a></li>
				<li><a href="about.php"class="hyper">About</a></li>
				<li><a href="service.php"class="hyper">Service</a></li>
				<li><a href="online.php" class="hyper">Book online</a></li>
				<li><a href="jobs_blogs.php" class="hyper">Jobs &amp; Blogs</a></li>
				<li><a href="contact.php" class="hyper">Contact Us</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>

	
	</div>
</footer>
<!-- //footer -->


<!-- footer Js -->	  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

    <!-- HADER FIXD -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/style.js"></script>


    <!-- superfish menu -->
    <script src="js/superfish.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            jQuery('ul.sf-menu').superfish();
    
            jQuery('#nav-wrap').prepend('<div id="menu-icon"></div>');
            
            $("#menu-icon").on("click", function(){
                    jQuery(".sf-menu").slideToggle();
                    jQuery(this).toggleClass("active");
            });
        });
    </script>

<!-- banner SLIDER -->


<!--  SLIDER -->

<!-- about-type-text -->
<script src="js/typed.js" type="text/javascript"></script>
<script>
	$(function(){

		$("#typed").typed({
			// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
			stringsElement: $('#typed-strings'),
			typeSpeed: 30,
			backDelay: 500,
			loop: false,
			contentType: 'html', // or text
			// defaults to false for infinite loop
			loopCount: false,
			callback: function(){ foo(); },
			resetCallback: function() { newTyped(); }
		});

		$(".reset").click(function(){
			$("#typed").typed('reset');
		});

	});

	function newTyped(){ /* A new typed object */ }

	function foo(){ console.log("Callback"); }
</script>
<!-- //about-type-text -->



<!-- carousel SLIDER / product NEWS slider -->
  <script type="text/javascript" src="js/owl.carousel.js"></script>
  
    <script type="text/javascript">
        var owl = $('.owl-carousel');
        $("#video-demo").owlCarousel( {
            loop:true,
            autoplay:false,
            autoplayTimeout:5000,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                550:{
                    items:3,
                    nav:true
                },
                768:{
                    items:4,
                    nav:true,
                    loop:true
                }
            }
        });
    </script>

 <script type="text/javascript">
        var owl = $('.owl-carousel');
        $("#testimonials-demo").owlCarousel( {
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                550:{
                    items:3,
                    nav:true
                },
                768:{
                    items:1,
                    nav:true,
                    loop:true
                }
            }
        });
    </script>




</body>
</html>