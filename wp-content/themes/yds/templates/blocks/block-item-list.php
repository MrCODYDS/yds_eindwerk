<?php
$spacer_top = (get_field('spacing_top_itemlist')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_itemlist')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$title = get_field('title_itemlist');
$text = get_field('text_itemlist');
$icon_align = get_field('icon_align_itemlist');
$repeater = get_field('item_list_itemlist');

?>

<section class="block b-item-list <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <div class="b-item-list__image col-md-7 col-lg-6
            <?php if($icon_align == 'right'): ?>
                order-last offset-xl-1
            <?php else: ?>
                order-last order-md-first
            <?php endif; ?> d-flex flex-column justify-content-center mb-3 mb-lg-0">
                <div class="b-item-list__circle <?php if($icon_align == 'left'): ?>b-item-list__circle--left<?php endif; ?>"></div>

                <div class="b-item-list__items">
                    <?php foreach($repeater as $column): ?>
                        <div class="b-item-list__item <?php if($icon_align == 'right'): ?>b-item-list__item--right<?php endif; ?> col-8 d-flex justify-content-between align-items-center position-relative px-4 py-3">
                            <div class="b-item-list__text">
                                <?php if($column['list_text_itemlist']): ?>
                                    <h3><?= $column['list_text_itemlist']; ?></h3>
                                <?php endif; ?>

                                <?php if($column['list_button_itemlist']): ?>
                                    <p><?= $column['list_button_itemlist']; ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <svg class="icon icon-arrow" style="width: 25px; height: 13px;">
                                    <use xlink:href="#Page-1"></use>
                                </svg>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-5 col-lg-6 col-xl-5 <?php if($icon_align == 'left'): ?>offset-xl-1<?php endif; ?> d-flex flex-column justify-content-center">
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

            <?php foreach($repeater as $column): ?>
                <?php if($amount == '2'): ?><div class="col-sm-12 col-md-6"><?php endif; ?>
                <?php if($amount == '3'): ?><div class="col-sm-12 col-md-4"><?php endif; ?>

                    <?= wp_get_attachment_image($column['image_flex'], 'full', false, array("title" => get_the_title($column['image_flex']), 'class' => 'img-fluid mb-3')); ?>

                    <?php if($column['title_flex']): ?>
                        <h3><?= $column['title_flex']; ?></h3>
                    <?php endif; ?>

                    <?php if($column['text_flex']): ?>
                        <p><?= $column['text_flex']; ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>