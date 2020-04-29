<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_template_part('header'); ?>

<main role="main">

</main>

<?php get_template_part('footer'); ?>
<?php wp_footer(); ?>
    
</body>
</html>