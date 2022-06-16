<?php $link = 3 ; include 'inc/header.php' ?>
<section class="hero about">
	<div class="flex">
		<div class="text-and-btn" data-aos="fade-right">
			<h1>About us<span>.</span></h1>
			<p>
				Our main mission is to create a digital <span>eco-responsible</span> solution that will raise awareness
				among
				citizens about the importance of environmental protection in general and the importance of
				<span>recycling</span> in
				particular.
			</p>
			<a href="login.php"><button class="btn">join us</button></a>
		</div>
		<div class="hero-picture" data-aos="fade-left">
			<img src="./images/IMAGE-aboutus.png" alt="image-hero" />
		</div>
	</div>
</section>
<section class="section1 about" data-aos="fade-in">
	<h2 class="title" data-aos="fade-in">our objectives</h2>

	<div class="cards" data-aos="fade-in">
		<div class="card-2 div1" data-aos="fade-up" data-aos-duration="600">
			<p><span>Reduce</span> the disposal of non-degradable products that are <span>harmful</span> to the
				environment</p>
		</div>
		<div class="card-2 div2" data-aos="fade-up" data-aos-duration="500">
			<p>Develop <span>the spirit of creativity</span> among citizens</p>
		</div>
		<div class="card-2 div3" data-aos="fade-up" data-aos-duration="300">
			<p>Engage every citizen to make
				<span>eco-friendly acts</span>
				responsible actions
			</p>
		</div>
	</div>
</section>

<section class="creator">
	<h2 class="title" data-aos="fade-right">creator</h2>
	<div class="details flex" data-aos="fade-up" data-aos-duration="500">
		<img src="images/me.png" alt="profile">
		<div class="more-details">
			<h2>Youssef El aissaoui</h2>
			<h4>fullstack developper & designer</h4>
			<a href="http://yusuflisawi.github.io/" target="blank">
				<button class="btn-secondary">portfolio</button>
			</a>
		</div>
	</div>
</section>
<div class="cta section" data-aos="flip-up" data-aos-duration="1000">
	<div class="card-cta flex" data-aos="fade-in">
		<h2 class="title">Still have questions ?</h2>
		<h1>Write us a message.</h1>
		<a href="contact.php"><button class="btn-secondary">contact us</button></a>
	</div>
</div>
<?php include 'inc/footer.php' ?>