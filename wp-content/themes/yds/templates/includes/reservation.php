<?php

    global $current_user;
    global $wpdb;

    if (isset($_POST['insert'])) {    
        $choice = $_POST['radioChoices'];
        $timeslot = $_POST['radioTimeslots'];
        $people = $_POST['radioPeople'];
        $userId = $current_user->ID;

        $table = $wpdb->prefix . "user_reservations";
       
        $success=$wpdb->insert($table, array(
            "user_id" => $userId,
            "reservation_choice" => $choice,
            "reservation_time" => $timeslot,
            "reservation_people" => $people
        ));
    }

    $con = mysqli_connect('localhost', 'root', '', 'yds_eindwerk');
?>



<div class="modal modal--hidden">
    <div class="row justify-content-center w-100">
        <div class="col-11 col-sm-9 col-lg-7 col-xl-5 col-xxl-4 modal__dialog py-3 px-4">
            <div class="modal__header">
                <span>X</span>
            </div>
            <div class="modal__content">
                <form action="" class="reservation-form" id="reservation-form" method="post">
                    <h3 class="text-center mb-5">Reservatie</h3>
                    <div class="form-choices form-part">
                        <hr class="hr-text mt-0 mb-md-3" data-content="Maak je keuze">
                        <div class="row form-choices__radio">
                            <input type="radio" id="radioSpelers" name="radioChoices" value="Individuele spelers">
                            <label for="radioSpelers" class="col text-center mr-3 mr-md-5 mb-3 mb-md-5">
                                <svg class="icon"><use xlink:href="#badminton" /></svg>
                                <p class="mb-0 mt-4">Individuele spelers</p>
                            </label>

                            <input type="radio" id="radioClubs" name="radioChoices" value="Clubs">
                            <label for="radioClubs" class="col text-center mb-3 mb-md-5">
                                <svg class="icon"><use xlink:href="#medal" /></svg>
                                <p class="mb-0 mt-4">Clubs</p>
                            </label>

                            <div class="w-100"></div>
                            <input type="radio" id="radioBedrijf" name="radioChoices" value="Bedrijfsuitje">
                            <label for="radioBedrijf" class="col text-center mr-3 mr-md-5">
                                <svg class="icon"><use xlink:href="#business" /></svg>
                                <p class="mb-0 mt-4">Bedrijfsuitje</p>
                            </label> 

                            <input type="radio" id="radioLorem" name="radioChoices" value="Lorem ipsum">
                            <label for="radioLorem" class="col text-center">
                                <svg class="icon"><use xlink:href="#badminton" /></svg>
                                <p class="mb-0 mt-4">Lorem ipsum</p>
                            </label>
                        </div>

                        <div class="w-100 text-right mt-5">
                            <button type="button" data-next="form-dates" class="btn btn-link btn-link--primary btn-next">Volgende</button>
                            <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                        </div>
                    </div>
                    <div class="form-dates form-part form-part--hidden">
                        <hr class="hr-text mt-0 mb-3" data-content="Kies een datum">
                        <div id="datepicker"></div>
                        <div class="d-flex justify-content-between w-100 mt-5">
                            <div>
                                <svg class="icon icon--arrow"><use xlink:href="#arrow-left" /></svg>
                                <button type="button" data-previous="form-choices" class="btn btn-link btn-link--primary btn-previous">Vorige</button>
                            </div>
                            <div>
                                <button type="button" data-next="form-times" class="btn btn-link btn-link--primary btn-next">Volgende</button>
                                <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                            </div>
                        </div>
                    </div>
                    <div class="form-times form-part form-part--hidden">
                        <div class="form-times__sessions row flex-column mb-5">
                            <div class="col text-center">
                                <hr class="hr-text mt-0 mb-3" data-content="Kies de lengte van de sessie">
                                <select name="sessions" id="selectTimes">
                                    <option value="" selected="selected" disabled hidden>Geen tijd gekozen</option>
                                    <option value="1">1 uur</option>
                                    <option value="2">2 uur</option>
                                    <option value="3">3 uur</option>
                                    <option value="4">4 uur</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-times__timeslots row">
                            <div class="col">
                                <hr class="hr-text mt-0 mb-3" data-content="Kies het tijdslot">
                                <div class="form-timeslots row justify-content-center">
                                    <div class="col-auto mb-3">
                                        <input type="radio" id="radiotimeslot1" name="radioTimeslots" value="08:00 - 10:00">
                                        <label for="radiotimeslot1">08:00 - 10:00</label>
                                    </div>
                                    <div class="col-auto mb-3">
                                        <input type="radio" id="radiotimeslot2" name="radioTimeslots" value="10:00 - 12:00">
                                        <label for="radiotimeslot2">10:00 - 12:00</label>
                                    </div>
                                    <div class="col-auto mb-3">
                                        <input type="radio" id="radiotimeslot3" name="radioTimeslots" value="12:00 - 14:00">
                                        <label for="radiotimeslot3">12:00 - 14:00</label>
                                    </div>
                                    <div class="col-auto mb-3">
                                        <input type="radio" id="radiotimeslot4" name="radioTimeslots" value="14:00 - 16:00">
                                        <label for="radiotimeslot4">14:00 - 16:00</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between w-100 mt-5">
                            <div>
                                <svg class="icon icon--arrow"><use xlink:href="#arrow-left" /></svg>
                                <button type="button" data-previous="form-dates" class="btn btn-link btn-link--primary btn-previous">Vorige</button>
                            </div>
                            <div>
                                <button type="button" data-next="form-people" class="btn btn-link btn-link--primary btn-next">Volgende</button>
                                <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                            </div>
                        </div>
                    </div>
                    <div class="form-people form-part form-part--hidden">
                        <hr class="hr-text mt-0 mb-3" data-content="Kies het aantal personen">
                        <div class="form-amountpeople row justify-content-center">
                            <div class="col-auto mb-3">
                                <input type="radio" id="radioPeople1" name="radioPeople" value="1">
                                <label for="radioPeople1">1</label>
                            </div>
                            <div class="col-auto mb-3">
                                <input type="radio" id="radioPeople2" name="radioPeople" value="2">
                                <label for="radioPeople2">2</label>
                            </div>
                            <div class="col-auto mb-3">
                                <input type="radio" id="radioPeople3" name="radioPeople" value="3">
                                <label for="radioPeople3">3</label>
                            </div>
                            <div class="col-auto mb-3">
                                <input type="radio" id="radioPeople4" name="radioPeople" value="4">
                                <label for="radioPeople4">4</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between w-100 mt-5">
                            <div>
                                <svg class="icon icon--arrow"><use xlink:href="#arrow-left" /></svg>
                                <button type="button" data-previous="form-times" class="btn btn-link btn-link--primary btn-previous">Vorige</button>
                            </div>
                            <div>
                                <button type="button" data-next="form-final" class="btn btn-link btn-link--primary btn-next">Volgende</button>
                                <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                            </div>
                        </div>
                    </div>
                    <div class="form-final form-part form-part--hidden">
                        <hr class="hr-text mt-0 mb-3" data-content="Kloppen alle onderstaande gegevens?">
                        <div>
                            <div class="form-final-choices">
                                <p>Uw keuze: <span id="final-choice"></span</p>
                            </div>
                            <div class="form-final-date">
                                <p>Uw gekozen datum: <span id="final-date"></span</p>
                            </div>
                            <div class="form-final-time">
                                <p>Uw gekozen tijd: <span id="final-time"></span</p>
                            </div>
                            <div class="form-final-people">
                                <p>Uw gekozen aantal spelers: <span id="final-people"></span</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between w-100 mt-5">
                            <div>
                                <svg class="icon icon--arrow"><use xlink:href="#arrow-left" /></svg>
                                <button type="button" data-previous="form-people" class="btn btn-link btn-link--primary btn-previous">Vorige</button>
                            </div>
                            <div>
                                <input type="submit" name="insert" class="btn btn-primary" value="Reserveren">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<form>
    <select name="users" onchange="showUser(this.value)">
        <option value="">Select a person:</option>
        <option value="1">Peter Griffin</option>
        <option value="2">Lois Griffin</option>
        <option value="3">Joseph Swanson</option>
        <option value="4">Glenn Quagmire</option>
    </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };

    xmlhttp.open("GET", "/wp-content/themes/yds/templates/includes/getuser.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>