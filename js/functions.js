export function setError(input, message) {
	const formGroup = input.parentElement;
	const messageOutput = formGroup.querySelector(".invalid-feedback");
	const label = formGroup.querySelector("label");

	messageOutput.innerText = message;
	label.classList.add("is-invalid");
	input.classList.add("is-invalid");
}
export function setSuccess(input) {
	const formGroup = input.parentElement;
	const messageOutput = formGroup.querySelector(".invalid-feedback");
	const label = formGroup.querySelector("label");

	messageOutput.innerText = "";
	label.classList.remove("is-invalid");
	input.classList.remove("is-invalid");
}

export function emailCheck() {
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
