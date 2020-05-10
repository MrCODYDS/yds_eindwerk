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



/* 
 * Via quertselector btn-next ophalen
 * Onlick data-next of data-prvious valie ophalen
 * Alle form-part 's hiden
 * Tonen van opgehaalde class
*/

function showTest(button) {
  const data = button.dataset.next;

  const formParts = document.querySelectorAll('.form-part');
  formParts.forEach(function(part, index) {
    part.classList.add('form-part--hidden');
  });

  document.querySelector('.' + data).classList.remove('form-part--hidden');
}

const buttonsNext = document.querySelectorAll('.btn-next');
buttonsNext.forEach(function(button, index) {
    button.addEventListener('click', function(){
      showTest(this);
  });
});















  
  
const previous = () => {
  // Get btn-next data field value
  const dataValue = document.querySelector('.btn-previous');

  // Hide all form-parts
  if(!document.querySelector('.form-choices').classList.contains('form-part--hidden')) {
    document.querySelector('.form-choices')
    .classList.add('form-part--hidden');
  }

  if(!document.querySelector('.form-dates').classList.contains('form-part--hidden')) {
    document.querySelector('.form-dates')
    .classList.add('form-part--hidden');
  }

  if(!document.querySelector('.form-times').classList.contains('form-part--hidden')) {
    document.querySelector('.form-times')
    .classList.add('form-part--hidden');
  }

  if(!document.querySelector('.form-people').classList.contains('form-part--hidden')) {
    document.querySelector('.form-people')
    .classList.add('form-part--hidden');
  }
  


  document.querySelector('.' + dataValue.dataset.previous)
    .classList.toggle('form-part--hidden');
}

document.querySelector('.btn-previous')
  .addEventListener('click', previous);
