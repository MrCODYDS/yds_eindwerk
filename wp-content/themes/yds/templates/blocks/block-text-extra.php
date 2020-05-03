<?php
$spacer_top = (get_field('spacing_top_textextra')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_textextra')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$image_align = get_field('image_align_textextra');
$image = get_field('image_textextra');
$title = get_field('title_textextra');
$text = get_field('text_textextra');
$cta = get_field('cta_button_textextra');
$cta_settings = get_field('cta_settings_textextra');

?>

<section class="block b-text-extra <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <div class="b-text-extra__image col-lg-5 <?php if($image_align == 'right'): ?>justify-content-end order-lg-last offset-lg-1<?php endif; ?> d-flex align-items-center mb-3 mb-lg-0  pb-4">
                <?= wp_get_attachment_image($image, 'full', false, array("title" => get_the_title($image), 'class' => 'img-fluid')) ?>
                <div class="b-text-extra__block d-none d-lg-block <?php if($image_align == 'right'): ?>b-text-extra__block--left <?php endif; ?> "></div>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start <?php if($image_align == 'left'): ?>offset-lg-1<?php endif; ?>">
                <?php if($title): ?>
                    <h2><?= $title; ?></h2>
                <?php endif; ?>

                <?php if($text): ?>
                    <p><?= $text; ?></p>
                <?php endif; ?>

                <?php if($cta): ?>
                    <a href="<?= $cta_settings["cta_link_textextra"]["url"]; ?>" class="btn btn-<?= $cta_settings["cta_type_textextra"]; ?> mt-2">
                        <?= $cta_settings["cta_link_textextra"]['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>