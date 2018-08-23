<?php if( get_row_layout() == 'third_width_content' ) {
    if(have_rows('third_size_options')) {
        while(have_rows('third_size_options')) { the_row();
            ////////////////////////////////
            // OPEN THREE COLUMN LIST
            ////////////////////////////////
            if( get_row_layout() == 'three_column_list' ) {
                if(have_rows('list_item')) { ?>
                    <div class="three-col-list">
                        <?php while(have_rows('list_item')) { the_row(); ?>
                            <div class="one-column">
                                <h6><?php the_sub_field('item_label');?></h6>
                                <?php $itemImg = get_sub_field('item_image'); ?>
                                <img class="jpibfi_container" src="<?php echo $itemImg['sizes']['third-list-image']; ?>" srcset="<?php echo $itemImg['sizes']['third-list-image2x']; ?>" />
                                <p class="item-title">
                                    <?php the_sub_field('item_title');?>
                                </p>
                                <?php the_sub_field('item'); ?>
                            </div>
                        <?php }  ?>
                    </div>
                <?php }?>
            <?php }
            ////////////////////////////////
            // CLOSE THREE COLUMN LIST
            ////////////////////////////////
            ////////////////////////////////
            // OPEN DAY IN THE LIFE THREE COL
            ////////////////////////////////
            if( get_row_layout() == 'day_in_the_life_thirds' ) { ?>
                <?php if(get_sub_field('select_layout')=='t-left') {
                    $flexDirection = "flex-direction: row-reverse";
                } else {
                    $flexDirection = "flex-direction: unset";
                }?>
                <div class="three-col-day" style="<?php echo $flexDirection; ?>;">
                    <div class="day-image" >
                        <?php $dayImg = get_sub_field('image'); ?>
                        <img class="jpibfi_container" src="<?php echo $dayImg['sizes']['two-third-story']; ?>" srcset="<?php echo $dayImg['sizes']['two-third-story2x']; ?>" alt="<?php echo $dayImg['alt']; ?>" />
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
                    </div>
                    <div class="day-text">
                        <?php the_sub_field('text'); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php }
            ////////////////////////////////
            // CLOSE DAY IN THE LIFE THREE COL
            ////////////////////////////////
            ////////////////////////////////
            // OPEN Thirds Image Two Column
            ////////////////////////////////
            if( get_row_layout() == 'thirds_image_two_column' ) { ?>
                <?php if(get_sub_field('which_side_do_you_want_the_image_on')=='right') {
                    $flexDirection = "flex-direction: row-reverse";
                } else {
                    $flexDirection = "flex-direction: unset";
                }?>
                <div class="three-col" style="<?php echo $flexDirection; ?>;">
                    <div class="two-third-image">
                        <?php if(have_rows('images')) {
                            while(have_rows('images')) { the_row();?>
                                <?php $thirdImg = get_sub_field('image'); ?>
                                <?php if(get_sub_field('link')) { ?>
                                  <a href="<?php the_sub_field('link'); ?>" target="_blank"><img class="nopin" src="<?php echo $thirdImg['sizes']['two-third-story']; ?>" srcset="<?php echo $thirdImg['sizes']['two-third-story2x']; ?>" alt="<?php echo $thirdImg['alt']; ?>" /></a>
                                <?php } else { ?>
                                  <img class="jpibfi_container" src="<?php echo $thirdImg['sizes']['two-third-story']; ?>" srcset="<?php echo $thirdImg['sizes']['two-third-story2x']; ?>" alt="<?php echo $thirdImg['alt']; ?>" />

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
                            <?php }
                        }?>
                    </div>
                    <div class="one-third-text">
                        <?php the_sub_field('content'); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php }
            ////////////////////////////////
            // CLOSE Thirds Image Two Column
            ////////////////////////////////
            ////////////////////////////////
            // OPEN Thirds Image one Column
            ////////////////////////////////
            if( get_row_layout() == 'thirds_image_one_column' ) { ?>
                <?php if(get_sub_field('which_side_do_you_want_the_image_on')=='right') {
                    $flexDirection = "flex-direction: row-reverse";
                } else {
                    $flexDirection = "flex-direction: unset";
                }?>
                <div class="three-col" style="<?php echo $flexDirection; ?>;">
                    <div class="one-third-image">
                        <?php if(have_rows('images')) {
                            while(have_rows('images')) { the_row();?>
                                <?php $thirdImg = get_sub_field('image'); ?>
                                <img class="jpibfi_container" src="<?php echo $thirdImg['sizes']['one-column']; ?>" srcset="<?php echo $thirdImg['sizes']['one-column2x']; ?>" alt="<?php echo $thirdImg['alt']; ?>" />
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
                            <?php }
                        }?>
                    </div>
                    <div class="two-third-text">
                        <?php the_sub_field('content'); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php }
            ////////////////////////////////
            // CLOSE Thirds Image one Column
            ////////////////////////////////
            ////////////////////////////////
            // OPEN Quick Questions
            ////////////////////////////////
            if( get_row_layout() == 'quick_questions_thirds' ) { ?>
                <div class="three-col">
                    <?php if(have_rows('left_side')) {?>
                        <div class="left-side">
                            <?php while(have_rows('left_side')) { the_row();
                                if(get_row_layout() == 'images') {
                                    $questionIMG = get_sub_field('image'); ?>
                                    <img class="jpibfi_container" src="<?php echo $questionIMG['sizes']['half-story']; ?>" alt="<?php echo $questionIMG['alt']; ?>" srcset="<?php echo $questionIMG['sizes']['half-story2x']; ?>" />
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
                                <?php }
                                if(get_row_layout() == 'content') {
                                    the_sub_field('text');
                                }
                            } ?>
                        </div>
                    <?php }
                    if(have_rows('right_side')) { ?>
                        <div class="right-side">
                            <div class="clinger-top"></div>
                            <div class="clinger-body">
                                <?php while(have_rows('right_side')) { the_row();
                                    if(get_row_layout() == 'section_title'){ ?>
                                        <h5><?php the_sub_field('title'); ?></h5>
                                    <?php }
                                    if(get_row_layout() == 'dek') { ?>
                                        <p class="clinger-dak">
                                            <?php the_sub_field('dek'); ?>
                                        </p>
                                    <?php }
                                    if(get_row_layout() == 'questions') {?>
                                        <p class="question-title">
                                            <?php the_sub_field('question'); ?>
                                        </p>
                                        <div class="question-answer">
                                            <?php the_sub_field('answer'); ?>
                                        </div>
                                    <?php }
                                }?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php }
            ////////////////////////////////
            // CLOSE Quick Questions
            ////////////////////////////////
        }
    }
} ?>
