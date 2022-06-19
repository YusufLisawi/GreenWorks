import { setError, setSuccess } from "./functions.js";

const form = document.querySelector("form");
const inputFirstName = document.querySelector("#inputFirstName");
const inputLastName = document.querySelector("#inputLastName");
const inputUsername = document.querySelector("#inputUsername");
const inputEmail = document.querySelector("#inputEmail");
const inputPassword = document.querySelector("#inputPassword");
const inputConfirmPassword = document.querySelector("#inputConfirmPassword");

form.addEventListener("submit", (e) => {
	e.preventDefault();
	if (checkInputs()) {
		form.submit();
	}
});

function checkInputs() {
	const FirstNameVal = inputFirstName.value.trim();
	const LastNameVal = inputLastName.value.trim();
	const UsernameVal = inputUsername.value.trim();
	const EmailVal = inputEmail.value.trim();
	const PasswordVal = inputPassword.value.trim();
	const ConfirmPasswordVal = inputConfirmPassword.value.trim();

	let validation = [];
	// email checking
	let pattern = /^[a-zA-Z0-9.]+@[\w\d.]+\.[a-z.]{1,8}$/gi;
	if (EmailVal === "") {
		setError(inputEmail, "Email cannot be blank");
	} else if (!pattern.test(EmailVal)) {
		setError(inputEmail, "Invalid email");
	} else {
		setSuccess(inputEmail);
		validation.push(1);
	}
	// password checking
	let re = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])/g;
	if (PasswordVal === "") {
		setError(inputPassword, "Password cannot be blank");
	} else if (PasswordVal.length < 8) {
		setError(inputPassword, "Password is too short");
	} else if (!re.test(PasswordVal)) {
		setError(inputPassword, "Password is too easy");
	} else {
		setSuccess(inputPassword);
		validation.push(1);
	}
	// checking password confirmation
	if (ConfirmPasswordVal === "") {
		setError(inputConfirmPassword, "Field cannot be blank");
	} else if (PasswordVal === ConfirmPasswordVal) {
		setSuccess(inputConfirmPassword);
		validation.push(1);
	} else {
		setError(inputConfirmPassword, "Doesn't match the password");
	}
	// checking username
	let regex = /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/g;
	if (UsernameVal === "") {
		setError(inputUsername, "Username cannot be blank");
	} else if (!regex.test(UsernameVal)) {
		setError(inputUsername, "Invalid Username");
	} else {
		setSuccess(inputUsername);
		validation.push(1);
	}
	// checking username and last name
	let reg = /^[a-zA-Z]{3,20}$/g;
	if (FirstNameVal === "") {
		setError(inputFirstName, "Field cannot be blank");
	} else if (!reg.test(FirstNameVal)) {
		setError(inputFirstName, "Invalid Name");
	} else {
		setSuccess(inputFirstName);
		validation.push(1);
	}
	// last name
	reg = /^[a-zA-Z]{3,20}$/g;
	if (LastNameVal === "") {
		setError(inputLastName, "Field cannot be blank");
	} else if (!reg.test(LastNameVal)) {
		setError(inputLastName, "Invalid Name");
	} else {
		setSuccess(inputLastName);
		validation.push(1);
	}
	return validation.length === 6;
}
