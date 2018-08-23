<?php if( get_row_layout() == 'half_width_content' ) {
    if(have_rows('half_size_options')) {
        while(have_rows('half_size_options')) { the_row();
            ////////////////////////////////
            // OPEN DAY IN THE LIFE HALF
            ////////////////////////////////
            if( get_row_layout() == 'day_in_the_life_half' ) { ?>
                <?php if(get_sub_field('select_layout')=='t-left') {
                    $flexDirection = "flex-direction: row-reverse";
                } else {
                    $flexDirection = "flex-direction: unset";
                }?>
                <div class="half-col-day" style="<?php echo $flexDirection; ?>;">
                    <div class="day-image" >
                        <?php $dayImg = get_sub_field('image'); ?>
                        <img class="jpibfi_container" src="<?php echo $dayImg['sizes']['half-story']; ?>" alt="<?php echo $dayImg['alt']; ?>" srcset="<?php echo $dayImg['sizes']['half-story2x']; ?>" />
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
            // CLOSE DAY IN THE LIFE HALF
            ////////////////////////////////
            ////////////////////////////////
            // OPEN HALF COLUMN
            ////////////////////////////////
            if( get_row_layout() == 'half_column' ) { ?>
                <?php if(get_sub_field('which_side_do_you_want_the_image_on')=='right') {
                    $flexDirection = "flex-direction: row-reverse";
                } else {
                    $flexDirection = "flex-direction: unset";
                }?>
                <div class="half-col" style="<?php echo $flexDirection; ?>;">
                    <div class="day-image">
                        <?php if(have_rows('images')) {
                            while(have_rows('images')) { the_row();?>
                                <?php $halfImg = get_sub_field('image'); ?>
                                <img class="jpibfi_container" src="<?php echo $halfImg['sizes']['half-story']; ?>" alt="<?php echo $halfImg['alt']; ?>" srcset="<?php echo $halfImg['sizes']['half-story2x']; ?>" />
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
                            <?php } ?>
                        <?php }?>
                    </div>
                    <div class="day-text">
                        <?php the_sub_field('text'); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            <?php }
            ////////////////////////////////
            // CLOSE HALF COLUMN
            ////////////////////////////////
            ////////////////////////////////
            // OPEN Quick Questions
            ////////////////////////////////
            if( get_row_layout() == 'quick_questions' ) { ?>
                <div class="half-col">
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
            ////////////////////////////////
            // OPEN HALF COLUMN LIST
            ////////////////////////////////
            if( get_row_layout() == 'half_column_list' ) {
                if(have_rows('list_item')) { ?>
                    <div class="half-col-list">
                        <?php while(have_rows('list_item')) { the_row(); ?>
                            <div class="half-column">
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
            // CLOSE HALF COLUMN LIST
            ////////////////////////////////
            ////////////////////////////////
            // OPEN Two Column WYSIWYG
            ////////////////////////////////
            if( get_row_layout() == 'two_column_wysiwyg' ) { ?>
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
            <?php }
            ////////////////////////////////
            // CLOSE Two Column WYSIWYG
            ////////////////////////////////
        }
    }
} ?>
