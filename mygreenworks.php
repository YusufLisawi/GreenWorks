<?php
	include 'modules/auth.class.php';
	include 'modules/greenwork.class.php';

	unset($_SESSION['post_id']);
	
	$auth = new Auth();

	if (!($auth -> isAuth())){
		$auth -> redirect('login.php');
	}
	
	$gw = new Greenwork($_SESSION['username'], $_SESSION['user_id']);
    $myPosts = $gw -> getMyPosts();
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
					<a href=""><i class="fa fa-trash" id="delete" aria-hidden="true"></i></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</section>
<?php endif; ?>


<?php include 'inc/footer.php' ?>