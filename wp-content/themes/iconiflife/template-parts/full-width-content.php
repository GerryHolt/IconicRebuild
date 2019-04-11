<?php if( get_row_layout() == 'full_width_content' ) {
    if(have_rows('full_size_options')) {
        while(have_rows('full_size_options')) { the_row();
            ////////////////////////////////
            // OPEN FULL WYSIWYG
            ////////////////////////////////
            if( get_row_layout() == 'wysiwyg' ) { ?>
                <div class="full-column" style="padding:<?php the_sub_field('padding_options');?>;">
                    <?php the_sub_field('standard_text_field'); ?>
                </div>
            <?php }
            ////////////////////////////////
            // CLOSE FULL WYSIWYG
            ////////////////////////////////
            ////////////////////////////////
            // OPEN FULL IMAGE
            ////////////////////////////////
            if( get_row_layout() == 'image_field' ) {
                $imgField = get_sub_field('image'); ?>
                <div class="full-column" style="padding:<?php the_sub_field('padding_options');?>;">
                  <?php if(get_sub_field('link')) { ?>
                    <a href="<?php the_sub_field('link'); ?>" target="_blank"><img class="nopin" src="<?php echo $imgField['sizes']['in-story']; ?>" srcset="<?php echo $imgField['sizes']['in-story2x']; ?>" class="jpibfi_container img-container" /></a>
                  <?php } else { ?>
                    <img src="<?php echo $imgField['sizes']['in-story']; ?>" srcset="<?php echo $imgField['sizes']['in-story2x']; ?>" class="jpibfi_container img-container" />
                  <?php } ?>
                    <?php if(get_sub_field('need_credit') == 'yes') {
                        $textSide = get_sub_field('left_or_right?');
                        if(get_sub_field('should_this_be_a_caption_instead?') == 'yes') { ?>
                            <p class="photo-caption" style="text-align:<?php echo $textSide; ?>; padding-right:<?php the_sub_field('caption_right_padding'); ?>;">
                                <?php the_sub_field('credit'); ?>
                            </p>
                        <?php } else { ?>
                            <p class="photo-credit" style="text-align:<?php echo $textSide; ?>; padding-right:<?php the_sub_field('caption_right_padding'); ?>;">
                                <?php the_sub_field('credit'); ?>
                            </p>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php }
            ////////////////////////////////
            // CLOSE FULL IMAGE
            ////////////////////////////////
            ////////////////////////////////
            // OPEN FULL VIDEO
            ////////////////////////////////
            if( get_row_layout() == 'video_block' ) {
                $videoThumb = get_sub_field('video_thumbnail');
                $videoSource = get_sub_field('video_source');
                if ($videoSource == 'youtube') {
                    $videoId = get_sub_field('youtube_id');
                } elseif ($videoSource == 'vimeo') {
                    $videoId = get_sub_field('vimeo_id');
                } ?>
                <div class="full-column" style="padding:<?php the_sub_field('padding_options');?>;">
                    <?php if ($videoSource == 'youtube') { ?>
                        <a class="popup-youtube arrow-right"  href="https://www.youtube.com/watch?v=<?php echo $videoId; ?>"><img class="jpibfi_container" src="<?php echo $videoThumb['sizes']['in-story']; ?>" srcset="<?php echo $videoThumb['sizes']['in-story2x']; ?>" /></a>
                    <?php } elseif ($videoSource == 'vimeo') { ?>
                        <a class="popup-vimeo arrow-right"  href="https://vimeo.com/<?php echo $videoId; ?>"><img class="jpibfi_container" src="<?php echo $videoThumb['sizes']['in-story']; ?>" srcset="<?php echo $videoThumb['sizes']['in-story2x']; ?>" /></a>
                    <?php } ?>
                </div>
            <?php }
            ////////////////////////////////
            // CLOSE FULL VIDEO
            ////////////////////////////////
            ////////////////////////////////
            // OPEN FULL QUOTE
            ////////////////////////////////
            if( get_row_layout() == 'block_quote' ) {?>
                <div class="full-column" style="padding:<?php the_sub_field('padding_options');?>;">
                    <div class="block-quote">
                        <blockquote>
                            <p>
                                <?php the_sub_field('block_quote') ?>
                            </p>
                        </blockquote>
                    </div>
                </div>
            <?php }
            ////////////////////////////////
            // CLOSE FULL QUOTE
            ////////////////////////////////
            ////////////////////////////////
            // OPEN SLIDER
            ////////////////////////////////
            if( get_row_layout() == 'slider' ) {?>
                <div class="full-column" style="padding:<?php the_sub_field('padding');?>;">
                    <div class="owl-carousel story-carousel">
                        <?php if(have_rows('slide')) {
                            while(have_rows('slide')) { the_row();
                                $slideIMG = get_sub_field('image'); ?>
                                <div class="slide-item">
                                    <?php if(get_sub_field('image_link')){ ?>
                                        <a href="<?php the_sub_field('image_link');?>" target="_blank"><img src="<?php echo $slideIMG['sizes']['in-story']; ?>" alt="<?php echo $slideIMG['alt']; ?>" srcset="<?php echo $slideIMG['sizes']['in-story2x']; ?>" /></a>
                                    <?php } else {?>
                                        <img src="<?php echo $slideIMG['sizes']['in-story']; ?>" alt="<?php echo $slideIMG['alt']; ?>" srcset="<?php echo $slideIMG['sizes']['in-story2x']; ?>" />
                                    <?php } ?>
                                    <?php if(get_sub_field('need_credit') == 'yes') {
                                        $textSide = get_sub_field('left_or_right');
                                        if(get_sub_field('should_this_be_a_caption_instead?') == 'yes') { ?>
                                            <p class="photo-caption" style="text-align:<?php echo $textSide; ?>">
                                                <?php the_sub_field('credit'); ?>
                                            </p>
                                        <?php } else { ?>
                                            <p class="photo-credit" style="text-align:<?php echo $textSide; ?>">
                                                <?php the_sub_field('credit'); ?>
                                            </p>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php the_sub_field('content'); ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            <?php }
            ////////////////////////////////
            // CLOSE SLIDER
            ////////////////////////////////
        }
    }
} ?>
