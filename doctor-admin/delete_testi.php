<?php
ob_start();
include("database.php");
$id=$_REQUEST['id'];
$sq="delete from testi where id=".$id."";
$r=mysqli_query($con,$sq);
if($r==1 ){
echo "<script>alert('The Testimonial has been deleted thank you');
window.location.href='all-testi.php';
</script>";
} 

?>