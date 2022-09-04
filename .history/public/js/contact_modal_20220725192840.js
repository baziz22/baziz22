// Get DOM Elements
const contact_modal = document.querySelector('.contact-modal');
const modalBtn = document.querySelector('.popup-chat');
const modalBtn2 = document.querySelector('.popup-chat2');
const modalBtn3 = document.querySelector('.popup-chat3');

const closeBtn = document.querySelector('.contact-modal-close');

// Events
modalBtn.addEventListener('click', openModal);
modalBtn2.addEventListener('click', openModal);
modalBtn3.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

// Open
function openModal() {
  contact_modal.style.display = 'block';
  console.log("clicking");
  console.log("clicking");
}

// Close
function closeModal() {
  contact_modal.style.display = 'none';
}

// Close If Outside Click
function outsideClick(e) {
  if (e.target == contact_modal) {
    contact_modal.style.display = 'none';
  }
}