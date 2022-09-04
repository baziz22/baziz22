// Get DOM Elements
const contact_modal = document.querySelector('.contact-modal');
const modalBtn = document.querySelector('.popup-chat');

const closeBtn = document.querySelector('.contact-modal-close');

// Events
for(let i = 0; i < modalBtn.length; i++) {
  modalBtn[i].addEventListener('click', openModal);
closeBtn[i].addEventListener('click', closeModal);
window[i].addEventListener('click', outsideClick);
}


// Open
function openModal() {
  contact_modal.style.display = 'block';
  console.log("clicking");
}

// Close
function closeModal() {
  contact_modal.style.display = 'none';console.log("close: clicking");
}

// Close If Outside Click
function outsideClick(e) {
  if (e.target == contact_modal) {
    contact_modal.style.display = 'none';
  }
}