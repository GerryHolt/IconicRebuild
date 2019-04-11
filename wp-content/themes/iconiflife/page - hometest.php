<?php
/*
   Template Name: Home Test
*/

get_header(); the_post();

$blogURL = site_url(); ?>

<?php
$design = 0;
$style = 0;
$people = 0;
$food = 0;
$travel = 0;
$args = array(
    'posts_per_page' => '5',
    'post_type' => array('design', 'style', 'people', 'food', 'travel'),
    'orderby' => 'date',
    'order' => 'DESC'
);
$query = new WP_Query( $args );

if( $query->have_posts()) { ?>
    <?php while( $query->have_posts() ) {
        $query->the_post();
        $postType = get_post_type();
        if($postType == 'design') {
            $design++;
        } elseif($postType == 'style') {
            $style++;
        }elseif($postType == 'people') {
            $people++;
        }elseif($postType == 'food') {
            $food++;
        }elseif($postType == 'travel') {
            $travel++;
        }
    }
}?>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>


<section id="home-featured">
    <div class="wrap">
        <div class="top-content">
            <?php
            $args = array(
                'posts_per_page' => '1',
                'post_type' => array('design', 'style', 'people', 'food', 'travel'),
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $query = new WP_Query( $args );
            if( $query->have_posts()) { ?>
                <?php while( $query->have_posts() ) {
                    $query->the_post();?>
                    <div class="feature-story jpibfi_container">
                        <?php if(get_field('homepage_image')) {
                            $featureImg = get_field('homepage_image'); ?>
                            <a href="<?php the_permalink(); ?>" class="jpibfi_container"><img src="<?php echo $featureImg['sizes']['home-feature']; ?>" srcset="<?php echo $featureImg['sizes']['home-feature2x']; ?>"/></a>
                        <?php } else { ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-feature2x'); ?></a>
                        <?php } ?>
                        <div class="feature-info">
                            <div class="black-bar"></div>
                            <div class="feature-textarea">
                                <div class="category icon-slash">
                                    <?php $postType = get_post_type(); ?>
                                    <a href="<?php echo $blogURL."/".$postType; ?>" class="jpibfi_container"><?php echo $postType; ?></a>
                                </div>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php the_excerpt(); ?>
                                <p class="meta-featured">
                                    <?php $post_date = get_the_date( 'F j, Y' );?>
                                    <span>by</span> <?php the_author(); ?>&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post_date; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        </div>
        <?php include 'sidebar-featured.php'; ?>
    </div>
</section>

<div id="section-divider"><div class="inner-divider"></div></div>

<section id="home-content">
    <div class="wrap">
        <div class="content">
            <?php if( have_rows('homepage_format')) {
                while(have_rows('homepage_format')) { the_row();
                    if( get_row_layout() == 'triple_feature' ) {?>
                        <h3>Live Beautifully</h3>
                        <div class="featured-list">
                            <h5>Featured Stories</h5>
                            <?php
                            $args = array(
                                'posts_per_page' => '3',
                                'post_type' => array('design', 'style', 'people', 'food', 'travel'),
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'offset' => 2
                            );
                            $query = new WP_Query( $args );
                            if( $query->have_posts()) { ?>
                                <?php while( $query->have_posts() ) {
                                    $query->the_post();?>
                                    <div class="featured-item jpibfi_container">
                                        <?php if(get_field('homepage_image')) {
                                            $featureImg = get_field('homepage_image'); ?>
                                            <a href="<?php the_permalink(); ?>" class="jpibfi_container"><img src="<?php echo $featureImg['sizes']['home-mini-feature']; ?>" srcset="<?php echo $featureImg['sizes']['home-mini-feature2x']; ?>" /></a>
                                        <?php } else { ?>
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-mini-feature2x'); ?></a>
                                        <?php }?>
                                        <div class="category icon-slash">
                                            <?php $postType = get_post_type(); ?>
                                            <a href="<?php echo $blogURL."/".$postType; ?>" class="jpibfi_container"><?php echo $postType; ?></a>
                                        </div>
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p class="meta">
                                            <?php $post_date = get_the_date( 'F j, Y' );?>
                                            <span>by</span> <?php the_author(); ?>&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post_date; ?>
                                        </p>
                                    </div>
                                <?php }
                            }?>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        </div>
                        <div id="section-divider-inside"><div class="inner-divider"></div></div>
                    <?php } ?> <!-- end triple feature -->
                    <?php if( get_row_layout() == 'recent_stories' ) {?>
                        <div class="featured-list">
                            <?php $recentCat = get_sub_field('category');?>
                            <h5 class="icon-slash home-cat"><a href="<?php echo $blogURL; ?>/<?php echo $recentCat ; ?>"><?php echo $recentCat; ?></a></h5>
                            <?php
                            if($recentCat == 'travel') {
                                $offset = $travel;
                            }
                            if($recentCat == 'style') {
                                $offset = $style;
                            }
                            if($recentCat == 'food') {
                                $offset = $food;
                            }
                            if($recentCat == 'design') {
                                $offset = $design;
                            }
                            if($recentCat == 'people') {
                                $offset = $people;
                            }
                            $args = array(
                                'posts_per_page' => '3',
                                'post_type' => $recentCat,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'offset' => $offset
                            );
                            $query = new WP_Query( $args );
                            if( $query->have_posts()) { ?>
                                <?php while( $query->have_posts() ) {
                                    $query->the_post();?>
                                    <div class="featured-item jpibfi_container">
                                        <?php if(get_field('homepage_image')) {
                                            $featureImg = get_field('homepage_image'); ?>
                                            <a href="<?php the_permalink(); ?>" class="jpibfi_container"><img src="<?php echo $featureImg['sizes']['home-mini-feature']; ?>" srcset="<?php echo $featureImg['sizes']['home-mini-feature2x']; ?>" /></a>
                                        <?php } else { ?>
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-mini-feature2x'); ?></a>
                                        <?php }?>
                                        <div class="category icon-slash">
                                            <?php $postType = get_post_type(); ?>
                                            <a href="<?php echo $blogURL."/".$postType; ?>" class="jpibfi_container"><?php echo $postType; ?></a>
                                        </div>
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p class="meta">
                                            <?php $post_date = get_the_date( 'F j, Y' );?>
                                            <span>by</span> <?php the_author(); ?>&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post_date; ?>
                                        </p>
                                    </div>
                                <?php }
                            }?>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        </div>
                        <div id="section-divider-inside"><div class="inner-divider"></div></div>
                    <?php } ?> <!-- end recent stories -->
                    <?php if( get_row_layout() == 'banner_ad' ) {?>
                        <div class="home-ad">
                            <!-- Home Page - Mid (Inline) -->
                            <script type="text/javascript">if (!window.AdButler) {
                                (function () {
                                    var s = document.createElement("script");
                                    s.async = true;
                                    s.type = "text/javascript";
                                    s.src = 'https://servedbyadbutler.com/app.js';
                                    var n = document.getElementsByTagName("script")[0];
                                    n.parentNode.insertBefore(s, n);
                                }());
                            }</script>
                            <script type="text/javascript">
                                var AdButler = AdButler || {}; AdButler.ads = AdButler.ads || [];
                                var abkw = window.abkw || '';
                                var plc309191 = window.plc309191 || 0;
                                document.write('<'+'div id="placement_309191_'+plc309191+'"></'+'div>');
                                AdButler.ads.push({handler: function(opt){ AdButler.register(171978, 309191, [970,150], 'placement_309191_'+opt.place, opt); }, opt: { place: plc309191++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
                            </script>
                        </div>
                        <div id="section-divider-inside"><div class="inner-divider"></div></div>
                    <?php } ?>  <!-- end banner ad -->
                    <?php if( get_row_layout() == 'secondary_feature' ) {?>
                        <h5 class="featured-story">Featured Story</h5>
                        <?php
                        $args = array(
                            'posts_per_page' => '1',
                            'post_type' => array('design', 'style', 'people', 'food', 'travel'),
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'offset' => 1
                        );
                        $query = new WP_Query( $args );
                        if( $query->have_posts()) { ?>
                            <?php while( $query->have_posts() ) {
                                $query->the_post();?>
                                <div class="feature-story jpibfi_container">
                                    <?php if(get_field('homepage_image')) {
                                        $featureImg = get_field('homepage_image'); ?>
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo $featureImg['sizes']['home-feature']; ?>" srcset="<?php echo $featureImg['sizes']['home-feature2x']; ?>" /></a>
                                    <?php } else { ?>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-feature2x'); ?></a>
                                    <?php } ?>
                                    <div class="feature-info">
                                        <div class="black-bar"></div>
                                        <div class="feature-textarea">
                                            <div class="category icon-slash">
                                                <?php $postType = get_post_type(); ?>
                                                <a href="<?php echo $blogURL."/".$postType; ?>" class="jpibfi_container"><?php echo $postType; ?></a>
                                            </div>
                                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <?php the_excerpt(); ?>
                                            <p class="meta-featured">
                                                <?php $post_date = get_the_date( 'F j, Y' );?>
                                                <span>by</span> <?php the_author(); ?>&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post_date; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <div id="section-divider-inside"><div class="inner-divider"></div></div>
                    <?php } ?> <!-- end secondary feature -->
                    <?php if( get_row_layout() == 'slider' ) {?>
                        <div class="<?php the_field('slide_or_fade');?>" onclick = "void(0)">
                          <h5><?php the_field('sponsor_text'); ?></h5>
                          <div class="full-column" style="padding:<?php the_sub_field('padding_options');?>;">
                              <div class="owl-carousel home-carousel">
                                  <?php if(have_rows('ad_slider')) {
                                      while(have_rows('ad_slider')) { the_row();
                                          $slideIMG = get_sub_field('image'); ?>
                                          <div class="slide-item">
                                            <?php if(get_sub_field('url')) {?>
                                              <a href="<?php the_sub_field('url'); ?>" target="_blank"><img src="<?php echo $slideIMG['sizes']['in-story']; ?>" alt="<?php echo $slideIMG['alt']; ?>" srcset="<?php echo $slideIMG['sizes']['in-story2x']; ?>" /></a>
                                            <?php } else { ?>
                                              <img src="<?php echo $slideIMG['sizes']['in-story']; ?>" alt="<?php echo $slideIMG['alt']; ?>" srcset="<?php echo $slideIMG['sizes']['in-story2x']; ?>" />
                                            <?php }?>
                                            <div class="home-slide-content">
                                              <?php the_sub_field('content'); ?>
                                            </div>
                                          </div>
                                      <?php } ?>
                                  <?php } ?>
                              </div>
                          </div>
                        </div>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <div id="section-divider-inside"><div class="inner-divider"></div></div>
                    <?php } ?> <!-- end slider -->

                <?php }?>
            <?php }?>
        </div>
        <?php include 'sidebar-home.php'; ?>

    </div>
</section>

<?php get_footer(); ?>
