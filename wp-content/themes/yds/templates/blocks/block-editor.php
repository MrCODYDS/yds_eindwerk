<?php
$spacer_top = (get_field('spacing_top_editor')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_editor')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$text_align = strtolower('text-'.get_field('text_align_editor'));
$title = get_field('title_editor');
$text = get_field('text_editor');
?>

<section class="block b-editor <?= $text_align; ?> <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="block-background d-flex flex-wrap py-4 py-md-5 px-3 px-md-4">
                    <div class="<?= $text_align; ?> w-100">
                        <?php if($title): ?>
                            <h3><?= $title; ?></h3>
                        <?php endif; ?>

                        <?php if($text): ?>
                            <?= $text; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
