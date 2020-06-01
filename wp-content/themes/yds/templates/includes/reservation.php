
<div class="modal modal--reservation modal--hidden">
    <div class="row justify-content-center align-items-center w-100 h-100">
        <div class="col-11 col-sm-9 col-lg-7 col-xl-5 col-xxl-4 modal__dialog my-4 py-3 px-4">
            <div class="modal__header">
                <span>X</span>
            </div>
            <div class="modal__content">
                <form action="/wp-content/themes/yds/templates/includes/enterFormValuesDatabase.php" class="reservation-form" id="reservation-form" method="POST">
                    <h3 class="text-center mb-3">Reservatie</h3>
                    <div class="form-choices form-part">
                        <hr class="hr-text mt-0 mb-md-3" data-content="Maak je keuze">
                        <div class="row form-choices__radio">
                            <input type="radio" id="radioSpelers" name="radioChoices" value="Individuele spelers">
                            <label for="radioSpelers" class="col text-center btn btn-primary mr-3 mr-md-5 mb-3 mb-md-5">
                                <svg class="icon"><use xlink:href="#badminton" /></svg>
                                <p class="mb-0 mt-2 mt-md-4">Individuele spelers</p>
                            </label>

                            <input type="radio" id="radioClubs" name="radioChoices" value="Clubs">
                            <label for="radioClubs" class="col text-center btn btn-primary mb-3 mb-md-5">
                                <svg class="icon"><use xlink:href="#medal" /></svg>
                                <p class="mb-0 mt-2 mt-md-4">Clubs</p>
                            </label>

                            <div class="w-100"></div>
                            <input type="radio" id="radioBedrijf" name="radioChoices" value="Bedrijven">
                            <label for="radioBedrijf" class="col text-center btn btn-primary mr-3 mr-md-5">
                                <svg class="icon"><use xlink:href="#business" /></svg>
                                <p class="mb-0 mt-2 mt-md-4">Bedrijven</p>
                            </label> 

                            <input type="radio" id="radioLorem" name="radioChoices" value="Privé training">
                            <label for="radioLorem" class="col text-center btn btn-primary">
                                <svg class="icon"><use xlink:href="#badminton" /></svg>
                                <p class="mb-0 mt-2 mt-md-4">Privé training</p>
                            </label>
                        </div>

                        <div class="w-100 text-right mt-3">
                            <button type="button" data-next="form-dates" class="btn btn-link btn-link--primary btn-next" disabled>Volgende
                                <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                            </button>
                            
                        </div>
                    </div>
                    <div class="form-dates form-part form-part--hidden">
                        <hr class="hr-text mt-0 mb-3" data-content="Kies een datum">
                        <div id="datepicker"></div>
                        <div class="d-flex justify-content-between w-100 mt-3">
                            <div>
                                <button type="button" data-previous="form-choices" class="btn btn-link btn-link--primary btn-previous">
                                    <svg class="icon icon--arrow"><use xlink:href="#arrow-left" /></svg>
                                    Vorige
                                </button>
                            </div>
                            <div>
                                <button type="button" data-next="form-grounds" class="btn btn-link btn-link--primary btn-next" disabled>
                                    Volgende
                                    <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                                </button>
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-grounds form-part form-part--hidden">
                        <div class="form-grounds__numbers row flex-column mb-5">
                            <div class="col text-center">
                                <hr class="hr-text mt-0 mb-3" data-content="Kies het gewenste speelveld">
                                <select name="grounds" id="selectGround" >
                                    <option value="" selected="selected" disabled hidden>Geen speelveld gekozen</option>
                                    <option value="1">Speelveld 1</option>
                                    <option value="2">Speelveld 2</option>
                                    <option value="3">Speelveld 3</option>
                                    <option value="4">Speelveld 4</option>
                                    <option value="5">Speelveld 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between w-100 mt-3">
                            <div>
                                <button type="button" data-previous="form-dates" class="btn btn-link btn-link--primary btn-previous">
                                    <svg class="icon icon--arrow"><use xlink:href="#arrow-left" /></svg>
                                    Vorige
                                </button>
                            </div>
                            <div>
                                <button type="button" data-next="form-times" class="btn btn-link btn-link--primary btn-next" disabled>
                                    Volgende
                                    <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-times form-part form-part--hidden">
                        <div class="form-times__sessions row flex-column mb-3">
                            <div class="col text-center">
                                <hr class="hr-text mt-0 mb-3" data-content="Kies de lengte van de sessie">
                                <select name="sessions" id="selectTimes" >
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
                                <hr class="hr-text mt-0 mb-3" data-content="Kies een starttijd">
                                <div class="form-timeslots row justify-content-start" id="entreeTimeslots"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between w-100 mt-3">
                            <div>
                                <button type="button" data-previous="form-grounds" class="btn btn-link btn-link--primary btn-previous">
                                    <svg class="icon icon--arrow"><use xlink:href="#arrow-left" /></svg>
                                    Vorige
                                </button>
                            </div>
                            <div>
                                <button type="button" data-next="form-people" class="btn btn-link btn-link--primary btn-next" disabled>
                                    Volgende
                                    <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-people form-part form-part--hidden">
                        <hr class="hr-text mt-0 mb-3" data-content="Kies het aantal personen">
                        <div id="formAmountPeople" class="form-amountpeople row justify-content-center">
                            
                        </div>
                        <div class="d-flex justify-content-between w-100 mt-3">
                            <div>
                                <button type="button" data-previous="form-times" class="btn btn-link btn-link--primary btn-previous">
                                    <svg class="icon icon--arrow"><use xlink:href="#arrow-left" /></svg>
                                    Vorige
                                </button>
                            </div>
                            <div>
                                <button type="button" data-next="form-final" class="btn btn-link btn-link--primary btn-next" disabled>
                                    Volgende
                                    <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-final form-part form-part--hidden">
                        <hr class="hr-text mt-0 mb-3" data-content="Kloppen alle onderstaande gegevens?">
                        <div>
                            <div class="form-final-choices">
                                <p>Uw keuze: <input type="text" name="final-choice" id="final-choice" readonly value=""></p>
                            </div>
                            <div class="form-final-date">
                                <p>Uw gekozen datum: <input type="date" name="final-date" id="final-date" readonly value=""></p>
                            </div>
                            <div class="form-final-ground">
                                <p>Uw gekozen veld: <input type="text" name="final-ground" id="final-ground" readonly value=""></p>
                            </div>
                            <div class="form-final-time">
                                <p>Uw gekozen tijd: <input type="text" name="final-time" id="final-time" readonly value=""></p>
                            </div>
                            <div class="form-final-people">
                                <p>Uw gekozen aantal spelers: <input type="text" name="final-people" id="final-people" readonly value=""></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between w-100 mt-3">
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

<div class="modal modal--confirmation modal--hidden">
    <div class="row justify-content-center w-100">
        <div class="col-11 col-sm-9 col-lg-7 col-xl-5 col-xxl-4 modal__dialog py-3 px-4">
            <div class="modal__header">
                <span>X</span>
            </div>
            <div class="modal__content d-flex flex-column justify content-center align-items-center text-center">
                <svg class="icon icon--confirm mb-4"><use xlink:href="#confirm" /></svg>
                <h3 class="text-secondary mb-4">Gelukt!</h3>
                <p class="px-sm-5 mb-4">Uw reservatie is bevestigd! We hebben een overzicht van uw reservatie naar uw email gestuurd.</p>
                <a href="/user-reservations" class="btn btn-secondary mb-4">Bekijk reservaties</a>
            </div>
        </div>
    </div>
</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>