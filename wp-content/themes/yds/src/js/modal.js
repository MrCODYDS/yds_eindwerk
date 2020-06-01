/*
 * Show modal & close modal functions
 */

var datepickerDate;
var groundValue;
var $loggedIn;

// Check is user is logged in
function checkIfLoggedIn() {
  jQuery(document).ready(function ($) {
    if ($('body').hasClass('logged-in')) {
      $loggedIn = true;
    } else {
      $loggedIn = false;
    }
  });
  return $loggedIn;
}

// Toggle hidden class for modal if user has logged in
// Redirect if user is not logged in
const toggleReservationModal = () => {
  if (checkIfLoggedIn()) {
    document.querySelector('.modal--reservation')
    .classList.toggle('modal--hidden');
    hideAllFormParts();
    document.querySelector('.form-choices').classList.remove('form-part--hidden');
  } else {
    window.location.href = "/login";
  }
};

const toggleConfirmModal = () => {
  document.querySelector('.modal--confirmation')
    .classList.toggle('modal--hidden');
}

// Get all buttons with class show-modal & add function on click
const buttonsModal = document.querySelectorAll('.show-modal');
buttonsModal.forEach(function(button, index) {
    button.addEventListener('click', toggleReservationModal);
});

// Toggle modal when clicked on submit
document.querySelector('#reservation-form')
  .addEventListener('submit', (event) => {
    toggleReservationModal();
    
  });

jQuery(document).ready(function ($) {
  $('reservation-form').submit(function(event) {
    event.preventDefault();
    var post_url = $(this).attr("action"); //get form action url
    var request_method = $(this).attr("method"); //get form GET/POST method
    var form_data = $(this).serialize(); //Encode form elements for submission
    console.log(form_data);
    
    $.ajax({
      url : post_url,
      type: request_method,
      data : form_data
    }).done(function(response){ //
      toggleConfirmModal();
      alert(response);
    });
  })
});

// Close reservation modal when clicked on cross
document.querySelector('.modal--reservation .modal__header span')
  .addEventListener('click', toggleReservationModal);

// Close confirmation modal when clicked on cross
document.querySelector('.modal--confirmation .modal__header span')
.addEventListener('click', toggleConfirmModal);

//Show current modal & hide other modals functions
function showNext(button) {
  hideAllFormParts();

  fillInEndScreen();

  // Get data value
  const data = button.dataset.next;

  // Remove hidden class on screen with current data value
  document.querySelector('.' + data).classList.remove('form-part--hidden');
}

// Get all buttons with class btn-next & add function on click
const buttonsNext = document.querySelectorAll('.btn-next');
buttonsNext.forEach(function(button, index) {
    button.addEventListener('click', function(){
      showNext(this);
  });
});

function showPrevious(button) {
  hideAllFormParts();

  // Get data value
  const data = button.dataset.previous;

  // Remove hidden class on screen with current data value
  document.querySelector('.' + data).classList.remove('form-part--hidden');
}

// Get all buttons with class btn-previous & add function on click
const buttonsPrevious = document.querySelectorAll('.btn-previous');
buttonsPrevious.forEach(function(button, index) {
    button.addEventListener('click', function(){
      showPrevious(this);
  });
});

// Get all elements with class form-part & add hidden class
function hideAllFormParts() {
  const formParts = document.querySelectorAll('.form-part');
  formParts.forEach(function(part, index) {
    part.classList.add('form-part--hidden');
  });
}

