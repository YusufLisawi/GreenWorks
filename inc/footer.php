</div>
<footer>
	<div class="flexAll container">
		<div class="info">
			<div class="credentials">
				<img src="./images/f-logo.svg" alt="logo-white" class="logo" />
				<p>&copy;2022- GreenWorks. All Right Reserved</p>
			</div>
			<div class="social">
				<a href=""><i class="fab fa-twitter fa-2xl twitter"></i></a>
				<a href=""><i class="fab fa-instagram fa-2xl insta"></i></a>
			</div>
			<span>made with <span>&hearts;</span> by youssef el
				aissaoui</span>
		</div>
		<div class="links1">
			<a href="greenworks.php">
				<h3>greenWorks</h3>
			</a>
			<ul>
				<a href="mygreenworks.php">
					<h3>My greenWorks</h3>
				</a>
				<li><a href="mygreenworks.php">List of greenWorks</li></a>
				<li><a href="add.php">Add greenWork</li></a>
			</ul>
		</div>
		<div class="links2">
			<a href="./contact.php">
				<h3>Contact us</h3>
			</a>
			<a href="./about.php">
				<h3>About us</h3>
			</a>
			<button class="btn btn-lang">Change Language</button>
		</div>
	</div>
</footer>
<script src="./js/script.js"></script>
<?php include 'script.php' ?>

<script type="text/javascript">
function translate() {
	new google.translate.TranslateElement({
		pageLanguage: 'en'
	}, 'google_translate_element');
}
document.querySelector('.btn-lang').addEventListener('click', () => {
	console.log('btn lang')
	if (confirm('Are you sure you want to change the language?')) {
		translate();
	} else {
		alert("Good choice ! I love you");
	}
})
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
</body>

</html>