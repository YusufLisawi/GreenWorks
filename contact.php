<?php include 'models/sendmail.php'; ?>
<?php $link = 4 ; $style_inputs = true; include 'inc/header.php' ?>
<section class="hero contact">
	<div class="flex">
		<div class="text-and-btn" data-aos="fade-right">
			<h1>Contact us<span>.</span></h1>
			<form action="" method="post" autocomplete="off" novalidate>
				<div class="form-control">
					<div class="form-group">
						<label id="labelE">Email</label>
						<input type="text" name="email" id="inputEmail" class="inputField" required />
						<div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label id="labelS">Subject</label>
						<input type="text" name="subject" id="inputSubject" class="inputField" required />
						<div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label id="labelM">Message</label>
						<input type="text" name="message" id="inputMessage" class="inputField" required></input>
						<div class="invalid-feedback"></div>
					</div>
				</div>
				<button class="btn" type="submit">Send</button>
			</form>
		</div>
		<div class="hero-picture" data-aos="fade-left">
			<img src="./images/IMAGE-contactus.png" alt="image-hero" />
		</div>
	</div>
	</div>
</section>
<script type="module" src="./js/contactValidation.js"></script>
<script src="./js/animations.js"></script>
<?php include 'inc/footer.php' ?>