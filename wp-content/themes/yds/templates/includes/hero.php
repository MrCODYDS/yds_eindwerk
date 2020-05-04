<?php
$text_align = strtolower('text-'.get_field('text_align_front_hero'));
$image = get_field('image_front_hero');
$title = get_field('title_front_hero');
$text = get_field('text_front_hero');
$cta = get_field('cta_button_front_hero');
$cta_settings = get_field('cta_settings_front_hero');

if ($text_align == "text-center") {
    $col_display = "d-flex flex-column align-items-center";
    $row_display = "justify-content-center";
} else if ($text_align == "text-left") {
    $col_display = "align-items-left";
    $row_display = "justify-content-start";
} else {
    $col_display = "align-items-right";
    $row_display = "justify-content-end";
}

?>

<section class="c-hero <?= $text_align; ?>">
    <div class="c-hero__img" style="background-image: url(<?= wp_get_attachment_image_url($image,  'full'); ?>)"></div>
    <div class="c-hero__content py-4 py-md-0">
        <div class="container">
            <div class="row <?= $row_display; ?>">
                <div class="col-lg-8 <?= $col_display ?>">
                    <?php if($title): ?>
                        <h1 class="c-hero__title mb-0"><?= $title; ?></h1>
                    <?php endif; ?>

                    <?php if($text): ?>
                        <p class="my-3"><?= $text; ?></p>
                    <?php endif; ?>

                    <?php if($cta): ?>
                        <a href="<?= $cta_settings["cta_link_front_hero"]["url"]; ?>" class="btn btn-<?= $cta_settings["cta_type_front_hero"]; ?> mt-2">
                            <?= $cta_settings["cta_link_front_hero"]['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>