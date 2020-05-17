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

                                <?php if($column['list_link_itemlist']): ?>
                                    <a href="<?= $column['list_link_itemlist']['url']; ?>" class="btn btn-link">
                                        <?= $column['list_link_itemlist']['title']; ?>
                                    </a>
                                <?php endif; ?>
                                
                            </div>
                            <div>
                            <svg class="icon"><use xlink:href="#<?= $column['list_icon_itemlist'] ?>" /></svg>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-5 col-lg-6 col-xl-5 <?php if($icon_align == 'left'): ?>offset-xl-1<?php endif; ?> d-flex flex-column justify-content-center">
                <?php if($title): ?>
                    <h2 class="mb-3"><?= $title; ?></h2>
                <?php endif; ?>

                <?php if($text): ?>
                    <p class="m-0"><?= $text; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>