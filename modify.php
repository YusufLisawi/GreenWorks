<?php 
	include 'models/auth.class.php';
	include 'models/greenwork.class.php';
	
	$auth = new Auth();
	
	if (!($auth -> isAuth())){
		$auth -> redirect('login.php');
	}
	if (isset($_GET['id'])){
		$gw = new Greenwork($_SESSION['username'], $_SESSION['user_id']);
		$myPost = $gw -> getPost($_GET['id']);
	}
	else {
		$auth -> redirect('mygreenworks.php');
	}
	if(count($_POST) > 2){
		foreach($_POST as $name => $value){
			$_POST[$name] = trim(htmlentities($value));
		}
		
		extract($_POST);
		$myPost = $gw -> editPost($title, $ingredients, $steps, $_GET['id']);
		$auth -> redirect('mygreenworks.php');
	}
?>
<?php $style_greenworks = true; include 'inc/header.php' ?>
<section class="hero add">
	<h1 data-aos="fade-left">Edit GreenWork</h1>
</section>

<?php if (!empty($myPost) && isset($myPost)): ?>
<section class="upload">
	<form action="" method="POST" class="inputs" data-aos="fade-in" novalidate>
		<div class="invalid-feedback hide">All fields are required</div>
		<div class="fields">
			<div class="col">
				<div class="input-group">
					<label>Title</label>
					<input type="text" placeholder="What your greenwork's name" name="title"
						value="<?=$myPost['title']?>" required>
				</div>
				<div class="input-group">
					<label>Ingredients</label>
					<textarea placeholder="What did you use to made it?" name="ingredients"
						required><?=$myPost['ingredient']?></textarea>
				</div>
			</div>
			<div class="row">
				<div class="input-group">
					<label>Steps</label>
					<textarea placeholder="Tell us how you made it" name="steps"
						required><?=$myPost['steps']?></textarea>
				</div>
			</div>
		</div>
		<button type="submit" name="send" class="btn" id="add">add</button>
	</form>
</section>
<?php endif; ?>

<script src="js/validateAdding.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/sweetalert.js"></script>
<script>
$(document).ready(function() {
	$('#add').on('click', function(e) {
		e.preventDefault();
		Swal.fire({
			title: "Do you want to save the changes?",
			type: 'info',
			showDenyButton: true,
			confirmButtonColor: '#37bc2b',
			denyButtonColor: '#000',
			confirmButtonText: 'Save',
			denyButtonText: "Don't save",
		}).then((result) => {
			if (result.value) {
				Swal.fire({
					title: 'Saved!',
					text: 'Your GreenWork has been updated.',
					type: 'success',

				})
				setTimeout(function() {
					$('.inputs').submit();
				}, 1500);
			}
		})
	})
})
</script>
<?php include 'inc/footer.php' ?>