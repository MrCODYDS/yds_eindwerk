<?php
$spacer_top = (get_field('spacing_top_form')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_form')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$title = get_field('title_form');
$form_id = get_field('form_ID_form');
?>

<section class="block b-form <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if($title): ?>
                    <h4 class="text-primary mb-3">
                        <?= $title; ?>
                    </h4>
                <?php endif; ?>

                <?php if($text): ?>
                    <p class="text-secondary">
                        <?= $text; ?>
                    </p>
                <?php endif; ?>

                <?php // gravity_form($form_id, false, false, false, false, false, 10); ?>
            </div>
        </div>
    </div>
</section>
