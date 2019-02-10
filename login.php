<?php
$active = "login";
include('includes/header.php');
?>

<br><br>
	<div id= "login_div" class="main-div">
	  <h1>Welcome to ADSEI</h1>
		<input type="email" placeholder="Email" id = "email"/>
		<input type ="password" placeholder="Password" id = "password"/>
		<input type="submit" value="Login" onclick = "login()">
		<input type="submit" value="Forgot Password" onclick = "resetPass()">
	</div>
	<div id= "user_div" class="loggedIn-div">
	<h3 id = "heading_">Login Successful</h3>
	<button onclick="logout()">Logout</button>
	</div>
	
<?php include('includes/footer.php'); ?>