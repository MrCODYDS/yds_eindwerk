<?php
$spacer_top = (get_field('spacing_top_itemlist')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_itemlist')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$title = get_field('title_itemlist');
$image = get_field('image_itemlist');
$image_align = get_field('image_align_itemlist');
$text = get_field('text_itemlist');
$icon_align = get_field('icon_align_itemlist');
$repeater = get_field('item_list_itemlist');

?>

<section class="block b-item-list <?php if($image_align == 'left'): ?>b-item-list--left<?php endif; ?>
    <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 <?php if($image_align == 'left'): ?>offset-xl-3<?php endif; ?>">
                <div class="block-background d-flex flex-wrap justify-content-center align-items-center py-4 py-md-5 px-0 px-md-5">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <?php if($title): ?>
                            <h3 class="mb-3"><?= $title; ?></h3>
                        <?php endif; ?>

                        <?php if($text): ?>
                            <div class="m-0"><?= $text; ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col col-lg-6 col-xxl-5 offset-xxl-1">
                        <div class="row">
                        <?php foreach($repeater as $column): ?>
                            <div class="b-item-list__repeater col-12 col-sm-4 col-lg-12 mb-4">
                                <div class="b-item-list__item py-3 px-4">
                                    <div class="b-item-list__icon mr-4 mr-sm-0 mr-lg-4 mb-0 mb-sm-3 mb-lg-0">
                                        <svg class="icon"><use xlink:href="#<?= $column['list_icon_itemlist'] ?>" /></svg>
                                    </div>
                                    <div class="b-item-list__text">
                                        <?php if($column['list_text_itemlist']): ?>
                                            <h5><?= $column['list_text_itemlist']; ?></h5>
                                        <?php endif; ?>

                                        <?php if($column['list_link_itemlist']): ?>
                                            <a href="<?= $column['list_link_itemlist']['url']; ?>" class="btn btn-link">
                                                <?= $column['list_link_itemlist']['title']; ?>
                                                <svg class="icon icon--arrow icon--white"><use xlink:href="#arrow-right" /></svg>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>