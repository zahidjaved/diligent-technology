<?php /* Template Name: blog */ ?>

<?php

    get_header();
?>

<?php echo get_template_part('template-parts/blog/hero' , 'page') ?>
<?php echo get_template_part('template-parts/blog/communication' , 'page') ?>
<?php echo get_template_part('template-parts/blog/post-listing' , 'page') ?>
<?php echo get_template_part('template-parts/blog/news-letter' , 'page') ?>





<?php
get_footer();