// Fill in the final screen with all chosen values
// in the form before submitting
function fillInEndScreen() {
  jQuery(document).ready(function ($) {
    // Fill in selected choice
    var choiceValue = $("input[name='radioChoices']:checked").val();
    $('#final-choice').val(choiceValue);

    // Fill in selected ground
    
    var selectedGround = $('select#selectGround').children("option:selected").val();
    $('#final-ground').val(selectedGround);
    groundValue = selectedGround;
    
    // Fill in selected time
    // Add visible hour for user --> "14:00" instead of "14"
    // Make sure user can see all claimed hours
    var timeValue = $("input[name='radioTimeslots']:checked").val();
    var selectedTimes = $('select#selectTimes').children("option:selected").val();
    var sum = Number(timeValue) + Number(selectedTimes);
    $('#final-time').val(timeValue + ":00-" + sum + ":00");

    // Fill in selected persons if radio button
    var peopleValue = $("input[name='radioPeople']:checked").val();
    if (peopleValue) {
      $('#final-people').val(peopleValue);
    }

    // Fill in selected persons if select
    var selectedPeople = $('select#amountPeopleSelect').children("option:selected").val();
    if (selectedPeople) {
      $('#final-people').val(selectedPeople);
    }
    
    // Fill in selected date
    var dt = $("#datepicker").val().split('-');
    var dateValue = dt[2] +"-"+ dt[1] +"-"+ dt[0];
    $('#final-date').val(dateValue);
  });
}

// Change dateformat for datepicker
// On select date --> get datevalue and put in var
// On select date --> delete "disabled" from btn-next
jQuery(document).ready(function ($) {
  $("#datepicker").datepicker({
    minDate: 0,
    dateFormat: "dd-mm-yy",
    onSelect: function(dateText, inst) { 
      datepickerDate = dateText;
      $('.btn-next[data-next="form-grounds"]').removeAttr("disabled");
    }
  });
});

// If session changes --> get value from datepicker
// and do showUser with datepicker value and fieldvalue
jQuery(document).ready(function ($) {
  $('#selectTimes').change(function() {
    // Fill in selected date
    var dt = datepickerDate.split('-');
    var dateValue = dt[2] +"-"+ dt[1] +"-"+ dt[0];

    var selectedSession = $('select#selectTimes').children("option:selected").val();

    showUser(dateValue, groundValue, selectedSession);

    $('.btn-next[data-next="form-people"]').attr("disabled", true);
  });
});

// Post date & fieldnumber to getFreeTimeslots.php
function showUser(date, ground, session) {
  jQuery(document).ready(function ($) {
    $.ajax({
      type: 'GET',
      url: "/wp-content/themes/yds/templates/includes/getFreeTimeslots.php",
      data: {"date": date, "ground": ground, "session": session},
      success: function(response) {
        $("#entreeTimeslots").html(response);
      }
    });
  });

}

// Post choice to getAmountOfPeople.php
function showAmountOfPeople(choice) {
  jQuery(document).ready(function ($) {
    $.ajax({
      type: 'GET',
      url: "/wp-content/themes/yds/templates/includes/getAmountOfPeople.php",
      data: {"choice": choice},
      success: function(response) {
        $("#formAmountPeople").html(response);
      }
    });
  });
}

// If choice is selected, enable next button
jQuery(document).ready(function ($) {
  // If the current selected item is checked, enable next button
  $('.form-choices__radio input[type="radio"]').on('click', function() {
    if($(this).prop('checked')){
      $('.btn-next[data-next="form-dates"]').removeAttr("disabled");
    }
    console.log($(this).val());
    showAmountOfPeople($(this).val());
  });

  //On select date --> delete "disabled" from btn-next
  $('#selectGround').change(function() {
    $('.btn-next[data-next="form-times"]').removeAttr("disabled");
  });

  // Check if radio input gets added
  // If the current selected item is checked, enable next button
  $('.form-timeslots').on('click', 'input[type="radio"]', function() {
    if($(this).prop('checked')){
      $('.btn-next[data-next="form-people"]').removeAttr("disabled");
    }
  });

  // If the current selected item is checked, enable next button
  $('.form-amountpeople').on('click', 'input[type="radio"]', function() {
    if($(this).prop('checked')){
      $('.btn-next[data-next="form-final"]').removeAttr("disabled");
    }
  });

  // If select #amountPeopleSelect changes, enable next button
  $('.form-amountpeople').on('change', '#amountPeopleSelect', function() {
    $('.btn-next[data-next="form-final"]').removeAttr("disabled");
  });
});