<?php
/*
   Template Name: Category
*/

get_header(); the_post(); ?>


    <?php
        $pageCat = get_field('category_to_display_on_page');

    ?>

    <section id="category-content">
        <div class="wrap">
            <h5 class="icon-slash"><?php the_title(); ?></h5>
            <h3><?php the_field('sub_headline');?></h3>
            <div class="featured-list">

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
                <?php } ?>

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
                <?php } ?>
                <section id="loadmore">
                    <?php next_posts_link('Load More',$query->max_num_pages); ?>
                </section>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

            </div>
        </div>
    </section>



<?php get_footer(); ?>
