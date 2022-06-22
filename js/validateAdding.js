const inputField = document.querySelectorAll("input");
const textField = document.querySelectorAll("textarea");
const allFields = [...inputField, ...textField];
const form = document.querySelector(".inputs");
const invalid_feedback = document.querySelector(".invalid-feedback");

form.addEventListener("submit", (e) => {
	e.preventDefault();
	console.log("submitted");
	if (checkFields() >= 3) {
		form.submit();
	}
});
function checkFields() {
	let pass = [];
	allFields.forEach((field) => {
		if (field.value == "") {
			invalid_feedback.classList.remove("hide");
			field.classList.add("is-invalid");
			field.parentElement
				.querySelector("label")
				.classList.add("is-invalid");
		} else {
			invalid_feedback.classList.add("hide");
			field.classList.remove("is-invalid");
			field.parentElement
				.querySelector("label")
				.classList.remove("is-invalid");
			field.parentElement
				.querySelector("label")
				.classList.add("is-valid");
			pass.push(1);
			console.log(pass);
		}
	});
	return pass.length;
}

allFields.forEach((field) => {
	field.addEventListener("focus", () => {
		field.parentElement.querySelector("label").classList.add("is-valid");
	});
	field.addEventListener("blur", () => {
		if (field.value == "") {
			field.parentElement
				.querySelector("label")
				.classList.remove("is-valid");
		}
	});
});
