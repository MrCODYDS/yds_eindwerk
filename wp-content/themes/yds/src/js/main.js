const toggleModal = () => {
  document.querySelector('.modal')
    .classList.toggle('modal--hidden');
};

document.querySelector('#show-modal')
  .addEventListener('click', toggleModal);

document.querySelector('#reservation-form')
  .addEventListener('submit', (event) => {
    event.preventDefault();
    toggleModal();
  })

document.querySelector('.modal__header span')
  .addEventListener('click', toggleModal);