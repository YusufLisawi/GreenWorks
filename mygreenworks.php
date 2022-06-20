<?php $link = 1 ; $style_greenworks = true; include 'inc/header.php' ?>
<section class="hero mygreenworks">
	<h1 data-aos="fade-left">My GreenWorks</h1>
	<div class="flex" data-aos="fade-up">
		<h1 class="name">Hi Yusuf 👋,</h1>
		<a href="add.php">
			<button class="special-btn">
				<img src="./images/add.svg">
				<span>Add GreenWork</span>
			</button>
		</a>
	</div>
</section>

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
			<tr>
				<td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, adipisci voluptatem Beatae hic
					nihil nobis.</td>
				<td>2022-06-19</td>
				<td class="actions">
					<a href=""><i class="fa-solid fa-eye" id="view"></i></a>
					<a href=""><i class="fa-solid fa-pen-to-square" id="edit"></i></a>
					<a href=""><i class="fa fa-trash" id="delete" aria-hidden="true"></i></a>
				</td>
			</tr>
			<tr>
				<td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, adipisci voluptatem Beatae hic
					nihil nobis.</td>
				<td>2022-06-19</td>
				<td>
					<a href=""><i class="fa-solid fa-eye" id="view"></i></a>
					<a href=""><i class="fa-solid fa-pen-to-square" id="edit"></i></a>
					<a href=""><i class="fa fa-trash" id="delete" aria-hidden="true"></i></a>
				</td>
			</tr>
		</tbody>
	</table>
</section>

<?php include 'inc/footer.php' ?>