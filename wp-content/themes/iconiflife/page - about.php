<?php
/*
   Template Name: About
*/

get_header(); the_post(); ?>

<section id="about-head">
    <?php the_post_thumbnail('full-story');?>
</section>

<section id="about-content">
    <div class="wrap" >
        <div class="statement">
            <?php the_field('statement'); ?>
        </div>
    </div>

    <div class="founder">
        <?php $founderImg = get_field('founder_image'); ?>
        <img src="<?php echo $founderImg['sizes']['one-column'] ?>" class="alignleft" />
        <p>
            <?php the_field('founder_name'); ?>
        </p>
    </div>
    <div style="clear:both;">

    </div>
    <div class="b-quote">
        <blockquote><p>
            <?php the_field('founder_quote'); ?>
        </blockquote>
    </div>
    </div>



    <div class="m-video">
        <?php $videoThumb = get_field('video_image');
        $videoId = get_field('founder_video');?>
        <a class="popup-youtube arrow-right"  href="https://www.youtube.com/watch?v=<?php echo $videoId; ?>"><img src="<?php echo $videoThumb['sizes']['in-story']; ?>" /></a>

    </div>
    <div class="wrap" style="padding-bottom:100px;">
    <div class="spacer">

    </div>

    <div class="emp">
        <?php $empLogo = get_field('employee_section_logo'); ?>
        <img src="<?php echo $empLogo['sizes']['one-column']; ?>"  />
        <?php
        if(get_field('employees')) {
            while(have_rows('employees')) { the_row();
                if( get_row_layout() == 'image_only' ) { ?>

                <?php } //close layout ?>
            <?php } // close while ?>
        <?php } //close if ?>
        <div class="person">
            <p>
                <span class="title"><em>Publisher</em></span><br />Renee M. Dee
            </p>
        </div>
        <div class="person">
            <p>
                <span class="title"><em>Product Director</em></span><br />Rahe Riazi
            </p>
        </div>
        <div class="person">
            <p>
                <span class="title"><em>Editor in Chief</em></span><br />Marlene Srdic
            </p>
        </div>
        <div class="person">
            <p>
                <span class="title"><em>Web Developer</em></span><br />Gerry Holt
            </p>
        </div>
        <div class="person">
            <p>
                <span class="title"><em>Senior Graphic Designer</em></span><br />Jimmy Johnson
            </p>
        </div>
        <div class="person">
            <p>
                <span class="title"><em>Social Media Specialist</em></span><br />Taylor Grewe
            </p>
        </div>
        <div class="minispacer">
        </div>
        <p class="m-title">
            BUSINESS
        </p>
        <div class="person">
            <p>
                <span class="title"><em>Vice President of Sales</em></span><br />Julie Osten-Crisan
            </p>
        </div>
        <div class="person">
            <p>
                <span class="title"><em>Business Manager</em></span><br />Laura Novak
            </p>
        </div>
    </div>
    <div class="spacer">

    </div>

</section>


<?php get_footer(); ?>
