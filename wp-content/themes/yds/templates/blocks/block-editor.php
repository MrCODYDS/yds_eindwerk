<?php
$spacer_top = (get_field('spacing_top_editor')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_editor')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$text_align = strtolower('text-'.get_field('text_align_editor'));
$boxed = get_field('boxed_editor');
$title = get_field('title_editor');
$text = get_field('text_editor');
?>

<section class="block b-editor <?= $text_align; ?> <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="<?php if($boxed): ?>border border-primary p-4 p-lg-6 <?php endif; ?> <?= $text_align; ?>">
            <?php if($title): ?>
                <h3><?= $title; ?></h3>
            <?php endif; ?>

            <?php if($text): ?>
                <p><?= $text; ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
