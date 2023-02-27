<?php session_start(); include 'connect.php'; 
	if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){ 	
	$username=mysqli_real_escape_string($con,$_REQUEST['username']); 	
	$password=mysqli_real_escape_string($con,$_REQUEST['password']); 	
	$qr=mysqli_query($con,"select * from users where username='".$username."' and password='".$password."'"); 	
	if(mysqli_num_rows($qr)>0){ 		
	$data=mysqli_fetch_assoc($qr); 		
	$_SESSION['user_data']=$data; 		
	if($data['usertype']==1){ 		
		header("Location:teacher_home.php");	 		}
		 	} 	
		else{ 		
		header("Location:index.php?error=Invalid Login Details");		 
			} } else{ 	
			header("Location:index.php?error=Please Enter Username and Password"); }