// animation
const inputField = document.querySelectorAll(".inputField");

inputField.forEach((input) => {
	input.addEventListener("focus", () => {
		input.previousElementSibling.classList.add("inputEffect");
	});
	input.addEventListener("blur", () => {
		if (input.value === "")
			input.previousElementSibling.classList.remove("inputEffect");
	});
});

// View Password
function getPwdInputs() {
	var inputs = document.querySelectorAll("input");
	pwds = [];
	[...inputs].forEach((input) => {
		if (input.type == "password") pwds.push(input);
	});
	return pwds;
}
const pwdInputs = getPwdInputs();
pwdInputs.forEach((input) => {
	input.previousElementSibling.addEventListener("click", () => {
		input.type = "text";
	});
	input.previousElementSibling.addEventListener("mouseleave", () => {
		input.type = "password";
	});
});

// background changing
window.onload = function () {
	function changeImage() {
		var BackgroundImg = [
			"https://images.unsplash.com/photo-1446034295857-c39f8844fad4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
			"https://images.unsplash.com/photo-1502747812021-0ae746b6c23f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
			"../images/bg.jpg",
		];
		var i = Math.floor(Math.random() * 3);
		document.body.style.backgroundImage = 'url("' + BackgroundImg[i] + '")';
	}
	// changeImage();
	// window.setInterval(changeImage, 5000);
};
