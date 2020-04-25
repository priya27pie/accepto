<?php 
	include("header.php");
?>

<div class="all-banner">
    <img src="images/contact-banner.jpg" alt="" style="width:100%; height:auto;">
    <div class="desc">
        <div class="container">

        </div>
    </div>
</div>

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="col-md-12">

			
			<div class="contact-left" style="">
				<h4>Contact Form</h4>
				<form action="" method="post">
					<div class="form-left">
					<label>Name :</label>
					<input type="text" placeholder="Enter Name" name="name" required />
					</div>
					<div class="form-right">
					<label>Phone no :</label>
					<input type="text" placeholder="Enter Phone"  name="phn"  required />
					</div>
					<div class="clearfix"></div>
					<div class="form-left">
					<label>Email :</label>
					<input type="text" name="email" placeholder="Enter Email"   required />
					</div>
					<div class="form-right">
				
                    <div class="form-left">
                    
					</div>
					<textarea name="msg" placeholder="Enter Your Message"  required ></textarea>
					<input type="submit" name="sub" value="Send">
				</form>				
			</div>
		</div>
		
	</div>
</div>
<!-- //contact -->

<?php 
include("footer.php");
?>