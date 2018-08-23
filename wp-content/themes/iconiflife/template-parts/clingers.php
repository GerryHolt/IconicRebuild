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

                                        <img class="jpibfi_container" src="<?php echo $clingerImg['sizes']['clinger-column']; ?>" alt="<?php echo $clingerImg['alt']; ?>" />
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
                                            <p class="photo-credit" style="text-align:<?php echo $textSide; ?>">
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
        }
    }
}

?>
