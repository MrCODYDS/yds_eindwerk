<?php
$spacer_top = (get_field('spacing_top_numberlist')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_numberlist')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$title = get_field('title_numberlist');
$repeater = get_field('repeater_numberlist');

?>

<div class="block b-numberlist <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="block-background py-6 px-0 px-md-5">
            <div class="row text-center">
                <div class="col mb-3">
                    <?php if($title): ?>
                        <h2><?= $title; ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row justify-content-between mx-lg-4 mx-xl-6 mx-xxl-8">
                <?php if($repeater): $i = 0; ?>
                    <?php foreach($repeater as $column): $i++ ?>
                        <div class="col-lg-6 d-flex align-items-start mb-4">
                            <div class="b-numberlist__number col-2">
                                <h2><?php echo "0" . $i ?></h2>
                            </div>
                            <div class="col-10">
                                <?php if($column['repeater_title_numberlist']): ?>
                                    <h3><?= $column['repeater_title_numberlist']; ?></h3>
                                <?php endif; ?>
                                <?php if($column['repeater_text_numberlist']): ?>
                                    <p class="m-0"><?= $column['repeater_text_numberlist']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
            
            