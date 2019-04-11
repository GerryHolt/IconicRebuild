<?php
/*
   Template Name: Video
*/

get_header(); the_post();

$blogURL = site_url(); ?>

<?php
$design = 0;
$style = 0;
$people = 0;
$food = 0;
$travel = 0;
$counter = 1;
$args = array(
    'posts_per_page' => '5',
    'post_type' => array('design', 'style', 'people', 'food', 'travel'),
    'orderby' => 'date',
    'order' => 'DESC'
);
$query = new WP_Query( $args );

if( $query->have_posts()) { ?>
    <?php while( $query->have_posts() ) {
        $query->the_post();
        $postType = get_post_type();
        if($postType == 'design') {
            $design++;
        } elseif($postType == 'style') {
            $style++;
        }elseif($postType == 'people') {
            $people++;
        }elseif($postType == 'food') {
            $food++;
        }elseif($postType == 'travel') {
            $travel++;
        }
    }
}?>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>


<section id="story-featured" class="jpibfi_container">
    <div class="wrap">
        <?php $postType = get_post_type(); ?>
        <h5 class="icon-slash">
            <?php $postType = get_post_type(); ?>
            <a href="<?php echo $blogURL."/".$postType; ?>" class="jpibfi_container">VIDEO</a>
        </h5>
        <?php if(get_field('do_you_need_an_alternate_title') == 'yes') { ?>
            <h1 class="story-title">
                <?php the_field('alternate_title'); ?>
            </h1>
        <?php } else { ?>
        <h1 class="story-title">
            <?php the_title(); ?>
        </h1>
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

<!-- <div id="section-divider"><div class="inner-divider"></div></div> -->

<section id="story-content">
    <div class="wrap">
        <div class="video-content">
            <?php if( have_rows('homepage_format')) {
                while(have_rows('homepage_format')) { the_row();
                    if( get_row_layout() == 'triple_feature' ) {?>
                        <h3>Live Beautifully</h3>
                        <div class="featured-list">
                            <h5>Featured Stories</h5>
                            <?php
                            $args = array(
                                'posts_per_page' => '3',
                                'post_type' => array('design', 'style', 'people', 'food', 'travel'),
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'offset' => 2
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
                                        <p class="meta">
                                            <?php $post_date = get_the_date( 'F j, Y' );?>
                                            <span>by</span> <?php the_author(); ?>&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post_date; ?>
                                        </p>
                                    </div>
                                <?php }
                            }?>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        </div>
                        <div id="section-divider-inside"><div class="inner-divider"></div></div>
                    <?php } ?> <!-- end triple feature -->
                    <?php if( get_row_layout() == 'recent_stories' ) {?>
                        <div class="featured-list">
                            <?php $recentCat = get_sub_field('category');?>
                            <h5 class="icon-slash home-cat"><a href="<?php echo $blogURL; ?>/<?php echo $recentCat ; ?>"><?php echo $recentCat; ?></a></h5>
                            <?php
                            if($recentCat == 'travel') {
                                $offset = $travel;
                            }
                            if($recentCat == 'style') {
                                $offset = $style;
                            }
                            if($recentCat == 'food') {
                                $offset = $food;
                            }
                            if($recentCat == 'design') {
                                $offset = $design;
                            }
                            if($recentCat == 'people') {
                                $offset = $people;
                            }
                            $args = array(
                                'posts_per_page' => '3',
                                'post_type' => $recentCat,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'offset' => $offset
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
                                        <p class="meta">
                                            <?php $post_date = get_the_date( 'F j, Y' );?>
                                            <span>by</span> <?php the_author(); ?>&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $post_date; ?>
                                        </p>
                                    </div>
                                <?php }
                            }?>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        </div>
                        <div id="section-divider-inside"><div class="inner-divider"></div></div>
                    <?php } ?> <!-- end recent stories -->

                    <?php if( get_row_layout() == 'video_block' ) {?>
                        <?php if($counter == 1) {
                            $counter++;
                        } else {?>
                            <div id="section-divider-inside"><div class="inner-divider" style="margin-bottom:60px;"></div></div>
                        <?php }?>
                        <div class="video-block">
                            <?php
                                $videoImg = get_sub_field('video_image');
                            ?>
                            <a class="popup-youtube arrow-right" href="https://www.youtube.com/watch?v=<?php the_sub_field('youtube_id');?>"><img src="<?php echo $videoImg['sizes']['home-feature'];?>" /></a>
                            <div class="video-left">
                                <h3><?php the_sub_field('video_title');?></h3>
                                <?php the_sub_field('video_dek');?>
                                <?php if(get_sub_field('credit')) {?>
                                    <p>
                                        <?php the_sub_field('credit'); ?>
                                    </p>
                                <?php }?>
                            </div>
                            <div class="video-right">
                                <a href="<?php the_sub_field('article_link');?>"><img src="https://iconiclife.com/wp-content/uploads/2018/11/Full-Story-Icon-100x100.jpg" class="alignleft" width="52" height="52" /></a>
                                <p>
                                    <a href="<?php the_sub_field('article_link');?>"><?php the_sub_field('article_link_text'); ?></a>
                                </p>
                            </div>
                            <a href="<?php the_sub_field('article_link');?>" style="text-align:center;  display:block;"><img src="<?php echo $articleImg['sizes']['home-feature'];?>" style="display:block; margin:30px auto 10px;" /></a>
                        </div>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php
                            if(get_sub_field('shop_the_look')) {?>
                                <div class="top-quote" style="font-size:0;"><div class="inner-top-quote"></div></div>
                                <div class="shop-section">
                                    <h3 style="">SHOP THE LOOK</h3>
                                    <!-- <img class="shop-the-look" src="/ui/images/Shop_the_Look.png" alt="" /> -->
                                    <?php the_sub_field('shop_the_look'); ?>
                                </div>
                        <?php
                    }  ?>

                    <?php } ?> <!-- end video -->

                <?php }?>
            <?php }?>
            <div id="section-divider-inside"><div class="inner-divider"></div></div>
            <div class="also-like-story">
            <h3>You May Also Like</h3>
                <div class="featured-list">
                    <?php
                    $args = array(
                        'post__not_in' => array($postid, '4911'),
                        'posts_per_page' => '1',
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
                    <?php
                    $args = array(
                        'post_type' => 'style',
                        'posts_per_page' => '1',
                        'orderby' => 'post__in',
                        'post__in' => array('4911')
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
                            </div>
                        <?php }
                    }?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php
                    $args = array(
                        'post__not_in' => array($postid, '4911'),
                        'posts_per_page' => '1',
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
                            </div>
                        <?php }
                    }?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

                </div>
              </div>
        </div>
        <?php include 'sidebar-post.php'; ?>

    </div>
</section>

<?php get_footer(); ?>
