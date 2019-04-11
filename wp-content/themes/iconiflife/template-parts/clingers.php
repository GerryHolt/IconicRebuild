<?php

if( get_row_layout() == 'clingers' ) {
    if(have_rows('clinger_types')) {
        while(have_rows('clinger_types')) { the_row();
            ////////////////////////////////
            // Open Three Column Clinger
            ////////////////////////////////
            if( get_row_layout() == 'three_column_clinger' ) { ?>
                <div class="clinger">
                    <div class="clinger-top"></div>
                    <div class="clinger-body">
                        <h5><?php the_sub_field('title'); ?></h5>
                        <p class="clinger-dak">
                            <?php the_sub_field('dak'); ?>
                        </p>
                        <?php if(have_rows('column')) {
                            while(have_rows('column')) { the_row();
                                if(get_sub_field('column_image')) {
                                $clingerImg = get_sub_field('column_image'); }?>
                                <div class="clinger_three_column">
                                    <?php if(get_sub_field('column_image')) { ?>
                                        <?php if(get_sub_field('image_url')) { ?>
                                            <a href="<?php the_sub_field('image_url'); ?>">
                                                <img class="jpibfi_container" src="<?php echo $clingerImg['sizes']['clinger-column']; ?>" alt="<?php echo $clingerImg['alt']; ?>" />
                                            </a>
                                        <?php } else { ?>
                                            <img class="jpibfi_container" src="<?php echo $clingerImg['sizes']['clinger-column']; ?>" alt="<?php echo $clingerImg['alt']; ?>" />
                                        <?php }?>
                                    <?php } ?>
                                    <?php if(get_sub_field('need_credit') == 'yes') {
                                        $textSide = get_sub_field('left_or_right?');
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
                                    <p class="cling_title">
                                        <?php the_sub_field('column_title');?>
                                    </p>
                                    <?php the_sub_field('column_text'); ?>
                                </div>
                            <?php }
                        }?>
                    </div>
                </div>
            <?php }
            ////////////////////////////////
            // Close Three Column Clinger
            ////////////////////////////////
            ////////////////////////////////
            // Open Three Column with Image Clinger
            ////////////////////////////////
            if( get_row_layout() == 'three_column_with_image_clinger' ) { ?>
                <div class="clinger">
                    <div class="clinger-top"></div>
                    <div class="clinger-body">
                        <?php if(get_sub_field('image')) {
                            $clingImg = get_sub_field('image'); ?>
                                <img class="jpibfi_container" src="<?php echo $clingImg['sizes']['story-image-full']; ?>" alt="<?php echo $clingImg['alt']; ?>" class="cling-top-img" />
                        <?php } ?>
                        <h5 style="text-align:center;"><?php the_sub_field('title'); ?></h5>
                        <p class="clinger-dak" style="text-align:center;">
                            <?php the_sub_field('dak'); ?>
                        </p>
                        <?php if(have_rows('column')) {
                            while(have_rows('column')) { the_row();
                                if(get_sub_field('column_image')) {
                                $clingerImg = get_sub_field('column_image'); }?>
                                <div class="clinger_three_column">
                                    <?php if(get_sub_field('column_image')) { ?>
                                        <img class="jpibfi_container" src="<?php echo $clingerImg['sizes']['clinger-column']; ?>" alt="<?php echo $clingerImg['alt']; ?>" />
                                    <?php } ?>
                                    <p class="cling_title">
                                        <?php the_sub_field('column_title');?>
                                    </p>
                                    <?php the_sub_field('column_text'); ?>
                                </div>
                            <?php }
                        }?>
                    </div>
                </div>
            <?php }
            ////////////////////////////////
            // Close Three Column with Image Clinger
            ////////////////////////////////
            ////////////////////////////////
            // Open Four Column Clinger
            ////////////////////////////////
            if( get_row_layout() == 'four_column_clinger' ) { ?>
                <div class="clinger">
                    <div class="clinger-top"></div>
                    <div class="clinger-body">
                        <h5><?php the_sub_field('title'); ?></h5>
                        <p class="clinger-dak">
                            <?php the_sub_field('dak'); ?>
                        </p>
                        <?php if(have_rows('column')) {
                            while(have_rows('column')) { the_row();
                                $clingerImg = get_sub_field('column_image');?>
                                <div class="clinger_four_column">
                                    <img class="jpibfi_container" src="<?php echo $clingerImg['sizes']['clinger-column']; ?>" alt="<?php echo $clingerImg['alt']; ?>" />
                                    <p class="cling_title">
                                        <?php the_sub_field('column_title');?>
                                    </p>
                                    <?php the_sub_field('column_text'); ?>
                                </div>
                            <?php }
                        }?>
                    </div>
                </div>
            <?php }
            ////////////////////////////////
            // Close Four Column Clinger
            ////////////////////////////////
            ////////////////////////////////
            // Open Two Column Clinger
            ////////////////////////////////
            if( get_row_layout() == 'two_column_clinger' ) { ?>
                <div class="clinger">
                    <div class="clinger-top"></div>
                    <div class="clinger-body">
                        <h5><?php the_sub_field('title'); ?></h5>
                        <p class="clinger-dak">
                            <?php the_sub_field('dak'); ?>
                        </p>
                        <?php if(have_rows('column')) {
                            while(have_rows('column')) { the_row();
                                if(get_sub_field('column_image')) {
                                $clingerImg = get_sub_field('column_image'); }?>
                                <div class="clinger_two_column">
                                    <?php if(get_sub_field('column_image')) {?>
                                        <img class="jpibfi_container" src="<?php echo $clingerImg['sizes']['clinger-column']; ?>" alt="<?php echo $clingerImg['alt']; ?>" />
                                    <?php }?>
                                    <p class="cling_title">
                                        <?php the_sub_field('column_title');?>
                                    </p>
                                    <?php the_sub_field('column_text'); ?>
                                </div>
                            <?php }
                        }?>
                    </div>
                </div>
            <?php }
            ////////////////////////////////
            // Close Two Column Clinger
            ////////////////////////////////
            ////////////////////////////////
            // Open Full Width images with content
            ////////////////////////////////
            if( get_row_layout() == 'full_width_images_with_content' ) { ?>
                <div class="clinger">
                    <div class="clinger-top"></div>
                    <div class="clinger-body">
                        <h5><?php the_sub_field('title'); ?></h5>
                        <?php if(get_sub_field('do_you_need_a_dek')=='no') {
                        }else{ ?>
                            <p class="clinger-dak">
                                <?php the_sub_field('dek'); ?>
                            </p>
                        <?php } ?>
                        <?php if(have_rows('content')) {
                            while(have_rows('content')) { the_row();
                                $clingerImg = get_sub_field('image');?>
                                <div class="clinger-full-width">
                                    <img class="jpibfi_container" src="<?php echo $clingerImg['sizes']['story-image-full']; ?>" alt="<?php echo $clingerImg['alt']; ?>" srcset="<?php echo $clingerImg['sizes']['story-image-full2x']; ?>" />
                                    <?php if(get_sub_field('need_credit') == 'yes') {
                                        $textSide = get_sub_field('left_or_right?');
                                        if(get_sub_field('should_this_be_a_caption_instead?') == 'yes') { ?>
                                            <p class="photo-caption" style="text-align:<?php echo $textSide; ?>">
                                                <?php the_sub_field('credit'); ?>
                                            </p>
                                        <?php } else { ?>
                                            <p class="photo-credit" style="padding-top:7px; text-align:<?php echo $textSide; ?>">
                                                <?php the_sub_field('credit'); ?>
                                            </p>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php the_sub_field('text'); ?>
                                </div>
                            <?php }
                        }?>
                    </div>
                </div>
            <?php }
            ////////////////////////////////
            // Close Full Width images with content
            ////////////////////////////////
            ////////////////////////////////
            // Open Full Width content
            ////////////////////////////////
            if( get_row_layout() == 'full_width_content' ) { ?>
                <div class="clinger">
                    <div class="clinger-top"></div>
                    <div class="clinger-body">
                        <h5><?php the_sub_field('title'); ?></h5>
                        <?php if(get_sub_field('do_you_need_a_dek')=='no') {
                        }else{ ?>
                            <p class="clinger-dak">
                                <?php the_sub_field('dek'); ?>
                            </p>
                        <?php } ?>
                        <?php if(have_rows('content')) {
                            while(have_rows('content')) { the_row();?>
                                <div class="clinger-full-width">
                                    <?php the_sub_field('text'); ?>
                                </div>
                            <?php }
                        }?>
                    </div>
                </div>
            <?php }
            ////////////////////////////////
            // Close Full Width content
            ////////////////////////////////
            ////////////////////////////////
            // OPEN Clinger Two Column WYSIWYG
            ////////////////////////////////
            if( get_row_layout() == 'clinger_two_column_wysiwyg' ) { ?>
                <div class="clinger">
                    <div class="clinger-top"></div>
                    <div class="clinger-body">
                        <h5><?php the_sub_field('title'); ?></h5>
                        <div class="half-col">
                            <?php if(have_rows('left_side')) {?>
                                <div class="left-side">
                                    <?php while(have_rows('left_side')) { the_row();
                                        if(get_row_layout() == 'images') {
                                            $leftIMG = get_sub_field('image');?>
                                            <?php if(get_sub_field('link')) { ?>
                                              <a href="<?php the_sub_field('link'); ?>" target="_blank"><img class="nopin" style="padding:<?php the_sub_field('padding');?>" class="jpibfi_container" src="<?php echo $leftIMG['sizes']['half-story']; ?>" alt="<?php echo $leftIMG['alt']; ?>" srcset="<?php echo $leftIMG['sizes']['half-story2x']; ?>" /></a>
                                            <?php } else { ?>
                                              <img style="padding:<?php the_sub_field('padding');?>" class="jpibfi_container" src="<?php echo $leftIMG['sizes']['half-story']; ?>" alt="<?php echo $leftIMG['alt']; ?>" srcset="<?php echo $leftIMG['sizes']['half-story2x']; ?>" />
                                            <?php } ?>

                                            <?php if(get_sub_field('need_credit?') == 'yes') {
                                                $textSide = get_sub_field('left_or_right?');
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
                                        <?php }
                                        if(get_row_layout() == 'content') { ?>
                                            <div style="padding:<?php the_sub_field('padding');?>">
                                            <?php the_sub_field('text'); ?>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            <?php }
                            if(have_rows('right_side')) { ?>
                                <div class="right-side">
                                    <?php while(have_rows('right_side')) { the_row();
                                        if(get_row_layout() == 'images') {
                                            $rightIMG = get_sub_field('image'); ?>
                                            <?php if(get_sub_field('link')) { ?>
                                              <a href="<?php the_sub_field('link'); ?>" target="_blank"><img class="nopin" style="padding:<?php the_sub_field('padding');?>" class="jpibfi_container" src="<?php echo $rightIMG['sizes']['half-story']; ?>" alt="<?php echo $rightIMG['alt']; ?>" srcset="<?php echo $rightIMG['sizes']['half-story2x']; ?>" /></a>
                                            <?php } else { ?>
                                              <img style="padding:<?php the_sub_field('padding');?>" class="jpibfi_container" src="<?php echo $rightIMG['sizes']['half-story']; ?>" alt="<?php echo $rightIMG['alt']; ?>" srcset="<?php echo $rightIMG['sizes']['half-story2x']; ?>" />
                                            <?php } ?>

                                            <?php if(get_sub_field('need_credit?') == 'yes') {
                                                $textSide = get_sub_field('left_or_right?');
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
                                        <?php }
                                        if(get_row_layout() == 'content') {?>
                                            <div style="padding:<?php the_sub_field('padding');?>">
                                            <?php the_sub_field('text'); ?>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php }
            ////////////////////////////////
            // CLOSE Clinger Two Column WYSIWYG
            ////////////////////////////////
        }
    }
}

?>
