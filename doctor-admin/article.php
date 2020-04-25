<?php
 include('header.php');
?> 
 
  <script src="tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<div id="page-wrapper">
<div class="main-page">
<div class="row">
<div id="col-md-12">
<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
<div class="form-title">
<h4>Add Article :</h4>
</div>
<div class="form-body">
<form method="post" data-toggle="validator" id="upload_form" action="" enctype="multipart/form-data"> 
<div class="form-group"> 
							
					 
							
<div class="col-md-5">	
<label> Title</label>
<input type="text" class="form-control" placeholder="Title" name="title"  required>

</div>
 
 <div class="clearfix"></div>
 </div> 
							
				
		<div class="form-group"> 
	
  <div class="clearfix">
</div></div>
<div class="form-group"> 
 <div class="col-md-3">
<label>Picture</label>
 <input type="file" name="file"  id="fileChooser"  required  />
</div>
<div class="clearfix"></div>

</div>

<div class="form-group"> 						
 <div class="col-md-12">
 <label>Description</label>
																	
  <textarea placeholder="write your message" name="des"> </textarea>

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
	 
	$_FILES['file'] ['name'];
	$img1=$_FILES['file'] ['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],"../images/".$img1); 
$sq="insert into article(title,des,img,date) 
values('".$_POST['title']."','".$_POST['des']."','".$img1."',CURDATE())";
$r=mysqli_query($con,$sq) or mysqli_error($con);
if($r==1){
echo  "<script>alert('Success');window.location.href='article.php';</script>";
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