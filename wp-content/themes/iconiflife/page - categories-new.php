<?php
/*
   Template Name: Category NEW
*/

get_header(); the_post(); ?>


    <?php
        $pageCat = get_field('category_to_display_on_page');
        if($pageCat == 'beauty') {
            $pageCat = 'style';
            $taxSlug = 'style-categories';
            $termCat ='beauty';
        }
        if($pageCat == 'wellness') {
            $pageCat ='style';
            $taxSlug = 'style-categories';
            $termCat = 'wellness';
        }
        if($pageCat == 'wine-spirits') {
            $pageCat ='food';
            $taxSlug = 'food-categories';
            $termCat = 'wine-spirits';
        }
        if($pageCat == 'adventure') {
            $pageCat ='travel';
            $taxSlug = 'travel-categories';
            $termCat = 'adventure';
        }

    ?>

    <section id="category-content">

        <div class="wrap">
            <h5 class="icon-slash"><?php the_title(); ?></h5>
            <h3><?php the_field('sub_headline');?></h3>
            <div class="featured-list-cat">


            <?php
            the_content();?>




            </div>


        </div>
    </section>



<?php get_footer(); ?>
