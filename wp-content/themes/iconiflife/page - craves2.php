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
                <div class="grid-sizer"></div>
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'posts_per_page' => '30',
                    'paged' => $paged,
                    'post_type' => $pageCat,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $query = new WP_Query( $args );
                if( $query->have_posts()) { ?>
                    <?php while( $query->have_posts() ) {
                        $query->the_post();
                        $columnSize = get_field('one_or_two_columns')?>
                        <div class="featured-item-new <?php echo $columnSize; ?> jpibfi_container">
                            <?php if(get_field('homepage_image')) {
                                $featureImg = get_field('homepage_image'); ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $featureImg['sizes'][$columnSize]; ?>" srcset="<?php echo $featureImg['sizes'][$columnSize . '2x']; ?>" /></a>
                            <?php } else { ?>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($columnSize . '2x'); ?></a>
                            <?php }?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_field('post_content'); ?>
                            <?php if(get_field('shop_url')) { ?>
                                <p>
                                    <a href="<?php the_field('shop_url'); ?>" class="shop-btn">shop</a>
                                </p>
                            <?php }?>
                        </div>
                    <?php } ?>
                <?php } ?>
            
                <div class="grid-sizer"></div>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'posts_per_page' => '30',
                    'category_name' => $pageCat,
                    'paged' => $paged,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $query = new WP_Query( $args );
                if( $query->have_posts()) { ?>
                    <?php while( $query->have_posts() ) {
                        $query->the_post();
                        $columnSize = 'one-column'?>
                        <div class="featured-item-new <?php echo $columnSize; ?> jpibfi_container">
                            <?php if(get_field('homepage_image')) {
                                $featureImg = get_field('homepage_image'); ?>
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $featureImg['sizes'][$columnSize]; ?>" srcset="<?php echo $featureImg['sizes'][$columnSize . '2x']; ?>" /></a>
                            <?php } else { ?>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($columnSize . '2x'); ?></a>
                            <?php }?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_content(); ?>
                            <?php if(get_field('shop_url')) { ?>
                                <p>
                                    <a href="<?php the_field('shop_url'); ?>" class="shop-btn">shop</a>
                                </p>
                            <?php }?>
                        </div>
                    <?php } ?>
                <?php } ?>

                <section id="loadmore">
                    <?php next_posts_link('Load More',$query->max_num_pages); ?>
                </section>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

            </div>
        </div>
    </section>



<?php get_footer(); ?>
