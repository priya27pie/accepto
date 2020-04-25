<?php
include('header.php');
$id=$_REQUEST['id'];
?>

 <script src="tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<div id="page-wrapper">
<div class="main-page">
<div class="row">
<div id="col-md-12">
<?php
$s="select * from testi where id='".$id."'";
$r=mysqli_query($con,$s);
while($row=mysqli_fetch_array($r)){
	$title=$row['title'];
	$dis=$row['des'];
	 
	 
}
?>
<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
<div class="form-title">
<h4>Edit Testimonial :</h4>
</div>
<div class="form-body">
<form method="post" data-toggle="validator" id="upload_form" action="" enctype="multipart/form-data"> 
<div class="form-group"> 
							
					 
							
<div class="col-md-5">	
<label> Title</label>
<input type="text" class="form-control" value="<?php echo  $title; ?>" name="title"  required>

</div>
 
 <div class="clearfix"></div>
 </div> 
							
	 
 
 

<div class="form-group"> 						
 <div class="col-md-12">
 <label>Description</label>
																	
  <textarea placeholder="write your message" name="des" >  <?php echo $dis; ?> </textarea>

	</div>
<div class="clearfix"></div>
</div>
																		
<div class="form-group"> 
<div class="col-md-6">
<input name="sub" type="submit" class="btn btn-info"   value="Submit"/>

</div>
<div class="clearfix"></div>
</div>

</div>
</form> 
	
	<?php

if(isset($_POST['sub'])){
 $url=$_SERVER['REQUEST_URI']; 
 
$squ="update testi set title='".trim($_POST['title'])."',des='".trim(mysqli_real_escape_string($con,$_POST['des']))."'  where id='".$id."'";
 
$ru=mysqli_query($con,$squ) or die(mysqli_error($con));
if($ru){
	echo "<script>alert(hub;window.location.href='$url';</script>";
}
} 
 
?>
	
</div>
</div>			
</div>	
</div>	
</div>
 </div>
	   

<?php
include('footer.php');
?>
