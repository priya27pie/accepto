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
$s="select * from article where id='".$id."'";
$r=mysqli_query($con,$s);
while($row=mysqli_fetch_array($r)){
	$title=$row['title'];
	$dis=$row['des'];
	$img=$row['img'];
	 
}
?>
<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
<div class="form-title">
<h4>Edit Article :</h4>
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
	
  <div class="clearfix">
</div></div>
<div class="form-group"> 
 <div class="col-md-3">
<label> Picture</label>
  <td><img src='../images/<?php echo  $img; ?>' width='80' height='50'></td>
</div>
<div class="clearfix"></div>

</div>
<div class="form-group"> 
 <div class="col-md-3">
<label>Update Picture</label>
 <input type="file" name="file"  id="fileChooser"    />
</div>
<div class="clearfix"></div>

</div>

<div class="form-group"> 						
 <div class="col-md-12">
 <label>Description</label>
																	
  <textarea placeholder="write your message" name="des">  <?php echo $dis; ?> </textarea>

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
$today=date("Y-m-d");	
if($_FILES['file']['name'])
{
$select=mysqli_query($con,"select img from article where id='".$id."'");
$image=mysqli_fetch_array($select);
unlink("../images/".$image['img']);
$img1=$today.$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"../images/".$img1);	
$sq="update article set title='".trim($_POST['title'])."',des='".trim(mysqli_real_escape_string($con,$_POST['des']))."',img='".$img1."' where id='".$id."'";
$r=mysqli_query($con,$sq) or die(mysqli_error($con));
if($r){
	echo "<script>alert(hub;window.location.href='$url';</script>";
}
}
else{	
$sq="update article set title='".trim($_POST['title'])."', des='".trim(mysqli_real_escape_string($con,$_POST['des']))."' where id='".$id."'";
$r=mysqli_query($con,$sq) or die(mysqli_error($con));
if($r){
	echo "<script>alert('Update Success');window.location.href=' $url';</script>";
		
}
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
