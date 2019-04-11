<?php


get_header(); the_post(); ?>



    <section id="story-featured">
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
            <div class="content">
                <div class="hero-image">
                    <?php the_post_thumbnail('story-image-full2x'); ?>
                    <?php if (get_field('does_the_hero_need_a_credit') == 'yes') { ?>
                        <p class="hero-credit">
                            <?php the_field('hero_credit'); ?>
                        </p>
                    <?php } else { ?>

                    <?php }?>
                </div>
                <div class="full-column">

                    <?php the_field('post_content');?>

                </div>
                <?php if(get_field('end_story_credit')) { ?>
                    <div class="ending-credit">
                        <p>
                            <?php the_field('end_story_credit');?>
                        </p>
                    </div>
                <?php } ?>
                <div id="section-divider"><div class="inner-divider"></div></div>
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




<?php get_footer(); ?>
