<?php 
// session_start();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./style/main-style.css" type="text/css" />
	<link rel="stylesheet" href="./style/components.css" type="text/css" />
	<link rel="stylesheet" href="./style/utilities.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="./js/aos-master/dist/aos.css" />
	<link rel="icon" type="image/x-icon" href="./images/miniLOGO.svg">
	<link rel="stylesheet" href="./style/sweetalert2.min.css">
	<?php if(isset($style_inputs)) echo '<link rel="stylesheet" href="./style/style-inputs.css" type="text/css" />'?>
	<?php if(isset($style_greenworks)) echo '<link rel="stylesheet" href="./style/greenworks-style.css" type="text/css" />'?>
	<?php if(isset($style_details)) echo '<link rel="stylesheet" href="./style/details-style.css" type="text/css"/>'?>
	<?php if(isset($dragndrop)) echo '<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />'?>
	<?php if(isset($swiperjs)) echo '<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>'?>
	<?php if ((isset($myPosts) && count($myPosts) < 1 ) || (isset($allPosts) && count($allPosts) < 1) || !file_exists('./modules/uploads') || !file_exists('modules/uploads')) :?>
	<?php $noshaper = true; ?>
	<style>
	footer {
		display: none;
	}
	</style>
	<?php endif; ?>
	<title>GreenWorks</title>
</head>

<body>
	<div class="to-top" data-aos="fade-up">
		<i class="fas fa-arrow-up"></i>
	</div>
	<div class="shapes about contact" data-aos="fade-in"></div>
	<?php if (!isset($noshaper)):?>
	<div class="shapes r about contact" data-aos="fade-up"></div>
	<?php endif; ?>
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
						<?php if (!isset($_SESSION['username'])) : ?>
						<li><a href="about.php"
								<?php if(isset($link)){if($link == 3) echo 'class="active-link"';}?>>About us</a></li>
						<li><a href="contact.php"
								<?php if(isset($link)){if($link == 4) echo 'class="active-link"';}?>>Contact us</a></li>
						<?php else: ?>

						<div class="logout" style="margin-left: 1.5rem;">
							<a href="modules/dologout.php"><button class="btn-secondary btn-logout"> <i
										class="fas fa-sign-out"></i></i>
								</button></a>
						</div>
						<?php endif; ?>

					</ul>
				</nav>
			</div>
			<hr />
		</header>