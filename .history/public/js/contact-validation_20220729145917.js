const contact_form = document.getElementById('register-form');
const contact_fullname = document.getElementById('contact-full-name');
const contact_subject = document.getElementById('contact-subject');
const email = document.getElementById('contact-email');


contact_form.addEventListener('submit', e => {
  e.preventDefault();
  validate();
});

function validate() {
  // get the values from the inputs
  const firstnameValue = first_name.value.trim();
  const lastnameValue = last_name.value.trim();
  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();

  if (usernameValue === '') {
    // show error
    // add error class
    setErrorFor(username, 'Username cannot be empty');
  } else {
    // add success class
    setSuccessFor(username);
  }
  if (emailValue === '') {
    setErrorFor(email, 'Email cannot be empty');
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, 'Email is not valid!');
  } else {
    setSuccessFor(email);
  }
  
}

function setErrorFor(input, message) {
  const formControl = input.parentElement; // .form-control
  const small = formControl.querySelector('small');

  // add error message inside small
  small.innerText = message;

  // add error class
  formControl.className = 'form-control error';
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  // add success class
  formControl.className = 'form-control success';
}

function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
