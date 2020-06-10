<?php
$spacer_top = (get_field('spacing_top_form')) ? 'pt-5 pt-md-4 pt-lg-5' : '';
$spacer_bottom = (get_field('spacing_bottom_form')) ? 'pb-5 pb-md-4 pb-lg-5' : '';
$title = get_field('title_form');
$text = get_field('text_form');
?>

<section class="block b-form <?= $spacer_top; ?> <?= $spacer_bottom; ?>">
    <div class="container">
        <div class="row">
            <div class="block-background w-100 d-flex flex-wrap py-4 py-md-5 px-3 px-md-4">
                <div class="col-md-6 mb-5 mb-md-0">
                    <?php if($title): ?>
                        <h4 class="text-primary mb-3">
                            <?= $title; ?>
                        </h4>
                    <?php endif; ?>

                    <?php if($text): ?>
                        <?= $text; ?>
                    <?php endif; ?>
                </div>
                <div class="b-form__info col-md-5 offset-md-1">
                    <h4 class="text-primary mb-3">Contactgegevens</h4>
                    <div class="text-primary mb-3">
                        <p class="font-weight-bold m-0">Adres:</p>
                        <?php the_field('contact_adres'); ?>
                    </div>
                    <div class="text-primary mb-3">
                        <p class="font-weight-bold m-0">Email:</p>
                        <a href="mailto:<?php the_field('contact_email');?>"><?php the_field('contact_email'); ?></a>
                    </div>
                    <div class="text-primary mb-3">
                        <p class="font-weight-bold m-0">Telefoon:</p>
                        <a href=""><?php the_field('contact_telefoon'); ?></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>