<?php
$spacer_top = (get_field('spacing_top_reservation')) ? 'pt-7 pt-md-7 pt-lg-7' : '';
$spacer_bottom = (get_field('spacing_bottom_reservation')) ? 'pb-7 pb-md-7 pb-lg-7' : '';
$image_align = get_field('image_align_reservation');
$image = get_field('image_reservation');
$image_url = wp_get_attachment_image_url($image, 'full');
$title = get_field('title_reservation');
$text = get_field('text_reservation');
$cta = get_field('cta_button_reservation');
$cta_settings = get_field('cta_settings_reservation');

?>

<section class="block b-reservation">
    <div class="container position-relative">
        <div class="d-none d-lg-block b-reservation-image" style="background-image: url(<?= $image_url; ?>)"></div>
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
                <?php if($title): ?>
                    <h2 class="text-white m-0"><?= $title; ?></h2>
                <?php endif; ?>
                <?php if($text): ?>
                    <p class="text-white my-3"><?= $text; ?></p>
                <?php endif; ?>
                <?php if($cta): ?>
                    <button class="btn btn-<?= $cta_settings['cta_type_reservation']; ?> px-4 show-modal">
                            <?= $cta_settings['cta_text_reservation']; ?>
                    </button>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</section>