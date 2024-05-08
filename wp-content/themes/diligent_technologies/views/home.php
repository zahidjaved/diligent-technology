<?php /* Template Name: HomePage */ ?>

<?php

    get_header();
?>

<?php echo get_template_part('template-parts/home/home-hero' , 'page') ?>
<?php echo get_template_part('template-parts/home/about-us' , 'page') ?>
<?php echo get_template_part('template-parts/home/team' , 'page') ?>
<?php echo get_template_part('template-parts/home/staff-augmentation' , 'page') ?>
<?php echo get_template_part('template-parts/home/pricing' , 'page') ?>
<?php echo get_template_part('template-parts/home/news-letter' , 'page') ?>


<?php
get_footer();