<?php


get_header(); if ( have_posts() ) : while ( have_posts() ) : the_post();

$postid = get_the_ID();?>



    <section id="story-featured" class="jpibfi_container">
        <div class="wrap">
            <?php $postType = get_post_type(); ?>

            <?php   // Get terms for post
                 $terms = get_the_terms( $post->ID , $postType.'-categories' );
                 // Loop over each item since it's an array
                 if ( $terms != null ){
                 foreach( $terms as $term ) {
                 // Print the name method from $term which is an OBJECT
                 $categories = $term->name ;
                 // Get rid of the other data stored in the object, since it's not needed
                 unset($term);
                } } ?>

            <h5 class="icon-slash">
                <?php if(isset($categories)) { ?>
                    <a href="<?php echo $blogURL."/".$categories; ?>" class="jpibfi_container"><?php echo $categories; ?></a>
                <?php } else {?>
                    <a href="<?php echo $blogURL."/".$postType; ?>" class="jpibfi_container"><?php echo $postType; ?></a>
                <?php } ?>
            </h5>
            <?php if(get_field('do_you_need_to_hide_the_title') == 'yes') { ?>
            <?php } else { ?>
            <h1 class="story-title">
                <?php the_title(); ?>
            </h1>
            <?php } ?>
            <?php if(get_field('do_you_need_to_hide_the_author') == 'yes') {
            } else { ?>
                <p class="meta-featured">
                    <span>by</span> <?php the_author(); ?>
                </p>
            <?php } ?>
            <?php if(get_field('need_byline_credits')) { ?>
                <div class="meta-credit">
                    <?php the_field('under_byline_credits'); ?>
                </div>
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
            <?php $needSidebar = get_field('remove_sidebar');
            if($needSidebar == 'yes') {
                $contentWidth = "content-wide";
            }else{
                $contentWidth = "content";
            }?>
            <div class="<?php echo $contentWidth;?> jpibfi_container">
                <?php if(has_post_thumbnail()) {?>
                    <div class="hero-image">
                        <?php if(get_field('gfycat_id')) { ?>
                            <div style="position:relative;padding-bottom:<?php the_field('cinemagraph_padding_bottom');?>%"><iframe src='https://gfycat.com/ifr/<?php the_field('gfycat_id');?>?controls=0&hd=1' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0' allowfullscreen></iframe></div>
                        <?php } else { ?>
                            <?php
                            the_post_thumbnail('story-image-full2x'); ?>
                        <?php } ?>
                        <?php if (get_field('does_the_hero_need_a_credit') == 'yes') {
                            $textSide = get_field('should_it_be_on_the_left_or_right?');
                            if (get_field('should_hero_credit_be_a_caption_instead?') == 'yes'){ ?>
                                <p class="hero-caption" style="text-align:<?php echo $textSide; ?>; padding-right:<?php the_field('hero_credit_right_padding'); ?>;">
                                    <?php the_field('hero_credit'); ?>
                                </p>
                            <?php }else {?>
                                <p class="hero-credit" style="text-align:<?php echo $textSide; ?>; padding-right:<?php the_field('hero_credit_right_padding'); ?>;">
                                    <?php the_field('hero_credit'); ?>
                                </p>
                            <?php } ?>
                        <?php } else { ?>

                        <?php }?>
                    </div>
                <?php }?>

                <?php if(get_field('sponsor_text')) { ?>
                    <div class="sponsor-text">
                      <p style="font-family:'Barlow'; text-align: center;">
                      <?php the_field('sponsor_text'); ?>
                    </p>
                    </div>
                <?php }?>
                <?php if(get_field('do_you_need_to_hide_the_dek?') == 'yes') { ?>
                <?php } else { ?>
                    <?php if(get_field('post_dak')) { ?>
                        <div class="story-dak">
                            <?php the_field_without_filters('post_dak'); ?>
                        </div>
                        <div style="background: #000; width: 20%; padding: 1px; margin-left: 40%; margin-top:30px; margin-bottom:40px;"></div>
                    <?php } ?>
                <?php } ?>



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
                <?php include 'template-parts/special-content.php'; ?>
                <?php if(get_field('end_story_credit')) { ?>
                    <div class="ending-credit">
                        <p>
                            <?php the_field('end_story_credit');?>
                        </p>
                    </div>
                <?php } ?>

                <?php
                    if(get_field('shop_code')) {?>
                        <div id="section-divider-inside"><div class="inner-divider"></div></div>
                        <div class="shop-section">
                            <?php if(get_field('shop_title')) { ?>
                                <h3 style="text-transform:uppercase;"><?php the_field('shop_title');?></h3>
                            <?php } else {?>
                                <h3 style="text-transform:uppercase;">SHOP THE LOOK</h3>
                            <?php } ?>
                            <!-- <img class="shop-the-look" src="/ui/images/Shop_the_Look.png" alt="" /> -->
                            <?php the_field('shop_code'); ?>
                        </div>
                <?php
                } ?>


                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php if(get_field('story_video')) {
                    $videoImg = get_field('video_image'); ?>
                    <div id="section-divider-inside"><div class="inner-divider"></div></div>
                    <div class="end-story">
                        <a class="popup-youtube arrow-right" href="https://www.youtube.com/watch?v=<?php the_field('story_video');?>"><img src="<?php echo $videoImg['sizes']['full-story'];?>" /></a>
                        <?php if(get_field('video_credit')) {?>
                            <p class="photo-credit" style="text-align:right">
                                <?php the_field('video_credit'); ?>
                            </p>
                        <?php } ?>
                    </div>
                <?php }?>



                <div id="section-divider-inside"><div class="inner-divider"></div></div>
                <div class="also-like-story">
                <h3>You May Also Like</h3>
                    <div class="featured-list">
                        <?php
                        $args = array(
                            // 'post__not_in' => array($postid, '5476'),
                            'posts_per_page' => '3',
                            'post_type' => array('design', 'style', 'people', 'food', 'travel'),
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
                                    <?php
                                        $secondID = get_the_ID();
                                        $postid[] = $secondID;
                                    ?>
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
                    <!-- POST PAGE - Foundation (New Size) -->
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
            <?php
            if($needSidebar == 'yes') {

            }else{
                include 'sidebar-post.php';
            }?>
        </div>
    </section>


  <?php endwhile; else : ?>
  	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>
