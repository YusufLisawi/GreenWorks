import { emailCheck, setError, setSuccess } from "./functions.js";
const inputField = document.querySelectorAll(".inputField");
const inputEmail = document.querySelector("#inputEmail");
const form = document.querySelector("form");

form.addEventListener("submit", (e) => {
	e.preventDefault();
	if (emailCheck() && checkFields()) {
		form.submit();
	}
});
function checkFields() {
	inputField.forEach((input) => {
		if (input.value === "") {
			setError(input, "Cannot be blank");
		} else {
			setSuccess(input);
		}
	});
}
