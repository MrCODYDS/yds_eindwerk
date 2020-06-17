<?php
$spacer_top = (get_field('spacing_top_form')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_form')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$title = get_field('title_form');
$text = get_field('text_form');
?>

<section class="block b-form <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="block-background w-100 d-flex flex-wrap py-4 py-md-5 px-3 px-md-4">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <?php if($title): ?>
                            <h4 class="text-primary mb-3 mb-md-5">
                                <?= $title; ?>
                            </h4>
                        <?php endif; ?>

                        <?php if($text): ?>
                            <div class="contact-box">
                                <?= $text; ?>
                                <p class="m-0">Deze site wordt beschermd door reCAPTCHA en de <a target="_blank" href="https://policies.google.com/privacy">Privacy Policy</a> en <a target="_blank" href="https://policies.google.com/terms">Terms of Service</a> van Google zijn van toepassing.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="b-form__info col-md-5 offset-md-1">
                        <h4 class="text-primary mb-3 mb-md-5">Contactgegevens</h4>
                        <div class="d-flex align-items-center text-dark mb-3">
                            <svg class="icon icon--primary mr-4"><use xlink:href="#pin" /></svg>
                            <p class="m-0">Rozengaard 87<br>2550 Kontich</p>
                        </div>
                        <div class="d-flex mb-3">
                            <svg class="icon icon--primary mr-4"><use xlink:href="#mail" /></svg>
                            <a href="mailto:info.sporezo@gmail.com">info.sporezo@gmail.com</a>
                        </div>
                        <div class="d-flex mb-3">
                            <svg class="icon icon--primary mr-4"><use xlink:href="#phone" /></svg>
                            <a href="tel:0032496344257">+32 1 23 45 56 78</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>