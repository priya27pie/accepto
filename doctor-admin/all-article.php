<?php

include('header.php');
?>
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
	
	function send(){
		
		if(window.confirm("Do You Really Want To Delete The Product??")){
			
			return true;
		}
		else return false;
		
		
	}
  </script>
    
		<div id="page-wrapper">
			<div class="main-page">
				
					<div class="tables">
					
						<h3 class="title1">All Article</h3>
					<div class="panel-body widget-shadow">
			
	
			<table class="table" id="example">
							<thead>
								<tr>  
								  <th>Sl</th>
								   <th>Title</th>
								  
								   <th>Description</th> 
								    <th>Image</th>   
								   
								<th>Edit/Delete</th>
								</tr>
							</thead>
							<tbody>

<?php

$count=1;
$sq="select * from article order by id desc ";
$r=mysqli_query($con,$sq);
while($row=mysqli_fetch_array($r)){
	//$status=$row['status'];
$pro_id=$row['id'];
	echo "	<tr>
								  <td>$count</td>
								   <td>".$row['title']."</td>
								 
								  <td>".$row['des']."</td>
								   <td><img src='../images/".$row['img']."' width='80' height='50'></td>
								  

								      
								

								   <td><a href='edit_article.php?id=$pro_id' class='label label-info'>Edit</a>
								  <a href='delete_article.php?id=$pro_id' class='label label-danger' onclick='return send();'>Delete</a>
								 </td>
								</tr>";

++$count;
								}


?>							
								</tbody></table>
					</div></div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy;  Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank"> Incrementer Technology Solutions Pvt. Ltd.</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>