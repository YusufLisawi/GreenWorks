<?php 
	include 'modules/auth.class.php';

	$auth = new Auth();

	if (!($auth -> isAuth())){
		$auth -> redirect('login.php');
	}
?>
<?php $style_greenworks = true; $dragndrop = true; include 'inc/header.php' ?>
<section class="hero add">
	<h1 data-aos="fade-left">Add GreenWork</h1>
</section>

<section class="upload">
	<div id="dropzone" data-aos="fade-up">
		<form class="dropzone needsclick" id="demo-upload" action="/upload">
			<div class="dz-message needsclick">
				Drop your greenwork images.
			</div>
		</form>
	</div>
	<form action="" method="POST" class="inputs" data-aos="fade-up" novalidate>
		<div class="invalid-feedback hide">All fields are required</div>
		<div class="fields">
			<div class="col">
				<div class="input-group">
					<label>Title</label>
					<input type="text" placeholder="What your greenwork's name" required>
				</div>
				<div class="input-group">
					<label>Ingredients</label>
					<textarea placeholder="What did you use to made it?" required></textarea>
				</div>
			</div>
			<div class="row">
				<div class="input-group">
					<label>Steps</label>
					<textarea placeholder="Tell us how you made it" required></textarea>
				</div>
			</div>
		</div>
		<button type="submit" class="btn">add</button>
	</form>
</section>

<script src="js/validateAdding.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<?php include 'inc/footer.php' ?>