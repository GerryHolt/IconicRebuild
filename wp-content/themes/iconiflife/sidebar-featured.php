<div class="featured-side-bar">
    <ul class="social-bar">
        <li class="icon-facebook icons"><a href="<?php the_field('facebook', 'options'); ?>" target="_blank"></a></li>
        <li class="icon-instagram icons"><a href="<?php the_field('instagram', 'options'); ?>" target="_blank"></a></li>
        <li class="icon-twitter icons"><a href="<?php the_field('twitter', 'options'); ?>" target="_blank"></a></li>
        <li class="icon-pinterest icons"><a href="<?php the_field('pinterest', 'options'); ?>" target="_blank"></a></li>
        <li class="icon-play icons"><a href="<?php the_field('youtube', 'options'); ?>" target="_blank"></a></li>
    </ul>
    <h5>#IconicCraves</h5>
    <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'posts_per_page' => '3',
        'paged' => $paged,
        'post_type' => 'craves',
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $query = new WP_Query( $args );
    if( $query->have_posts()) { ?>
        <?php while( $query->have_posts() ) {
            $query->the_post(); ?>
            <div class="featured-crave">
                <div class="img-border">
                  <?php if(get_field('home_page_image')) {
                    $homeCrave = get_field('home_page_image');?>
                    <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $homeCrave['sizes']['featured-crave']; ?>" srcset="<?php echo $homeCrave['sizes']['featured-crave2x']; ?>" alt="<?php echo $homeCrave['alt']; ?>" /></a>
                  <?php } else { ?>
                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('featured-crave2x'); ?></a>
                  <?php } ?>
                </div>
                <p class="icon-double-slash">
                    <?php if(get_field('featured_title')) { ?>
                        <a href="<?php echo get_permalink(); ?>"><?php the_field('featured_title'); ?></a>
                    <?php } else { ?>
                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                    <?php } ?>
                </p>
            </div>
        <?php } ?>
    <?php } ?>
    <?php wp_reset_postdata(); ?>
</div>
