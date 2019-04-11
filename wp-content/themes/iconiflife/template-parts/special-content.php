<div id="special-content">
    <div class="special-desk">
        <?php $dekTime = 1; ?>
        <?php if(have_rows('section')) {
            while(have_rows('section')) { the_row();
                $itemImg = get_sub_field('image');?>
                <div class="desk-item">
                    <div class="display:block;">
                        <?php if(get_field('remove_sidebar') == 'yes') { ?>
                            <img src="<?php echo $itemImg['sizes']['full-story']; ?>" alt="<?php echo $itemImg['alt']; ?>" usemap="#<?php the_sub_field('map_name'); ?>" hidefocus="true"/>
                        <?php }else {?>
                            <img src="<?php echo $itemImg['sizes']['in-story']; ?>" alt="<?php echo $itemImg['alt']; ?>" usemap="#<?php the_sub_field('map_name'); ?>" hidefocus="true"/>
                        <?php } ?>
                    </div>

                    <div class="text" style="position:absolute; top:<?php the_sub_field('top');?>; bottom:<?php the_sub_field('bottom');?>; left:<?php the_sub_field('left');?>; right:<?php the_sub_field('right');?>; width:<?php the_sub_field('text_width');?>; padding:<?php the_sub_field('text_padding');?>; background-color:<?php the_sub_field('text_background');?>; color:#<?php the_sub_field('text_color'); ?>; line-height:<?php the_sub_field('line_height'); ?>;">
                        <?php the_sub_field('text');?>
                    </div>
                    <?php if(get_sub_field('under_image_text')) { ?>
                        <div class="text">
                            <?php the_sub_field('under_image_text');?>
                        </div>
                    <?php } ?>
                </div>
                <?php the_sub_field('maps');
                $dekTime++;
                if (get_field('show_a_dek_after_the_first_image?') == 'yes' && $dekTime == 2) { ?>
                    <div class="story-dak" style="margin-top:30px;">
                        <?php the_field_without_filters('post_dak'); ?>
                    </div>
                    <div style="background: #000; width: 20%; padding: 1px; margin-left: 40%; margin-top:30px; margin-bottom:40px;"></div>
                <?php }
            }
        }?>

    </div>

    <div class="special-mobile">
        <?php if(have_rows('mobile_section')) {
            $adCounter = 1;
            while(have_rows('mobile_section')) { the_row();
                $itemImg = get_sub_field('image');?>
                <div class="mobile-item">
                    <img src="<?php echo $itemImg['sizes']['in-story']; ?>" alt="<?php echo $itemImg['alt']; ?>" />
                    <?php the_sub_field('text'); ?>
                </div>
                <!--
                <?php $adCounter++;?>
                <?php if($adCounter == 3) { ?>
                    <div class="mobile-ad">
                        <!-- Home Page - Premium [async]
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
                <?php }
                if($adCounter == 5) { ?>
                    <div class="mobile-ad">
                        <!-- HOME PAGE - Foundation (Bottom Sidebar)
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
                <?php }?>
                -->
            <?php  }
        } ?>
        <div class="item">

        </div>
    </div>
</div>
