const contact_form = document.getElementById('contact-form');
const contact_full_name = document.getElementById('contact-full-name');
const contact_subject = document.getElementById('contact-subject');
const contact_email = document.getElementById('contact-email');
const contact_message = document.getElementById('contact-message');
const contact_submit_btn = document.getElementById('contact-submit-btn');


contact_form.addEventListener('submit', e => {
  (validate()) ? e.currentTarget.submit()
  : e.preventDefault();
  
});

function validate() {
  
  // get the values from the inputs
  const full_nameValue = contact_full_name.value.trim();
  const emailValue = contact_email.value.trim();
  const subjectValue = contact_subject.value.trim();
  const messageValue = contact_message.value.trim();

  if (full_nameValue === '') {
    // show error
    // add error class
    setErrorFor(contact_full_name, 'Your Name is REQUIRED!');
    (contact_full_name.matches('.error')) ? console.log(false) : console.log(true);;
  } else {
    // add success class
    setSuccessFor(contact_full_name);
  }
  if (emailValue === '') {
    setErrorFor(contact_email, 'Email cannot be empty. REQUIRED!');
  } else if (!isEmail(emailValue)) {
    setErrorFor(contact_email, 'Email is not valid!');
  } else {
    setSuccessFor(contact_email);
  }
  if (subjectValue === '') {
    // show error
    // add error class
    setErrorFor(contact_subject, 'Enter a topic that reflects your message content. REQUIRED!');
  } else {
    // add success class
    setSuccessFor(contact_subject);
  }
  if (messageValue === '') {
    // show error
    // add error class
    setErrorFor(contact_message, 'How can I help you?! REQUIRED!');
  } else {
    // add success class
    setSuccessFor(contact_message);
  }
  (!contact_full_name.matches('.error')) ? true : false;
}

function setErrorFor(input, message) {
  const contact_box = input.parentElement; // .form-control
  const small = contact_box.querySelector('small');

  // add error message inside small
  small.innerText = message;

  // add error class
  contact_box.className = 'contact-box error';
}

function setSuccessFor(input) {
  const contact_box = input.parentElement;
  // add success class
  contact_box.className = 'contact-box success';
}

function isEmail(contact_email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    contact_email
  );
}
console.log("Message is loaded")