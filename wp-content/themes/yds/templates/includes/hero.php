<?php
$title = get_field('title_front_hero');
$text = get_field('text_front_hero');
$image = get_field('image_front_hero');
$cta = get_field('cta_button_front_hero');
$cta_settings = get_field('cta_settings_front_hero');

?>

<section class="c-hero d-none d-lg-block pt-5 pt-md-4 pt-lg-5 pb-5 pb-md-4 pb-lg-5">
    <div class="c-hero__content py-4 py-md-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
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
                <div class="c-hero__image col-lg-5 d-none d-lg-block">
                    <?= wp_get_attachment_image($image, 'full', false, array("title" => get_the_title($image), 'class' => 'img-fluid')) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="c-hero d-block d-lg-none pt-5 pt-md-4 pt-lg-5 pb-5 pb-md-4 pb-lg-5">
    <div class="c-hero__content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="hero-background d-flex flex-column align-items-center py-4 py-md-5 px-3 px-md-4">
                        <div class="text-center">
                            <?php if($title): ?>
                                <h1 class="c-hero__title mb-0"><?= $title; ?></h1>
                            <?php endif; ?>

                            <?php if($text): ?>
                                <p class="my-3"><?= $text; ?></p>
                            <?php endif; ?>

                            <?php if($cta): ?>
                                <a href="<?= $cta_settings["cta_link_front_hero"]["url"]; ?>" class="btn btn-<?= $cta_settings["cta_type_front_hero"]; ?> btn-stretched mt-2">
                                    <?= $cta_settings["cta_link_front_hero"]['title']; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="c-hero__image order-first">
                            <?= wp_get_attachment_image($image, 'full', false, array("title" => get_the_title($image), 'class' => 'img-fluid')) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>