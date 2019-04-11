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
<link rel="stylesheet" type="text/css" href="/ui/css/oldcss/style.css"/>
<link rel="stylesheet" type="text/css" href="/ui/css/oldcss/iconi2.css"/>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PS7DPXT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


  <section id="header">
      <div class="wrap">
          <div class="logo">
              <a href="<?php bloginfo('url'); ?>"><img src="/ui/images/logo.png" /></a>
          </div>
          <div id="m-toggle" class="icon-i-logo">
              <span></span>
          </div>
          <div id="navigation" class="nav">
              <div class="subscribe-top" style="position:relative; height:60px;">
                  <div class="sub-btn" style="position:absolute; right: 25px;">
                      <div style="display:inline-block; font: normal 26px/1.2 'Barlow'; text-transform:capitalize; color: #fff; letter-spacing:1px; vertical-align: top; padding-top: 2px; margin-right: 15px;">Get Luxury in Your Inbox</div>
                        <div class="_form_13" style="display: inline-block;"></div><script src="https://iconic.activehosted.com/f/embed.php?id=13" type="text/javascript" charset="utf-8"></script>
                    </div>

              </div>
              <?php wp_nav_menu('menu=main-menu-alt&container='); ?>
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
  <div id="nav-placeholder" class="hide"></div>
