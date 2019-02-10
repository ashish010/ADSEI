<?php
$active = "home";
include('includes/header.php');
?>
 
<div class="register"><!-- Need login options for student, teacher and admin -->
	
	<div id="register_div" class="signup">
			<h2>Create an Account</h2>
		<input type="text" placeholder="First Name" id="firstName" />
		<input type="text" placeholder="Last Name" id="lastName" />
		<input type="text" placeholder="Institution" id="institutionTxt" />
		<input type="email" placeholder="Email" id = "email"/>
		<input type ="password" placeholder="Password" id = "password"/>
		<input type="password" placeholder="Confirm Password" id="confirmPassword" />
		<button onclick = "registerUser()">Register User</button>
	</div>
	
	
</div>
	
<?php include('includes/footer.php'); ?>
