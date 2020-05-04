<?php
$spacer_top = (get_field('spacing_top_textimage')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_textimage')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$image_align = get_field('image_align_textimage');
$image = get_field('image_textimage');
$title = get_field('title_textimage');
$text = get_field('text_textimage');

?>

<section class="block b-text-image <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <div class="b-text-image__image col-lg-5 <?php if($image_align == 'right'): ?>order-lg-last offset-lg-1<?php endif; ?> d-flex align-items-center mb-3 mb-lg-0">
                <?= wp_get_attachment_image($image, 'full', false, array("title" => get_the_title($image), 'class' => 'img-fluid')) ?>
            </div>
            <div class="col-lg-6 <?php if($image_align == 'left'): ?>offset-lg-1<?php endif; ?> d-flex flex-column justify-content-center">
                <?php if($title): ?>
                    <h2 class="mb-3"><?= $title; ?></h2>
                <?php endif; ?>

                <?php if($text): ?>
                    <p class="m-0"><?= $text; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>