<?php
$active = "register";
include('includes/header.php');
?>
<div class="register"><!-- Need login options for student, teacher and admin -->
	<br><br>
	<h2>Create an Account</h2>
	<br>
	<div id= "register_div" class="signup">
		<input type="text" placeholder="First Name" id="firstName" />
		<br><br>
		<input type="text" placeholder="Last Name" id="lastName" />
		<br><br>
		<input type="text" placeholder="Institution" id="institutionTxt" />
		<br><br>
		<input type="email" placeholder="Email" id = "email"/>
		<br><br>
		<input type ="password" placeholder="Password" id = "password"/>
		<br><br>
		<input type="password" placeholder="Confirm Password" id="confirmPassword" />
		<br><br>
		<button onclick = "registerUser()">Register User</button>
	</div>
	
	
</div>
<?php include('includes/footer.php'); ?>