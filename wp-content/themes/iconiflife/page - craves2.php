<?php
/*
   Template Name: Craves2
*/

get_header(); the_post(); ?>


    <?php
        $pageCat = get_field('category_to_display_on_page');

    ?>

    <section id="craves-content">
        <div class="wrap">
            <h5 class="icon-slash"><?php the_title(); ?></h5>
            <h3><?php the_field('sub_headline');?></h3>
            <div class="featured-list-new">
                    <?php printr($pageCat);?>

                        <?php the_content();?>


            </div>
            <div style="clear:both;">

            </div>

        </div>
    </section>



<?php get_footer(); ?>
