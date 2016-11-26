<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Create account</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="style/style.css">

</head>
<body>

	<section>
		<div>
			<h1>Register</h1>
			<form action="createaccount.php" method="post">
				<div class="row">
					<div class="col xs-12">
						<label for="user_name">username</label>
						<input type="text" name="user_name" id="user_name" required>
					</div>
				</div>

				<div class="row">
					<div class="col xs-12 sm-6">
						<label for="email">E-mail</label>
						<input type="email" name="user_email" id="email" required>
					</div>
					<div class="col xs-12 sm-6">
						<label for="email_re">confirm email</label>
						<input type="email" name="user_email_re" id="email_re" required>
					</div>
				</div>

				<div class="row">
					<div class="col xs-12 sm-6">
						<label for="password">password</label>
						<input type="password" name="user_pass" id="password" required>
					</div>
					<div class="col xs-12 sm-6">
						<label for="password_re">confirm password</label>
						<input type="password" name="user_pass_re" id="password_re" required>
					</div>
				</div>

				<input type="submit" name="submit" id="submit" value="register"><br>
			</form>
		</div>
	</section>

</body>
</html>