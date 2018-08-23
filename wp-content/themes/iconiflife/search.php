<?php

get_header(); the_post(); ?>

<?php $swp_query = new SWP_Query(
    array(
        's' => $_GET['s'], // search query
    )
); ?>

<section id="search-results">
    <div class="wrap clearfix">
        <h2>Your search for "<span><?php echo $_GET['s'] ?></span>" yielded <span><?php echo $swp_query->post_count ?></span> results.</h2>

        <?php if ( ! empty( $swp_query->posts ) ) { ?>
            <div class="result-container">
                <?php foreach( $swp_query->posts as $post ) : setup_postdata( $post ); ?>
                    <div class="results">
                        <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <?php if(get_field('homepage_image')) {
                            $featureImg = get_field('homepage_image'); ?>
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $featureImg['sizes']['home-feature']; ?>" /></a>
                        <?php } else { ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-mini-feature'); ?></a>
                        <?php }?>
                        <?php the_excerpt(); ?>
                        <p>
                            <a href="<?php echo get_permalink(); ?>" class="more">Read More</a>
                        </p>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        <?php } ?>
    </div>
</section>

<?php get_footer(); ?>
