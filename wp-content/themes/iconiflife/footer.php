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
            <img src="/ui/images/logo-vert.png"  />
        </div>
        <div class="one-third foot-sub">
            <h4>Subscribe to receive exclusive offers and the latest from ICONIC</h4>
            <?php echo do_shortcode( '[activecampaign form=5]' ); ?>
        </div>
    </div>
    <div class="foot-util">
        <p>
            &copy;2018 ICONIC - ALL RIGHTS RESERVED
        </p>
        <?php wp_nav_menu('menu=footer-nav&container='); ?>
    </div>

</section>


<?php wp_footer(); ?>
<script async>(function(s,u,m,o,j,v){j=u.createElement(m);v=u.getElementsByTagName(m)[0];j.async=1;j.src=o;j.dataset.sumoSiteId='1d78a4005ef3b0009ad71f00f2280e00e8610800eace90006272780004ae9c00';v.parentNode.insertBefore(j,v)})(window,document,'script','//load.sumo.com/');</script>

</body>
</html>
