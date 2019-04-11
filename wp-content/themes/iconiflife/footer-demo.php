<section id="footer">
    <div class="wrap">
        <div class="one-third foot-social">
            <p>
                Follow us
            </p>
            <ul class="social-bar">
                <li class="icon-facebook icons"><a href="<?php the_field('facebook', 'options'); ?>" target="_blank"></a></li>
                <li class="icon-instagram icons"><a href="<?php the_field('instagram', 'options'); ?>" target="_blank"></a></li>
                <li class="icon-twitter icons"><a href="<?php the_field('twitter', 'options'); ?>" target="_blank"></a></li>
                <li class="icon-pinterest icons"><a href="<?php the_field('pinterest', 'options'); ?>" target="_blank"></a></li>
                <li class="icon-play icons"><a href="<?php the_field('youtube', 'options'); ?>" target="_blank"></a></li>
            </ul>
        </div>
        <div class="one-third foot-logo">
            <img src="/ui/images/logo-vert.png" width="35%"  />
        </div>
        <div class="one-third foot-sub">
            <h4>Subscribe Today to Get Luxury Lifestyle Inspiration in<br />Your Inbox</h4>
            <?php echo do_shortcode( '[activecampaign form=5]' ); ?>
        </div>
    </div>
    <div class="foot-util">
        <p>
            &copy;<? echo date(Y);?> ICONIC - ALL RIGHTS RESERVED
        </p>
        <?php wp_nav_menu('menu=footer-nav&container='); ?>
    </div>

</section>

<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="inner-dialog">
        <h2 style="font-family:'Benton'";>Luxury Escapes. Decadent Stays.</h2>
        <h3>Get Our Ultimate ICONIC LIFE Travel Guide for 2019</h3>
    	<!-- <p>Get our ultimate travel guide—our gift to you—delivered right to your inbox.</p> -->
        <div class="_form_17"></div><script src="https://iconic.activehosted.com/f/embed.php?id=17" type="text/javascript" charset="utf-8"></script>
        <a class="close-opt" style="color:#000;">I'm set, thanks</a>
    </div>
</div>

<?php wp_footer(); ?>
<script async>(function(s,u,m,o,j,v){j=u.createElement(m);v=u.getElementsByTagName(m)[0];j.async=1;j.src=o;j.dataset.sumoSiteId='1d78a4005ef3b0009ad71f00f2280e00e8610800eace90006272780004ae9c00';v.parentNode.insertBefore(j,v)})(window,document,'script','//load.sumo.com/');</script>

</body>
</html>
