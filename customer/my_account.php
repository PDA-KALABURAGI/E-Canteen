<!DOCTYPE>
<?php 
session_start();
error_reporting(0);
include("functions/functions.php");

?>
<html>
	<head>
		<title>My Online Shop</title>
		
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			<ul id="menu">
			<li><a href="my_orders.php">My Orders</a></li>
				<li><a href="edit_account.php">Edit Account</a></li>
				<li><a href="change_pass.php">Change Password</a></li>
				<li><a href="delete_account.php">Delete Account</a></li>
				<li><a href="logout.php">Logout</a></li>
			
			</ul>
			
		
			
		</div>
		<!--Navigation Bar ends-->
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				
					
		
			
					
					
					
					
					
					
			</div>
			
			<div id="products_box">
				
				
				
				<?php 
				if(!isset($_GET['my_orders'])){
					if(!isset($_GET['edit_account'])){
						if(!isset($_GET['change_pass'])){
							if(!isset($_GET['delete_account'])){
							
				echo "
				<h2 style='padding:20px;'>Welcome</h2>
				<b>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></b>";
				}
				}
				}
				}
				?>
				
				<?php 
				if(isset($_GET['edit_account'])){
				include("edit_account.php");
				}
				if(isset($_GET['change_pass'])){
				include("change_pass.php");
				}
				if(isset($_GET['delete_account'])){
				include("delete_account.php");
				}
				
				
				?>
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		
	
	
	
	
	</div> 
<!--Main Container ends here-->


</body>
</html>