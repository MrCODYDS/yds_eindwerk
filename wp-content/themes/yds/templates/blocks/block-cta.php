<?php
$spacer_top = (get_field('spacing_top_cta')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_cta')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$text_align = 'text-'.get_field('text_align_cta');
$title = get_field('title_cta');
$text = get_field('text_cta');
$cta = get_field('cta_button_cta');
$cta_settings = get_field('cta_settings');

?>

<section class="block b-cta <?= $text_align; ?> <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="b-cta__content">
                    <?php if($title): ?>
                        <h2 class="m-0"><?= $title; ?></h2>
                    <?php endif; ?>

                    <?php if($text): ?>
                        <p class="mx-0 mx-md-8 my-3"><?= $text; ?></p>
                    <?php endif; ?>
                </div>

                <?php if($cta): ?>
                    <a href="<?= $cta_settings['cta_link_cta']['url']; ?>" class="btn btn-<?= $cta_settings['cta_type_cta']; ?> px-4">
                        <?= $cta_settings['cta_link_cta']['title']; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>