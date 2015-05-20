<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="login-form-container">
		<h1>Reminva Login</h1>
	 	<form action="../../Actions/login_action.php" method="post" id="login-reg-form">
	 		<label for="login_email">Email: </label><br>
	 			<input name="login_email" type="text" class="login-form-field" maxlength="256" /><br>

	 		<label for="login_email" >Password: </label><br>
	 			<input name="login_pass" type="password" class="login-form-field" id="pass-field" maxlength="20"/><br>
	 		<button type="submit" name="login_submit" disabled id="log-reg-button">Submit</button>
			<a href="register.php">Or Register Here</a>
		</form>
	</div>

	<script type="text/javascript" src="../../resources/lib/JS/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="../js/reminvaJS.js"></script>
</body>
</html>


