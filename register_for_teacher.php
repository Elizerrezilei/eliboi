<?php
 include 'connect.php';
	$name=mysqli_real_escape_string($con,$_REQUEST['name']);
	 	$username=mysqli_real_escape_string($con,$_REQUEST['username']); 
		$password=mysqli_real_escape_string($con,$_REQUEST['password']); 	
		$usertype=mysqli_real_escape_string($con,$_REQUEST['usertype']);
	echo	$qr=mysqli_query($con,"INSERT into users (name,username,password,usertype) 
		values ('".$name."','".$username."','".$password."','1')"); 	
		if($qr){ 		
		header("Location:registerteacher.php?success=Added Successfully"); 	} 	else{ 	
			header("Location:registerteacher.php?error=Failed to Add "); 	} ?>
			 <?php 
			