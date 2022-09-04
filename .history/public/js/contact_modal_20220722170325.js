// Get DOM Elements
const contact_modal = document.querySelector('#contact-modal');
const modalBtn = document.querySelector('#popup-chat');
const closeBtn = document.querySelector('.close');

// Events
modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

// Open
function openModal() {
  contact_modal.style.display = 'block';
}

// Close
function closeModal() {
  modal.style.display = 'none';
}

// Close If Outside Click
function outsideClick(e) {
  if (e.target == contact_modal) {
    modal.style.display = 'none';
  }
}