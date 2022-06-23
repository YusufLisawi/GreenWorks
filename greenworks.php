<?php 
include 'modules/allGwks.php';
?>
<?php $link = 2 ; $style_greenworks = true; include 'inc/header.php' ?>
<section class="hero all-greenworks">
	<h1 data-aos="fade-left">All GreenWorks</h1>
</section>

<?php if(count($allPosts) > 0): ?>
<section class="gws">
	<div class="greenworks">
		<?php foreach($allPosts as $post): ?>
		<?php if(file_exists("modules/uploads/".$post['gen_post_id'])): ?>

		<div class="gw-card" data-aos="fade-up">
			<a href="details.php?id=<?=$post['id']?>"></a>
			<?php $images = json_decode($post['images']);?>
			<img src="./modules/uploads/<?=$post['gen_post_id']?>/<?=$images[0]?>" alt="gw" />
			<div class="text">
				<h5>Made by <span><?=$post['username']?></span></h5>
				<p style="text-transform: capitalize;"><?=$post['title']?></p>
			</div>
		</div>

		<?php endif; ?>
		<?php endforeach; ?>
	</div>

</section>
<?php endif; ?>

<?php include 'inc/footer.php' ?>