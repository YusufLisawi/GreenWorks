<?php
include_once "models/dologin.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>GreenWorks | Login</title>
	<link rel="stylesheet" href="./style/utilities.css" />
	<link rel="stylesheet" href="./style/style-inputs.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
	<link rel="icon" type="image/x-icon" href="./images/miniLOGO.svg">
</head>

<body class="window">
	<a href="index.php">
		<button class="back">
			<i class="fas fa-arrow-left" alt="&lt;"></i>
		</button>
	</a>
	<div class="wrapper">
		<form class="login-form" action="" method="post" autocomplete="off" novalidate>
			<div class="form-header heading-group">
				<h4>Welcome to</h4>
				<img src="./images/logo.svg" alt="logo" class="logo" />
				<h5>sign in</h5>

				<?php if ($showPopUp):?>
				<div class="isExistUser"
					style="color: #ff3c3c; margin-bottom: -1.5rem; margin-top: 1rem; font-size: 1.1rem;">
					<?php echo $_SESSION['message']; unset($_SESSION['message'])?>
				</div>
				<?php endif; ?>

			</div>
			<!--User Email-->
			<div class="form-control">
				<div class="form-group">
					<label id="labelE">Email</label>
					<input type="text" name="email" id="inputEmail" class="inputField" required />
					<div class="invalid-feedback"></div>
				</div>
				<!--User Password-->
				<div class="form-group">
					<label id="labelP">Password</label>
					<input type="password" name="password" id="inputPass" class="inputField" required />
					<div class="invalid-feedback"></div>
				</div>
			</div>
			<button class="btn-secondary" type="submit">Sign in</button>
			<p class="register">
				Don't have an account?
				<a href="register.php">Sign up.</a>
			</p>
		</form>
	</div>
	<script type="module" src="js/validation.js"></script>
	<script src="js/animations.js"></script>
	<?php include 'inc/script.php' ?>
</body>

</html>