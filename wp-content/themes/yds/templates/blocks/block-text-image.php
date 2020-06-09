<?php
$spacer_top = (get_field('spacing_top_textimage')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_textimage')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$image_align = get_field('image_align_textimage');
$image = get_field('image_textimage');
$title = get_field('title_textimage');
$text = get_field('text_textimage');
$cta = get_field('cta_textimage');
$cta_settings = get_field('cta_settings_textimage');
$id = (get_field('redirect_id_textimage')) ? get_field('redirect_id_textimage') : '';

?>

<section class="block b-text-image <?= $spacer_top; ?> <?= $spacer_bottom; ?>" id="<?= $id ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="block-background d-flex flex-wrap py-4 py-md-5 px-3 px-md-4">
                    <div class="b-text-image__image col-lg-5 <?php if($image_align == 'right'): ?>order-lg-last offset-lg-1<?php endif; ?> d-flex align-items-center mb-3 mb-lg-0">
                        <?= wp_get_attachment_image($image, 'block-text', false, array("title" => get_the_title($image), 'class' => 'img-fluid')) ?>
                    </div>
                    <div class="col-lg-6 <?php if($image_align == 'left'): ?>offset-lg-1<?php endif; ?> d-flex flex-column justify-content-center align-items-start">
                        <?php if($title): ?>
                            <h3 class="m-0"><?= $title; ?></h3>
                        <?php endif; ?>

                        <?php if($text): ?>
                            <div class="mt-3 mb-0"><?= $text; ?></div>
                        <?php endif; ?>

                        <?php if($cta): ?>
                            <a href="<?= $cta_settings["cta_link_textimage"]["url"]; ?>" class="btn btn-<?= $cta_settings["cta_type_textimage"]; ?> mt-3">
                                <?= $cta_settings["cta_link_textimage"]['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>