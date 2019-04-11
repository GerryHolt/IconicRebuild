<?php


get_header('oldpost'); the_post(); ?>



    <section id="story-featured">
        <div class="wrap">
            <?php $postType = get_post_type(); ?>
            <h5 class="icon-slash"><?php the_category( ' ' ); ?></h5>
            <p class="story-title" >
                <?php the_title(); ?>
            </p>
            <?php if(get_field('do_you_need_to_hide_the_author') == 'yes') {
            } else { ?>
                <p class="meta-featured">
                    <span>by</span> <?php the_author(); ?>
                </p>
            <?php } ?>
        </div>
    </section>

    <div id="section-divider"></div>

    <section id="story-content">
        <div class="wrap">
            <div class="content">
                <div class="hero-image">
                    <?php the_post_thumbnail('story-image-full'); ?>
                    <?php if (get_field('does_the_hero_need_a_credit') == 'yes') { ?>
                        <p class="hero-credit">
                            <?php the_field('hero_credit'); ?>
                        </p>
                    <?php } else { ?>

                    <?php }?>
                </div>
                <?php if(get_field('post_dak')) { ?>
                    <div class="story-dak">
                        <p>
                            <?php the_field_without_filters('post_dak'); ?>
                        </p>
                    </div>
                <?php } ?>
                <div style="background: #000; width: 20%; padding: 1px; margin-left: 40%; margin-top:30px; margin-bottom:40px;"></div>
                <?php the_content(); ?>

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
            <?php include 'sidebar-post.php'; ?>
        </div>
    </section>




<?php get_footer(); ?>
