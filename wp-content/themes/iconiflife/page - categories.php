<?php
/*
   Template Name: Category - alt craves
*/

get_header(); the_post(); ?>


    <?php
        $pageCat = get_field('category_to_display_on_page');

    ?>

    <section id="category-content">
        <div class="wrap">
            <div class="featured-list">
                <h5 class="icon-slash">Craves</h5>
                <h3><?php the_field('sub_headline');?></h3>
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'posts_per_page' => '30',
                    'paged' => $paged,
                    'post_type' => $pageCat,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );
                $query = new WP_Query( $args );
                if( $query->have_posts()) { ?>
                    <?php while( $query->have_posts() ) {
                        $query->the_post();
                        $columnSize = get_field('one_or_two_columns')?>
                        <div class="featured-item <?php echo $columnSize; ?>">
                            <a href=""><?php the_post_thumbnail($columnSize); ?></a>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                            <p>
                                <a href="<?php the_field('shop_url'); ?>" class="shop-btn">shop</a>
                            </p>
                        </div>
                    <?php } ?>
                <?php } ?>
                <section id="loadmore">
                    <?php next_posts_link('Load More',$query->max_num_pages); ?>
                </section>
            </div>
        </div>
    </section>



<?php get_footer(); ?>
