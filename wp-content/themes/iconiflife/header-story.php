<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PS7DPXT');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8" />
    <meta name="MSSmartTagsPreventParsing" content="true" /><!--[if lte IE 9]><meta http-equiv="X-UA-Compatible" content="IE=Edge"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <?php if (is_front_page()) { ?>
        <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <?php } else { ?>
        <title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
    <?php }; ?>
    <link type="text/plain" rel="author" href="../authors.txt" />
    <!-- <link type="image/x-icon" rel="shortcut icon" href="../favicon.ico" /> -->
    <link rel="shortcut icon" href="/ui/images/Iconic-i-favicon-30x30.png" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="180x180" href="/ui/images/Iconic-i-favicon-30x30.png">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS7DPXT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <section id="super-nav">
        <div class="noshow">
            <div id="m-toggle-inner" class="icon-cancel">
                <span></span>
            </div>
            <!-- <div class="super-logo">
                <a href="<?php bloginfo('url'); ?>"><img src="/ui/images/ICONICLogo_white.png" /></a>
            </div> -->
            <?php wp_nav_menu('menu=super-menu&container='); ?>
            <div class="super-sub">
                <h4>Luxury in<br />Your Inbox</h4>
                <div class="_form_15"></div><script src="https://iconic.activehosted.com/f/embed.php?id=15" type="text/javascript" charset="utf-8"></script>
            </div>
        </div>
    </section>

    <section id="header">
        <div class="wrap">
            <div id="m-toggle-story" class="icon-i-logo">
                <span></span>
            </div>
            <div class="nav-story">
                <div id="m-toggle-new" class="icon-bars">
                    <span></span>
                </div>
                <?php wp_nav_menu('menu=mobile-menu&container='); ?>
                <div class="search-btn">
                    <ul class="util-nav">
                        <form action="<?php bloginfo('url'); ?>" method="get" id="searchform">
                            <input type="checkbox" />
                            <span class="icon-search"></span>
                            <input type="text" name="s" class="icon-search" />
                        </form>
                    </ul>
                </div>
            </div>


        </div>
    </section>
