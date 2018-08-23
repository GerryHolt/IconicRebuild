<?php


get_header(); if ( have_posts() ) : while ( have_posts() ) : the_post();

$postid = get_the_ID();?>



    <section id="story-featured" class="jpibfi_container">
        <div class="wrap">
            <?php $postType = get_post_type(); ?>
            <h5 class="icon-slash">
                <?php $postType = get_post_type(); ?>
                <a href="<?php echo $blogURL."/".$postType; ?>" class="jpibfi_container"><?php echo $postType; ?></a>
            </h5>
            <h1 class="story-title">
                <?php the_title(); ?>
            </h1>
            <?php if(get_field('do_you_need_to_hide_the_author') == 'yes') {
            } else { ?>
                <p class="meta-featured">
                    <span>by</span> <?php the_author(); ?>
                </p>
            <?php } ?>
            <ul class="social-bar post-social">
                <?php
                    $urlShare = get_the_permalink();
                    $titleShare = get_the_title();
                ?>

                <li class="icon-mail icons"><a target="_blank" title="Share this page" href="mailto:?subject=<?php echo $titleShare; ?>&amp;body=<?php echo $urlShare; ?>"></a></li>
                <li class="icon-facebook icons"><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $urlShare; ?>" target="_blank"></a></li>
                <li class="icon-twitter icons"><a href="http://twitter.com/share?url=<?php echo $urlShare; ?>&text=<?php echo $titleShare; ?>&via=youriconiclife" target="_blank"></a></li>
            </ul>
        </div>
    </section>

    <div id="section-divider"><div class="inner-divider"></div></div>

    <section id="story-content">
        <div class="wrap">
            <div class="content jpibfi_container">
                <?php if(get_the_post_thumbnail()) { ?>
                    <div class="hero-image">
                        <?php the_post_thumbnail('story-image-full'); ?>
                        <?php if (get_field('does_the_hero_need_a_credit') == 'yes') {
                            $textSide = get_field('should_it_be_on_the_left_or_right?');
                            if (get_field('should_hero_credit_be_a_caption_instead?') == 'yes'){ ?>
                                <p class="hero-caption" style="text-align:<?php echo $textSide; ?>">
                                    <?php the_field('hero_credit'); ?>
                                </p>
                            <?php }else {?>
                                <p class="hero-credit" style="text-align:<?php echo $textSide; ?>">
                                    <?php the_field('hero_credit'); ?>
                                </p>
                            <?php } ?>
                        <?php } else { ?>

                        <?php }?>
                    </div>
                    <?php if(get_field('sponsor_text')) { ?>
                        <div class="sponsor-text">
                          <p style="font-family:'Barlow'; text-align: center;">
                          <?php the_field('sponsor_text'); ?>
                        </p>
                        </div>
                    <?php }?>
                    <?php if(get_field('post_dak')) { ?>
                        <div class="story-dak">
                            <?php the_field_without_filters('post_dak'); ?>
                        </div>
                    <?php } ?>
                    <?php if(get_the_post_thumbnail()) { ?>
                        <div style="background: #000; width: 20%; padding: 1px; margin-left: 40%; margin-top:30px; margin-bottom:40px;"></div>
                    <?php } else {

                    }
                } else {

                }?>

                <?php if(get_field('first_letter_of_the_post')) {
                    $fontSize = get_field('first_letter_size'); ?>
                    <p>
                        <span class="dropcap" style="font-size: <?php echo $fontSize; ?>%;"><?php the_field('first_letter_of_the_post') ;?></span><?php the_field_without_filters('first_paragraph'); ?>
                    </p>

                <?php } ?>
                <?php if( have_rows('post_content')) {
                    while(have_rows('post_content')) { the_row();
                        $adBlock = 0; ?>

                        <?php include 'template-parts/full-width-content.php'; ?>

                        <?php include 'template-parts/half-width-content.php'; ?>

                        <?php include 'template-parts/third-width-content.php'; ?>

                        <?php include 'template-parts/clingers.php'; ?>

                        <?php if(get_row_layout() == 'ad_block') {
                            if($adBlock == 0) { ?>
                                <div class="mobile-ad">
                                    <!-- Home Page - Premium [async] -->
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
                                        var plc298342 = window.plc298342 || 0;
                                        document.write('<'+'div id="placement_298342_'+plc298342+'"></'+'div>');
                                        AdButler.ads.push({handler: function(opt){ AdButler.register(171978, 298342, [300,600], 'placement_298342_'+opt.place, opt); }, opt: { place: plc298342++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
                                    </script>
                                </div>
                            <?php $adBlock++; }elseif($adBlock == 1) { ?>
                                <div class="mobile-ad">
                                    <!-- HOME PAGE - Foundation (Bottom Sidebar) -->
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
                                        var plc309190 = window.plc309190 || 0;
                                        document.write('<'+'div id="placement_309190_'+plc309190+'"></'+'div>');
                                        AdButler.ads.push({handler: function(opt){ AdButler.register(171978, 309190, [300,600], 'placement_309190_'+opt.place, opt); }, opt: { place: plc309190++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
                                    </script>
                                </div>
                            <?php } ?>
                        <?php } ?>

                        <?php if( get_row_layout() == 'mini_spacer' ) { ?>
                            <div class="mini-spacer"></div>
                        <?php }?>

                        <?php if( get_row_layout() == 'fancy_spacer' ) { ?>
                            <div class="top-quote">
                                <div class="inner-top-quote"></div>
                            </div>
                        <?php }?>

                    <?php } //close post_content while
                } //close post content if ?>
                <?php if(get_field('end_story_credit')) { ?>
                    <div class="ending-credit">
                        <p>
                            <?php the_field('end_story_credit');?>
                        </p>
                    </div>
                <?php } ?>
                <div id="section-divider-inside"><div class="inner-divider"></div></div>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

                <div class="also-like-story">
                <h3>You May Also Like</h3>
                <?php printr($postid); ?>
                    <div class="featured-list">
                        <?php
                        $args = array(
                            'post__not_in' => array($postid),
                            'posts_per_page' => '3',
                            'post_type' => $postType,
                            'orderby' => 'rand',
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
                                    <!-- <p class="meta">
                                        <?php $post_date = get_the_date( 'F j, Y' );?>
                                        <span>by</span> <?php the_author(); ?>&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post_date; ?>
                                    </p> -->
                                </div>
                            <?php }
                        }?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    </div>
                  </div>

                  <div id="section-divider-inside"><div class="inner-divider"></div></div>
                  <div class="prev-next-story">

                    <div class="prev">
                        <?php previous_post_link('&laquo; %link', 'Previous Story: %title'); ?>
                    </div>

                    <div class="next">
                        <?php next_post_link('%link &raquo;', 'Next Story: %title'); ?>
                    </div>


                  </div>


                <div class="ad-bottom">
                    <!-- POST PAGE - Mid (Inline) -->
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
                        var plc309192 = window.plc309192 || 0;
                        document.write('<'+'div id="placement_309192_'+plc309192+'"></'+'div>');
                        AdButler.ads.push({handler: function(opt){ AdButler.register(171978, 309192, [970,150], 'placement_309192_'+opt.place, opt); }, opt: { place: plc309192++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
                    </script>
                </div>

            </div>
            <?php include 'sidebar-post.php'; ?>
        </div>
    </section>


  <?php endwhile; else : ?>
  	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>
