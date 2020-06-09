<?php
$spacer_top = (get_field('spacing_top_numberlist')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_numberlist')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$title = get_field('title_numberlist');
$repeater = get_field('repeater_numberlist');

?>

<div class="block b-numberlist <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
            <div class="row text-center d-block d-lg-none">
                <div class="col mb-3">
                    <?php if($title): ?>
                        <h3><?= $title; ?></h3>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row text-center">
                <?php foreach($repeater as $column): ?>
                    <div class="b-numberlist-wrapper col-12 col-md-6 col-lg-3">
                        <div class="block-background b-numberlist-content h-100 py-4 py-md-5 px-3 px-md-4">
                            <?= wp_get_attachment_image($column['repeater_image_numberlist'], 'block-numbers', false, array("title" => get_the_title($column['repeater_image_numberlist']), 'class' => 'img-fluid mb-0 mb-md-3 p-3 p-md-0')); ?>
                            <div class="text-left text-md-center ml-3 ml-md-0 pr-2 pr-md-0">
                                <?php if($column['repeater_title_numberlist']): ?>
                                    <h5 class="mb-0 mb-md-2"><?= $column['repeater_title_numberlist']; ?></h5>
                                <?php endif; ?>

                                <?php if($column['repeater_text_numberlist']): ?>
                                    <p class="m-0"><?= $column['repeater_text_numberlist']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
            
            