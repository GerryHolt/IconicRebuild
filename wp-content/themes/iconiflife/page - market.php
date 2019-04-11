<?php
/*
   Template Name: Market
*/

get_header(); the_post();

$blogURL = site_url(); ?>

<?php
$design = 0;
$style = 0;
$people = 0;
$food = 0;
$travel = 0;
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


<section id="market-content">
    <div class="wrap">

        <div class="market-list">
            <div class="design-hub">
                MARKETPLACE
            </div>
            <div class="motto" style="font-family:'Benton'; font-size:36px; font-style:italic; font-weight:500;">
              Beautiful Things. Beautiful Homes.
            </div>
            <h5>Promotion</h5>
            <?php $counter = '1'; ?>
            <?php if($counter == '1') {?>
              <div class="market-item jpibfi_container" style="padding-bottom:0;">
              <!-- Marketplace - 366x526 - Column 1 [async] -->
              <script type="text/javascript">if (!window.AdButler){(function(){var s = document.createElement("script"); s.async = true; s.type = "text/javascript";s.src = 'https://servedbyadbutler.com/app.js';var n = document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(s, n);}());}</script>
              <script type="text/javascript">
              var AdButler = AdButler || {}; AdButler.ads = AdButler.ads || [];
              var abkw = window.abkw || '';
              var plc334621 = window.plc334621 || 0;
              document.write('<'+'div id="placement_334621_'+plc334621+'"></'+'div>');
              AdButler.ads.push({handler: function(opt){ AdButler.register(171978, 334621, [366,526], 'placement_334621_'+opt.place, opt); }, opt: { place: plc334621++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
              </script>
            </div>
            <?php $counter++;}
            if($counter == '2') { ?>
              <div class="market-item jpibfi_container" style="padding-bottom:0;">
                <!-- Marketplace - 366x526 - Column 2 [async] -->
                <script type="text/javascript">if (!window.AdButler){(function(){var s = document.createElement("script"); s.async = true; s.type = "text/javascript";s.src = 'https://servedbyadbutler.com/app.js';var n = document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(s, n);}());}</script>
                <script type="text/javascript">
                var AdButler = AdButler || {}; AdButler.ads = AdButler.ads || [];
                var abkw = window.abkw || '';
                var plc334622 = window.plc334622 || 0;
                document.write('<'+'div id="placement_334622_'+plc334622+'"></'+'div>');
                AdButler.ads.push({handler: function(opt){ AdButler.register(171978, 334622, [366,526], 'placement_334622_'+opt.place, opt); }, opt: { place: plc334622++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
                </script>
              </div>
            <?php $counter++;}
            if($counter == '3') { ?>
              <div class="market-item jpibfi_container" style="padding-bottom:0;">
                <!-- Marketplace - 366x526 - Column 3 [async] -->
                <script type="text/javascript">if (!window.AdButler){(function(){var s = document.createElement("script"); s.async = true; s.type = "text/javascript";s.src = 'https://servedbyadbutler.com/app.js';var n = document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(s, n);}());}</script>
                <script type="text/javascript">
                var AdButler = AdButler || {}; AdButler.ads = AdButler.ads || [];
                var abkw = window.abkw || '';
                var plc334623 = window.plc334623 || 0;
                document.write('<'+'div id="placement_334623_'+plc334623+'"></'+'div>');
                AdButler.ads.push({handler: function(opt){ AdButler.register(171978, 334623, [366,526], 'placement_334623_'+opt.place, opt); }, opt: { place: plc334623++, keywords: abkw, domain: 'servedbyadbutler.com', click:'CLICK_MACRO_PLACEHOLDER' }});
                </script>
              </div>
            <?php $counter++;} ?>
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
                'post_type' => 'craves',
                'tax_query' => array(
                        array(
                            'taxonomy' => 'crave-categories',
                            'field' => 'slug',
                            'terms' => array( 'market' )
                        )
                ),
                'posts_per_page' => '30',
                'paged' => $paged,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $query = new WP_Query( $args );
            if( $query->have_posts()) { ?>
                <?php while( $query->have_posts() ) {
                    $query->the_post();?>
                    <div class="market-item jpibfi_container">
                        <?php if(get_field('homepage_image')) {
                            $featureImg = get_field('homepage_image'); ?>
                            <a href="<?php the_permalink(); ?>" class="jpibfi_container"><img src="<?php echo $featureImg['sizes']['market-pic']; ?>" srcset="<?php echo $featureImg['sizes']['market-pic']; ?>" /></a>
                        <?php } else { ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('market-pic'); ?></a>
                        <?php }?>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p>
                            <?php echo excerpt(36); ?>
                        </p>
                        <?php if(get_field('shop_url')) { ?>
                            <p>
                                <a href="<?php the_field('shop_url'); ?>" class="shop-btn">Buy</a>
                            </p>
                        <?php }?>
                    </div>
                <?php }
            }?>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>
