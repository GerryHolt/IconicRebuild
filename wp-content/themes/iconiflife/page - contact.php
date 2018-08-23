<?php
/*
   Template Name: Contact
*/

get_header(); the_post(); ?>

<div id="contact">
    <h2><?php the_title(); ?></h2>
</div>

<div id="content">
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>
