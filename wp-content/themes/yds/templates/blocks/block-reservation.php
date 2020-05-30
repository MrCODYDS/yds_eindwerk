<?php
$spacer_top = (get_field('spacing_top_reservation')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_reservation')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$image_align = get_field('image_align_reservation');
$image = get_field('image_reservation');
$image_url = wp_get_attachment_image_url($image, 'full');
$title = get_field('title_reservation');
$text = get_field('text_reservation');
$cta = get_field('cta_button_reservation');
$cta_settings = get_field('cta_settings_reservation');

?>

<section class="block b-reservation <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-start">
                <div class="block-background text-center text-md-left py-4 py-md-5 px-3 px-md-4">
                    <?php if($title): ?>
                        <h2 class="m-0"><?= $title; ?></h2>
                    <?php endif; ?>
                    <?php if($text): ?>
                        <p class="my-3"><?= $text; ?></p>
                    <?php endif; ?>
                    <?php if($cta): ?>
                        <button class="btn btn-secondary btn-stretched px-4 show-modal">
                                <?= $cta_settings['cta_text_reservation']; ?>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="b-reservation__image d-none d-lg-flex col-lg-5 justify-content-end">
                <?= wp_get_attachment_image($image, 'full', false, array("title" => get_the_title($image), 'class' => 'img-fluid mr-5')) ?>
            </div>
        </div>
    </div>
</section>