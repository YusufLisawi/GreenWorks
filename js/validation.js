import { emailCheck, setError, setSuccess } from "./functions.js";
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
