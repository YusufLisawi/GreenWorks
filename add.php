<?php $style_greenworks = true; $dragndrop = true; include 'inc/header.php' ?>
<section class="hero add">
	<h1 data-aos="fade-left">Add GreenWork</h1>
</section>

<section class="upload">
	<DIV id="dropzone">
		<FORM class="dropzone needsclick" id="demo-upload" action="/upload">
			<DIV class="dz-message needsclick">
				Drop your greenwork images.
			</DIV>
		</FORM>
	</DIV>
	<form action="" method="POST" class="inputs">
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
	</form>
</section>

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<?php include 'inc/footer.php' ?>