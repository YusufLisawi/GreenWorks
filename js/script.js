window.onload = function () {
	window.scrollTo(0, 0);
};
const toTop = document.querySelector(".to-top i");
const card = document.querySelector(".cards");

window.addEventListener("scroll", () => {
	if (window.scrollY > 350) {
		toTop.classList.add("show");
	} else {
		toTop.classList.remove("show");
	}
});

toTop.addEventListener("click", (e) => {
	e.preventDefault();
	window.scrollTo(0, 0);
});
