<?php

get_header(); the_post(); ?>

<?php //$swp_query = new SWP_Query(
    //array(
  //      's' => $_GET['s'], // search query
  //  )
//);

$term = (isset($_GET['s'])) ? $_GET['s'] : ''; // Get 's' querystring param

?>

<section id="category-content">
    <div class="wrap clearfix">

        <h2>Your search for "<span><?php echo $_GET['s'] ?></span>" yielded <span><?php echo $swp_query->post_count ?></span> results.</h2>


            <div class="featured-list-cat">
              <?php
              // Ajax Load More shortcode with a unique ID parameter (searchwp).
              echo do_shortcode('[ajax_load_more id="searchwp" search="'. $term .'" post_type="design, style, people, food, travel, craves, videos" posts_per_page="9"]');
              ?>
            </div>

    </div>
</section>

<?php get_footer(); ?>
