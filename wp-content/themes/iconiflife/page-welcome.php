<?php
/*
   Template Name: Welcome
*/

get_header(); the_post(); ?>

<div id="story-content" style="margin:40px auto; text-align:center; width:1220px;">
    <div class="content" style="max-width:1220px;">
        <a class="popup-youtube arrow-right" href="https://www.youtube.com/watch?v=b_0prroQGRo"><img src="https://iconicrebuild.wpengine.com/wp-content/uploads/2018/07/maxresdefault.jpg" width="100%"/></a>
    </div>
    <div class="minispacer">

    </div>
    <div class="visit-iconic">
        <a href="<?php bloginfo('url'); ?>" class="iconicbtn" style="color: #fff; background-color: #2A2A2A; font-size: 14px; padding: 7px 60px; font-family:'Barlow'; text-transform:uppercase;">Visit Iconic Life</a>
    </div>
</div>

<?php get_footer(); ?>
