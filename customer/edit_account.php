		<?php 	
				include("includes/db.php"); 
				error_reporting(0);
				
				$user = $_SESSION['customer_email'];
				
				$get_customer = "select * from customers where customer_email='$user'";
				
				$run_customer = mysqli_query($con, $get_customer); 
				
				$row_customer = mysqli_fetch_array($run_customer); 
				
				$c_id = $row_customer['customer_id'];
				$name = $row_customer['customer_name'];
				$email = $row_customer['customer_email'];
				$pass = $row_customer['customer_pass'];
				$country = $row_customer['customer_country'];
				$city = $row_customer['customer_city'];
				$contact = $row_customer['customer_contact'];
				$address= $row_customer['customer_address'];
				$image = $row_customer['customer_image'];
				
				
		?>
			
		<form action="" method="post" enctype="multipart/form-data">
					
					<table align="center" width="750">
						
						<tr align="center">
							<td colspan="6"><h2>Update your Account</h2></td>
						</tr>
						
						<tr>
							<td align="right">Customer Name:</td>
							<td><input type="text" name="c_name" value="<?php echo $name;?>" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Email:</td>
							<td><input type="text" name="c_email" value="<?php echo $email;?>" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Password:</td>
							<td><input type="password" name="c_pass" value="<?php echo $pass;?>" required/></td>
						</tr>
						
						
						
						
					
						
						<tr>
							<td align="right">Customer Contact:</td>
							<td><input type="text" name="c_contact" value="<?php echo $contact;?>"/></td>
						</tr>
						
						<tr>
							<td align="right">Customer USN</td>
							<td><input type="text" name="c_usn" value="<?php echo $usn;?>"/></td>
						</tr>
						
						
					<tr align="center">
						<td colspan="6"><input type="submit" name="update" value="Update Account" /></td>
					</tr>
					
					
					
					</table>
				
				</form>
		
		
		
	
<?php 
	if(isset($_POST['update'])){
	
		
		$ip = getIp();
		
		$customer_id = $c_id;
		
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_pass = $_POST['c_pass'];
	
		$c_contact = $_POST['c_contact'];
		$c_address = $_POST['c_usn'];
	
		
		
		 $update_c = "update customers set customer_name='$c_name', customer_email='$c_email', customer_pass='$c_pass', customer_contact='$c_contact',customer_address='$c_usn', where customer_id='$customer_id'";
	
		$run_update = mysqli_query($con, $update_c); 
		
		if($run_update){
		
		echo "<script>alert('Your account successfully Updated')</script>";
		echo "<script>window.open('my_account.php','_self')</script>";
		
		}
	}





?>










