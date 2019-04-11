<div class="side-bar">
    <?php if( have_rows('home_sidebar_order', 'options')) {
        while(have_rows('home_sidebar_order', 'options')) { the_row();
            if( get_row_layout() == 'ad_1' ) {?>
                <div class="side-item">
                    <!-- Post Page - Mid (New Size) [async] -->
                        <script type="text/javascript">if (!window.AdButler){(function(){var s = document.createElement("script"); s.async = true; s.type = "text/javascript";s.src = 'https://servedbyadbutler.com/app.js';var n = document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(s, n);}());}</script>
                        <script type="text/javascript">
                        var AdButler = AdButler || {}; AdButler.ads = AdButler.ads || [];
                        var abkw = window.abkw || '';
                        var plc309190 = window.plc309190 || 0;
                        document.write('<'+'div id="placement_309190_'+plc309190+'"></'+'div>');
                        AdButler.ads.push({handler: function(opt){ AdButler.register(171978, 309190, [300,600], 'placement_309190_'+opt.place, opt); }, opt: { place: plc309190++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
                        </script>
                </div>
            <?php } // ----- close ad 1 ------
            if( get_row_layout() == 'social_buttons' ) {?>
                <div class="side-item">
                    <ul class="social-bar">
                        <li class="icon-facebook icons"><a href="<?php the_field('facebook', 'options'); ?>" target="_blank"></a></li>
                        <li class="icon-instagram icons"><a href="<?php the_field('instagram', 'options'); ?>" target="_blank"></a></li>
                        <li class="icon-twitter icons"><a href="<?php the_field('twitter', 'options'); ?>" target="_blank"></a></li>
                        <li class="icon-pinterest icons"><a href="<?php the_field('pinterest', 'options'); ?>" target="_blank"></a></li>
                        <li class="icon-play icons"><a href="<?php the_field('youtube', 'options'); ?>" target="_blank"></a></li>
                    </ul>
                </div>
            <?php } // ------ close social buttons -------
            if( get_row_layout() == 'subscribe' ) {?>
                <div class="side-item sub-side">
                    <h4>Subscribe to Get Luxury Lifestyle in Your Inbox</h4>
                    <img src="/ui/images/logo-sm.png" />
                    <?php echo do_shortcode( '[activecampaign form=5]' ); ?>
                </div>
            <?php } // ------- close subscribe --------
            if( get_row_layout() == 'why_iconic' ) {?>
                <div class="side-item why-us">
                    <!-- ALL PAGES - IC Manifesto Ad -->
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
                            var plc311644 = window.plc311644 || 0;
                            document.write('<'+'div id="placement_311644_'+plc311644+'"></'+'div>');
                            AdButler.ads.push({handler: function(opt){ AdButler.register(171978, 311644, [300,300], 'placement_311644_'+opt.place, opt); }, opt: { place: plc311644++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
                        </script>
                </div>

            <?php } // ------- close why iconic
            if( get_row_layout() == 'ad_2' ) {?>
                <div class="side-item" >
                    <!-- Post Page - Premium Banner -->
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
            <?php } // ------ close ad 2
            if( get_row_layout() == 'fall_fashion' ) {
                 $global_rows = get_sub_field('fashion_ad_images', 'options'); // get all the rows
                  $rand_global_row = $global_rows[ array_rand( $global_rows ) ]; // get a random row
                  $rand_global_row_image = $rand_global_row['image' ]; // get the sub field value?>
                <div class="side-item">
                    <a href="<?php the_sub_field('fashion_url', 'options'); ?>"><img src="<?php echo $rand_global_row_image['sizes']['third-list-image']; ?>" /></a>
                </div>

            <?php } // -------close fashion --------
        }
    }?>

</div>
