<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_template_part('header'); ?>

<main role="main">
    <?php include yds_template_path(); ?>
    <a id="scrollTop" href="#"><svg class="icon icon--top"><use xlink:href="#arrow-up" /></svg></a>
</main>

<?php include 'templates/includes/reservation.php'; ?>

<?php get_template_part('footer'); ?>
<?php get_template_part('templates/includes/sidebar'); ?>

<?php wp_footer(); ?>

<div class="hidden" hidden>
    <?php include_once('src/sprites/sprites.svg'); ?>
</div>

</body>
</html>