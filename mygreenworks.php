<?php
	include 'models/auth.class.php';
	include 'models/greenwork.class.php';

	unset($_SESSION['post_id']);
	
	$auth = new Auth();

	if (!($auth -> isAuth())){
		$auth -> redirect('login.php');
	}
	$gw = new Greenwork($_SESSION['username'], $_SESSION['user_id']);
    $myPosts = $gw -> getMyPosts();
	
	if (isset($_POST['delete_id'])){
		$gw -> removePost($_POST['delete_id']);
		header('Location: mygreenworks.php');
	}
	

?>
<?php $link = 1 ; $style_greenworks = true; include 'inc/header.php' ?>
<section class="hero mygreenworks">
	<h1 data-aos="fade-left">My GreenWorks</h1>
	<div class="flex" data-aos="fade-up">
		<h1 class="name">Hi <?php if (isset($_SESSION['username'])) echo $_SESSION['username'] ?> 👋,</h1>
		<a href="add.php">
			<button class="special-btn">
				<img src="./images/add.svg">
				<span>Add GreenWork</span>
			</button>
		</a>
	</div>
</section>

<?php if (count($myPosts) > 0):?>
<section class="my-greenworks" data-aos="fade-up">
	<table class="table">
		<thead>
			<tr>
				<td>Title</td>
				<td>Date Added</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($myPosts as $gwk):?>
			<tr>
				<td style="text-transform: capitalize;"><?=$gwk['title']?></td>
				<td align="center"><?= explode(' ',$gwk['created_at'])[0]?></td>
				<td class="actions">
					<a href="details.php?id=<?=$gwk['id']?>"><i class="fa-solid fa-eye" id="view"></i></a>
					<a href="modify.php?id=<?=$gwk['id']?>"><i class="fa-solid fa-pen-to-square" id="edit"></i></a>
					<form action="" method="post" class="delete-form">
						<input type="hidden" name="delete_id" value="<?php echo $gwk['id']?>">
						<button type="submit" name="delete" style="border: none; background: none;">
							<i class="fa fa-trash" id="delete"></i>
						</button>
					</form>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</section>
<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/sweetalert.js"></script>
<script>
$(document).ready(function() {
	$('.delete-form').on('click', function(e) {
		e.preventDefault();
		Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#37bc2b',
			cancelButtonColor: '#000',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.value) {
				Swal.fire({
					title: 'Deleted!',
					text: 'Your GreenWork has been deleted.',
					type: 'success',
				})
				setTimeout(function() {
					$('.delete-form').submit();
				}, 1500);
			}
		})
	})
})
</script>

<?php include 'inc/footer.php' ?>