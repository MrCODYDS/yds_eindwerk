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
                <div class="block-background b-cta__content py-4 py-md-5 px-3 px-md-4">
                    <div class="py-2">
                        <?php if($title): ?>
                            <h3 class="b-cta__content__title m-0"><?= $title; ?></h3>
                        <?php endif; ?>

                        <?php if($text): ?>
                            <p class="b-cta__content__text mx-0 mx-md-8 my-3"><?= $text; ?></p>
                        <?php endif; ?>
                    </div>

                    <?php if($cta): ?>
                        <?php if($cta_settings['cta_reservation_cta']): ?>
                            <button class="btn btn-secondary btn-cta px-4 show-modal">
                                <?= $cta_settings['cta_link_cta']['title']; ?>
                            </button>
                        <?php else: ?>
                            <a href="<?= $cta_settings['cta_link_cta']['url']; ?>" class="btn btn-secondary btn-cta px-4">
                                <?= $cta_settings['cta_link_cta']['title']; ?>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</section>

