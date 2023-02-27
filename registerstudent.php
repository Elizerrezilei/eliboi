<?php include 'connect.php'; ?>
 <!DOCTYPE html> <html> <head> 
	<title>Students Registration Page</title> 	
	<?php include 'css.php'; ?> 
	</head> 
	<body> 	
	<form action="register_for_student.php" method="post"> 
	<div class="container"> 		
	<div class="row"> 			
	<a href="studentlogin.php" class="btn btn-primary" style="margin:10px;">Back to Login</a> 		
	</div> 		
	<div class="row"> 		
	<?php if(isset($_REQUEST['error'])){ ?> 	
		<div class="col-lg-12"> 			
		<span class="alert alert-danger" style="display: block;"><?php echo $_REQUEST['error']; ?>
		</span> 		
		</div> 	 	
		<?php } ?> 	 	
		</div> 	 	
		<div class="row"> 		
		<?php if(isset($_REQUEST['success'])){ ?> 		
		<div class="col-lg-12"> 			
		<span class="alert alert-success" style="display: block;"><?php echo $_REQUEST['success']; ?></span> 	
			</div> 	 	
			<?php } ?> 	 	
			</div> 		
			<div class="row"> 		
				<h2 style="margin:15px;" class="text-center">Students Registration Form</h2> 		
				</div> 		<div class="row"> 			<div class="col-lg-12 form-group"> 	
				<label>Full Name</label>		
					<input type="text" name="name" placeholder="Enter Full Name" required="required" class="form-control"> 	
							</div> 		
							</div> 		
							<div class="row"> 			
							<div class="col-lg-12 form-group"> 		
								<label>Username</label>	
				<input type="text" name="username" placeholder="Enter desired username" required="required" class="form-control"> 			
					</div> 		
					</div> 		
					<div class="row"> 			
					<div class="col-lg-12 form-group"> 
									<label>Password</label>	
					<input type="password" name="password" placeholder="Password" required="required" class="form-control">
					
					</div> 		
					</div> 		
					<div class="row"> 			
					<div class="col-lg-12 form-group"> 				
					<button type="submit" class="btn btn-success btn-block"> Add Student</button> 			
					</div> 		
					</div> 	
					</div> 	
					</form>
					 </body> 
					</html> 
					