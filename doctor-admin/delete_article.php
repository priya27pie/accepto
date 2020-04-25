<?php
ob_start();
include("database.php");
$id=$_REQUEST['id'];
$sq="delete from article where id=".$id."";
$r=mysqli_query($con,$sq);
if($r==1 ){
echo "<script>alert('The article has been deleted thank you');
window.location.href='all-article.php';
</script>";
} 

?>