<?php
$spacer_top = (get_field('spacing_top_hero')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_hero')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$text_align = strtolower('text-'.get_field('text_align_hero'));
$image = get_field('image_hero');
$title = get_field('title_hero');
$text = get_field('text_hero');
$cta = get_field('cta_button_hero');
$cta_settings = get_field('cta_settings_hero');

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

<section class="block b-hero <?= $text_align; ?>">
    <div class="b-hero__img"></div>
    <div class="b-hero__content py-4 py-md-0">
        <div class="container">
            <div class="row <?= $row_display; ?>">
                <div class="col-lg-8 <?= $col_display ?>">
                    <?php if($title): ?>
                        <h1 class="b-hero__title mb-0"><?= $title; ?></h1>
                    <?php endif; ?>

                    <?php if($text): ?>
                        <p class="my-3"><?= $text; ?></p>
                    <?php endif; ?>

                    <?php if($cta): ?>
                        <a href="<?= $cta_settings["cta_link_hero"]["url"]; ?>" class="btn btn-<?= $cta_settings["cta_type_hero"]; ?> mt-2">
                            <?= $cta_settings["cta_link_hero"]['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>