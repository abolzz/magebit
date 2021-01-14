var emailInput = document.getElementById('emailInput'),
	checkBox = document.getElementById('termsCheckbox'),
	checkBoxError = document.getElementById('checkBoxError'),
	emailError = document.getElementById('emailError'),
	emailErrorEmpty = document.getElementById('emailErrorEmpty'),
	emailErrorEnding = document.getElementById('emailErrorEnding'),
	checkBoxError = document.getElementById('checkBoxError'),
	submitBtn = document.getElementById("submitBtn");

const REGEX = /\S+@\S+\.\S+/;
const EMAIL_ENDING = /\S+@\S+\.co$/;


// email validation
function isValidEmail(address) {
  if (emailInput.value == '') {
  	emailErrorEmpty.classList.remove("dNone");
  	submitBtn.disabled = true;
  } 

  if (!REGEX.test(emailInput.value)) {
  	emailError.classList.remove("dNone");
  	submitBtn.disabled = true;
  }

  if (EMAIL_ENDING.test(emailInput.value)) {
  	emailErrorEnding.classList.remove("dNone");
  	submitBtn.disabled = true;
  }

  if (REGEX.test(emailInput.value) && !emailInput.value == '' && !EMAIL_ENDING.test(emailInput.value)) {
  	emailError.classList.add("dNone");
	emailErrorEmpty.classList.add("dNone");
	emailErrorEnding.classList.add("dNone");
  }

  if (checkBox.checked && REGEX.test(emailInput.value) && !emailInput.value == '') {
	submitBtn.disabled = false;
	emailError.classList.add("dNone");
	emailErrorEmpty.classList.add("dNone");
	return true;
  }
}

// email validation and checkbox validation
 document.getElementById('emailForm').addEventListener("submit", function(e) {
   e.preventDefault();
  if (!checkBox.checked) {
	submitBtn.disabled = true;
	checkBoxError.classList.remove("dNone");
  } else {
	submitBtn.disabled = false;
	checkBoxError.classList.add("dNone");
  }
   
   if (isValidEmail(emailInput.value)) {
   	e.currentTarget.submit();
   }
 });

 emailInput.addEventListener("keyup", function() {
 	isValidEmail(emailInput.value);
 });

 emailInput.addEventListener("change", function() {
 	isValidEmail(emailInput.value);
 });

 checkBox.addEventListener("click", function() {
  if (!checkBox.checked) {
	submitBtn.disabled = true;
	checkBoxError.classList.remove("dNone");
  } else {
	submitBtn.disabled = false;
	checkBoxError.classList.add("dNone");
  }
 });