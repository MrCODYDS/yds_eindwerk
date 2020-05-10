<?php



?>

<section>
    <div>
        <button id="show-modal">Modal</button>
    </div>
</section>



<div class="modal modal--hidden">
    <div class="modal__dialog">
        <div class="modal__header">
            <span>X</span>
        </div>
        <div class="modal__content">
            
            <form action="" class="reservation-form" id="reservation-form" method="post">
                <h3 class="mb-5">Reservatie</h3>
                <div class="form-choices form-part">
                    <p class="mb-3">Maak je keuze</p>
                    <div class="row form-choices__content">
                        <div class="form-choices__button col mr-5 mb-5">
                            <svg class="icon"><use xlink:href="#badminton" /></svg>
                            <p class="mb-0 mt-4">Individuele spelers</p>
                        </div>
                        <div class="form-choices__button col mb-5">
                            <svg class="icon"><use xlink:href="#medal" /></svg>
                            <p class="mb-0 mt-4">Clubs</p>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-choices__button col mr-5">
                            <svg class="icon"><use xlink:href="#business" /></svg>
                            <p class="mb-0 mt-4">Bedrijfsuitje</p>
                        </div>
                        <div class="form-choices__button col">
                            <svg class="icon"><use xlink:href="#badminton" /></svg>
                            <p class="mb-0 mt-4">Lorem ipsum</p>
                        </div>
                    </div>
                    <div class="w-100 text-right mt-5">
                        <button type="button" data-next="form-dates" class="btn btn-link btn-link--primary btn-next">Volgende</button>
                        <svg class="icon icon--arrow"><use xlink:href="#arrow-right" /></svg>
                    </div>
                </div>
                <div class="form-dates form-part form-part--hidden">
                    <p class="mb-3">Kies een datum</p>
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
                        <div class="col">
                        <p class="mb-3">Kies de lengte van de sessie</p>
                            <select name="sessions" id="sessions">
                                <option value="" selected="selected" disabled hidden>Geen tijd gekozen</option>
                                <option value="1">1 uur</option>
                                <option value="2">2 uur</option>
                                <option value="3">3 uur</option>
                                <option value="4">4 uur</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-times__timeslots row flex-column">
                        <div class="col">
                            <p class="mb-3">Kies het tijdslot</p>
                            <div class="row">
                                <div class="timeslots-box col-4 mb-3">
                                    <p class="m-0">08:00 - 10:00</p>
                                </div>
                                <div class="timeslots-box col-4 mb-3">
                                    <p class="m-0">10:00 - 12:00</p>
                                </div>
                                <div class="timeslots-box col-4 mb-3">
                                    <p class="m-0">12:00 - 14:00</p>
                                </div>
                                <div class="timeslots-box col-4 mb-3">
                                    <p class="m-0">12:00 - 14:00</p>
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
                    <p class="mb-3">Kies het aantal personen</p>
                    <div class="form-people row">
                        <div class="col">
                            <div class="row">
                                <div class="people-box col-3 mb-3">
                                    <p class="m-0">1</p>
                                </div>
                                <div class="people-box col-3 mb-3">
                                    <p class="m-0">2</p>
                                </div>
                                <div class="people-box col-3 mb-3">
                                    <p class="m-0">3</p>
                                </div>
                                <div class="people-box col-3 mb-3">
                                    <p class="m-0">4</p>
                                </div>
                            </div>
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
                    <p class="mb-3">Kloppen alle onderstaande gegevens?</p>
                    <div>
                        <div class="form-final-choices">
                            <p>Uw keuze: <span>Individuele spelers</span</p>
                        </div>
                        <div class="form-final-choices">
                            <p>Uw gekozen datum: <span>10/05/2020</span</p>
                        </div>
                        <div class="form-final-choices">
                            <p>Uw gekozen tijd: <span>10uur - 12uur</span</p>
                        </div>
                        <div class="form-final-choices">
                            <p>Uw gekozen aantal spelers: <span>3</span</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between w-100 mt-5">
                        <div>
                            <svg class="icon icon--arrow"><use xlink:href="#arrow-left" /></svg>
                            <button type="button" data-previous="form-people" class="btn btn-link btn-link--primary btn-previous">Vorige</button>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Reserveren</button>
                        </div>
                    </div>
                </div>
                <!--<button type="submit">Reserveren</button>-->
            </form>
        </div>
    </div>
</div>

