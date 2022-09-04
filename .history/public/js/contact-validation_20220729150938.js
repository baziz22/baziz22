const contact_form = document.getElementById('register-form');
const contact_full_name = document.getElementById('contact-full-name');
const contact_subject = document.getElementById('contact-subject');
const contact_email = document.getElementById('contact-email');
const contact_message = document.getElementById('contact-message');

contact_form.addEventListener('submit', e => {
  e.preventDefault();
  validate();
});

function validate() {
  // get the values from the inputs
  const full_nameValue = contact_full_name.value.trim();
  const subjectValue = contact_subject.value.trim();
  const emailValue = contact_email.value.trim();
  const messageValue = contact_message.value.trim();

  if (full_nameValue === '') {
    // show error
    // add error class
    setErrorFor(contact_full_name, 'Your Name is REQUIRED!');
  } else {
    // add success class
    setSuccessFor(contact_full_name);
  }
  if (emailValue === '') {
    setErrorFor(contact_email, 'Email cannot be empty');
  } else if (!isEmail(emailValue)) {
    setErrorFor(contact_email, 'Email is not valid!');
  } else {
    setSuccessFor(contact_email);
  }
  if (subjectValue === '') {
    // show error
    // add error class
    setErrorFor(contact_full_name, 'Your Name is REQUIRED!');
  } else {
    // add success class
    setSuccessFor(contact_full_name);
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
