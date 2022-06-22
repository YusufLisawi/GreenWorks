<?php $link = 2 ; $swiperjs = true; $style_details = true; include 'inc/header.php' ?>

<section class="details">
	<!-- Slider main container -->
	<div class="swiper" data-aos="fade-in">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->
			<div class="swiper-slide">
				<img src="./images/GreenWorks/IMAGE 1.png" alt="">
			</div>
			<div class="swiper-slide">
				<img src="./images/GreenWorks/IMAGE 2.png" alt="">
			</div>
			<div class="swiper-slide">
				<img src="./images/GreenWorks/IMAGE 3.png" alt="">
			</div>
			<div class="swiper-slide">
				<img src="./images/GreenWorks/IMAGE 4.png" alt="">
			</div>
		</div>
		<div class="swiper-pagination"></div>

		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>

	</div>

	<div class="gw-details flex">
		<div class="title info" data-aos="fade-up">
			<h2>Title</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, sint</p>
		</div>
		<div class="ingredients info" data-aos="fade-up">
			<h2>Ingredients</h2>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius magni modi suscipit quos minima! Alias
				voluptatum debitis sapiente. Facilis corrupti impedit hic ab repudiandae corporis accusantium quis
				magnam ea quasi?</p>
		</div>
		<div class="steps info" data-aos="fade-up">
			<h2>Steps</h2>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum repellendus neque quia quas, voluptatem
				amet. Quos sit eos, mollitia quas ab sed, odio, perspiciatis impedit culpa assumenda expedita sint
				suscipit odit. Modi unde ea dicta architecto repellat. Harum placeat est, officiis maxime explicabo,
				numquam atque, repellendus eaque aspernatur rem voluptatem? </p>
		</div>

		<a href="greenworks.php">
			<button class="btn-secondary">
				<i class="fas fa-arrow-left" style="padding-right: 1rem;"></i>
				Back</button>
		</a>
	</div>

</section>

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