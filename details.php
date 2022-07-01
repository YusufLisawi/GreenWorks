<?php
session_start();
include 'models/greenwork.class.php';
if (isset($_GET['id'])){
	$gw = new Greenwork($_SESSION['username'], $_SESSION['user_id']);
	$post = $gw -> getPost($_GET['id']);
}
?>
<?php $link = 2 ; $swiperjs = true; $style_details = true; include 'inc/header.php' ?>

<?php if (!empty($post) && isset($post) && file_exists("models/uploads/".$post['gen_post_id'])): ?>
<section class="details">
	<!-- Slider main container -->
	<div class="swiper" data-aos="fade-in">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->
			<?php $images = json_decode($post['images']);?>
			<?php foreach($images as $image): ?>
			<div class="swiper-slide">
				<img src="./models/uploads/<?=$post['gen_post_id']?>/<?=$image?>" alt="<?=$image?>">
			</div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-pagination"></div>

		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>

	</div>

	<div class="gw-details flex">
		<div class="title info" data-aos="fade-up">
			<h2>Title</h2>
			<p style="text-transform:capitalize;"><?=$post['title']?></p>
		</div>
		<div class="ingredients info" data-aos="fade-up">
			<h2>Ingredients</h2>
			<p style="text-transform:capitalize;"><?=$post['ingredient']?></p>
		</div>
		<div class="steps info" data-aos="fade-up">
			<h2>Steps</h2>
			<p style="text-transform:capitalize;"><?=$post['steps']?></p>
		</div>

		<a href="greenworks.php">
			<button class="btn-secondary">
				<i class="fas fa-arrow-left" style="padding-right: 1rem;"></i>
				Back</button>
		</a>
	</div>

</section>

<?php endif; ?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper(".swiper", {
	pagination: {
		el: ".swiper-pagination",
		type: "fraction",
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
});
</script>
<?php include 'inc/footer.php' ?>