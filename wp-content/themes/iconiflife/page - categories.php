<?php
/*
   Template Name: Category
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
                $paged = (get_query_var('paged') ) ? get_query_var('paged') : 1;
                if($taxSlug){
                    $args = array(
                        'paged' => $paged,

                        'post_type' => $pageCat,
                        'tax_query' => array(
                                array(
                                    'taxonomy' => $taxSlug,
                                    'field' => 'slug',
                                    'terms' => array( $termCat )
                                )
                        ),

                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                } else {
                    $args = array(
                        'paged' => $paged,

                        'post_type' => $pageCat,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                }
                global $tq;
                $tq = new WP_Query( $args );
                if( $tq->have_posts()) { ?>
                    <?php while( $tq->have_posts() ) {
                        $tq->the_post();
                        $columnSize = 'one-column'?>
                        <div class="featured-item jpibfi_container">
                            <?php if(get_field('homepage_image')) {
                                $featureImg = get_field('homepage_image'); ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $featureImg['sizes']['old-stories']; ?>" /></a>
                            <?php } else { ?>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('old-stories'); ?></a>
                            <?php }?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                    <?php } ?>
                    <!-- <div class="pagination" style="font-size:18px;">
                        <?php next_posts_link( 'Next Page', $tq->max_num_pages ); ?>
                 </div> -->
                <?php } ?>



            </div>


        </div>
    </section>



<?php get_footer(); ?>
