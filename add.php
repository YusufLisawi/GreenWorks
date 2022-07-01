<?php 
	include 'models/auth.class.php';

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
	<form action="modules/upload.php" method="POST" class="inputs" enctype="multipart/form-data" method="POST"
		data-aos="fade-up" novalidate>
		<div class="dropzone" id="myDropzone">
			<!-- this is were the previews should be shown. -->
			<div class="previews">
				<div class="dz-message needsclick">
					Click or Drop your greenwork images.
				</div>
			</div>
		</div>

		<div class="invalid-feedback hide">All fields are required</div>
		<div class="fields">
			<div class="col">
				<div class="input-group">
					<label>Title</label>
					<input type="text" name="title" id="title" placeholder="What your greenwork's name" required>
				</div>
				<div class="input-group">
					<label>Ingredients</label>
					<textarea name="ingredients" id="ingredients" placeholder="What did you use to made it?"
						required></textarea>
				</div>
			</div>
			<div class="row">
				<div class="input-group">
					<label>Steps</label>
					<textarea name="steps" id="steps" placeholder="Tell us how you made it" required></textarea>
				</div>
			</div>
		</div>
		<button type="submit" name="send" id="submit-all" class="btn">add</button>
	</form>
</section>

<script src="js/validateAdding.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<script>
Dropzone.options.myDropzone = {
	url: "modules/upload.php",
	autoProcessQueue: false,
	uploadMultiple: true,
	parallelUploads: 6,
	maxFiles: 6,
	maxFilesize: 5,
	acceptedFiles: "image/*",
	addRemoveLinks: true,
	withCredentials: true,
	init: function() {
		dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

		// for Dropzone to process the queue (instead of default form behavior):
		document
			.getElementById("submit-all")
			.addEventListener("click", function(e) {
				// Make sure that the form isn't actually being sent.
				e.preventDefault();
				e.stopPropagation();
				dzClosure.processQueue();
			});

		//send all the form data along with the files:
		this.on("sendingmultiple", function(data, xhr, formData) {
			formData.append("title", $("#title").val());
			formData.append("ingredients", $("#ingredients").val());
			formData.append("steps", $("#steps").val());
		});
		this.on("successmultiple", function(files, response) {
			window.location.replace("./mygreenworks.php");
		});
	},
};
</script>
<?php include 'inc/footer.php' ?>