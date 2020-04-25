<?php
$con = mysqli_connect("localhost","accepto_accepto","hackit_321","accepto_accepto");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,"accepto_accepto");

?> 