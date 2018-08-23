<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
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


    <section id="header">
        <div class="wrap">
            <div id="m-toggle-story" class="icon-i-logo">
                <span></span>
            </div>
            <div class="nav-story">
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
