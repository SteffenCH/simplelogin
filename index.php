<?php
// check if user is already logged in, if logged in there is no need to show login screen
if (session_status() == PHP_SESSION_NONE) {
	session_start();
	if(isset($_SESSION['loggedin']) == true){
		die(header("Location: ../pagetoredirectto")); // page to redirect to if user is already logged in
	}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login - Cityfind</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="./style/style.css">

</head>
<body>

	<section>
		<div>
			<h1>Login</h1>
			<form action="backend/loginuser.php" method="post">
				<div class="row">
					<div class="col xs-12 sm-8 center">
						<label for="name_or_email">Firmanavn eller email</label>
						<input type="text" name="user_nameoremail" id="name_or_email" required>
					</div>
					<div class="col xs-12 sm-8 center">
						<label for="password">Kodeord</label>
						<input type="password" name="user_pass" id="password" required>
					</div>
					<div class="col xs-12 sm-8 center">
						<input type="submit" name="submit" id="submit" value="login">
					</div>
				</div>
			</form>
		</div>
	</section>

</body>
</html>