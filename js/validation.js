const form = document.querySelector("form");
const inputEmail = document.querySelector("#inputEmail");
const inputPass = document.querySelector("#inputPass");

form.addEventListener("submit", (e) => {
	e.preventDefault();
	if (emailCheck() && passCheck()) {
		form.submit();
	}
});
inputEmail.addEventListener("change", () => emailCheck());
inputPass.addEventListener("change", () => passCheck());

function emailCheck() {
	const emailVal = inputEmail.value.trim();

	let pattern = /^[a-zA-Z0-9.]+@[\w\d.]+\.[a-z.]{1,8}$/gi;

	if (emailVal === "") {
		setError(inputEmail, "Email cannot be blank");
		return false;
	} else if (!pattern.test(emailVal)) {
		setError(inputEmail, "Invalid email");
		return false;
	} else {
		setSuccess(inputEmail);
		return true;
	}
}
function passCheck() {
	const passwordVal = inputPass.value.trim();

	if (passwordVal === "") {
		setError(inputPass, "Password cannot be blank");
		return false;
	} else {
		setSuccess(inputPass);
		return true;
	}
}

function setError(input, message) {
	const formGroup = input.parentElement;
	const messageOutput = formGroup.querySelector(".invalid-feedback");
	const label = formGroup.querySelector("label");

	messageOutput.innerText = message;
	label.classList.add("is-invalid");
	input.classList.add("is-invalid");
}
function setSuccess(input) {
	const formGroup = input.parentElement;
	const messageOutput = formGroup.querySelector(".invalid-feedback");
	const label = formGroup.querySelector("label");

	messageOutput.innerText = "";
	label.classList.remove("is-invalid");
	input.classList.remove("is-invalid");
}
