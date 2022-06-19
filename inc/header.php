<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./style/main-style.css" type="text/css" />
	<link rel="stylesheet" href="./style/components.css" type="text/css" />
	<link rel="stylesheet" href="./style/utilities.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="icon" type="image/x-icon" href="./images/miniLOGO.svg">
	<?php if(isset($style_inputs)) echo '<link rel="stylesheet" href="./style/style-inputs.css" type="text/css" />'?>
	<title>GreenWorks</title>
</head>

<body>
	<div class="to-top" data-aos="fade-up">
		<i class="fas fa-arrow-up"></i>
	</div>
	<div class="shapes about contact" data-aos="fade-in"></div>
	<div class="shapes r about contact" data-aos="fade-up"></div>
	<div class="container">
		<header data-aos="fade-in">
			<div class="flex">
				<a href="index.php"><img class="logo" src="./images/logo.svg" alt="GreenWorks Logo" /></a>
				<nav>
					<ul class="flex-nav">
						<li>
							<a href="mygreenworks.php"
								<?php if(isset($link)){if($link == 1) echo 'class="active-link"';}?>>My
								greenWorks</a>
						</li>
						<li><a href="greenworks.php"
								<?php if(isset($link)){if($link == 2) echo 'class="active-link"';}?>>greenWorks</a>
						</li>
						<li><a href="about.php"
								<?php if(isset($link)){if($link == 3) echo 'class="active-link"';}?>>About us</a></li>
						<li><a href="contact.php"
								<?php if(isset($link)){if($link == 4) echo 'class="active-link"';}?>>Contact us</a></li>
					</ul>
				</nav>
			</div>
			<hr />
		</header>