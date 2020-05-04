<?php
$spacer_top = (get_field('spacing_top_flex')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_flex')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$title = get_field('title_flex');
$text = get_field('text_flex');
$repeater = get_field('repeater_flex');
$amount = get_field('number_of_columns_flex');

?>

<div class="block block-flex <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <?php foreach($repeater as $column): ?>
                <?php if($amount == '2'): ?><div class="col-sm-12 col-md-6"><?php endif; ?>
                <?php if($amount == '3'): ?><div class="col-sm-12 col-md-4"><?php endif; ?>

                    <?= wp_get_attachment_image($column['image_flex'], 'full', false, array("title" => get_the_title($column['image_flex']), 'class' => 'img-fluid mb-3')); ?>

                    <?php if($column['title_flex']): ?>
                        <h3 class="mb-3"><?= $column['title_flex']; ?></h3>
                    <?php endif; ?>

                    <?php if($column['text_flex']): ?>
                        <p class="m-0"><?= $column['text_flex']; ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>