<!DOCTYPE html>
<html lang="en">

<head>
	<title>GreenWorks | Sign up</title>
	<link rel="stylesheet" href="./style/utilities.css" />
	<link rel="stylesheet" href="./style/style-inputs.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
	<link rel="icon" type="image/x-icon" href="./images/miniLOGO.svg">

</head>

<body>
	<a href="index.php">
		<button class="back">
			<i class="fas fa-arrow-left" alt="&lt;"></i>
		</button>
	</a>
	<div class="wrapper">
		<form class="login-form reg" action="" method="post" novalidate>
			<div class="form-header heading-group">
				<h4>Welcome to</h4>
				<img src="./images/logo.svg" alt="logo" class="logo" />
				<h5>Register</h5>
			</div>
			<div class="form-control signup">
				<div class="col">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="firstname" class="inputField" id="inputFirstName" required />
						<div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="lastname" class="inputField" id="inputLastName" required />
						<div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="inputField" id="inputUsername" required />
						<div class="invalid-feedback"></div>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="inputField" id="inputEmail" required />
						<div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="inputField" id="inputPassword" maxlength="25"
							required />
						<div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" name="cpassword" class="inputField" id="inputConfirmPassword"
							maxlength="25" required />
						<div class="invalid-feedback"></div>
					</div>
				</div>
			</div>
			<button class="btn-secondary" type="submit">Sign up</button>
			<p class="register">
				Already have an account?
				<a href="login.php">Sign in.</a>
			</p>
		</form>
	</div>
	<script src="js/registerValidate.js"></script>
	<script src="js/animations.js"></script>
</body>

</html>