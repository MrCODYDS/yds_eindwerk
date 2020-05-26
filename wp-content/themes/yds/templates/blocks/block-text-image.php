<?php
$spacer_top = (get_field('spacing_top_textimage')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_textimage')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$image_align = get_field('image_align_textimage');
$image = get_field('image_textimage');
$title = get_field('title_textimage');
$text = get_field('text_textimage');
$cta = get_field('cta_textimage');
$cta_settings = get_field('cta_settings_textimage');

?>

<section class="block b-text-image <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="block-background row py-6 px-0 px-md-5">
            <div class="b-text-image__image col-lg-5 <?php if($image_align == 'right'): ?>order-lg-last offset-lg-1<?php endif; ?> d-flex align-items-center mb-3 mb-lg-0">
                <?= wp_get_attachment_image($image, 'full', false, array("title" => get_the_title($image), 'class' => 'img-fluid')) ?>
            </div>
            <div class="col-lg-6 <?php if($image_align == 'left'): ?>offset-lg-1<?php endif; ?> d-flex flex-column justify-content-center align-items-start">
                <?php if($title): ?>
                    <h2 class="m-0"><?= $title; ?></h2>
                <?php endif; ?>

                <?php if($text): ?>
                    <p class="my-3"><?= $text; ?></p>
                <?php endif; ?>

                <?php if($cta): ?>
                    <a href="<?= $cta_settings["cta_link_textimage"]["url"]; ?>" class="btn btn-<?= $cta_settings["cta_type_textimage"]; ?>">
                        <?= $cta_settings["cta_link_textimage"]['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>