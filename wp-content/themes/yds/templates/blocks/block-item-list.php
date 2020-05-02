<?php
$spacer_top = (get_field('spacing_top_itemlist')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_itemlist')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$title = get_field('title_itemlist');
$text = get_field('text_itemlist');
$itemlist = get_field('item_list_itemlist');

?>

<section class="block b-item-list <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <div class="b-item-list__image col-lg-5 <?php if($image_align == 'right'): ?>order-md-last offset-lg-1<?php endif; ?> d-flex align-items-center mb-3 mb-lg-0">
                <div class="b-item-list__circle"></div>
            </div>
            <div class="col-lg-6 <?php if($image_align == 'left'): ?>offset-lg-1<?php endif; ?> d-flex flex-column justify-content-center">
                <?php if($title): ?>
                    <h2><?= $title; ?></h2>
                <?php endif; ?>

                <?php if($text): ?>
                    <p><?= $text; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>