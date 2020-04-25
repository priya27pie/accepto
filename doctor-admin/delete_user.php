<?php
ob_start();
include("database.php");
$id=$_REQUEST['id'];
$sq="delete from contact where id=".$id."";
$r=mysqli_query($con,$sq);
if($r==1 ){
echo "<script>alert('The user has been deleted thank you');
window.location.href='user.php';
</script>";
} 

?>