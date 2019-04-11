<?php
/* ========================================================================= */
/* WORDPRESS EXTERNAL FILES     */
/* ========================================================================= */

include_once 'functions/functions-post-types.php';
include_once 'functions/functions-helpers.php';
//include_once 'functions/functions-widgets.php';
//include_once 'functions/functions-comments.php';


/* ========================================================================= */
/* WORDPRESS SECURITY */
/* ========================================================================= */

remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version

/* Prevent Login Errors for Security */
add_filter( 'login_errors', '__return_null' );

/* ========================================================================= */
/* WORDPRESS CUSTOMIZATION & SETUP */
/* ========================================================================= */

/* Post Thumbnail Sizes */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 64, 64, true );
add_image_size( 'story-image-full', 780, false);
add_image_size( 'full-story', 1200, false);
add_image_size( 'in-story', 780, false);
add_image_size( 'half-story', 600, false);
add_image_size( 'two-third-story', 600, false);
add_image_size( 'story-image-featured', 870, false);
add_image_size( 'one-column', 600, false);
add_image_size( 'two-column', 743, false);
add_image_size( 'featured-crave', 140, 140, true);
add_image_size( 'clinger-column', 600, false);
add_image_size( 'home-feature', 870, 512, true);
add_image_size( 'market-pic', 370, 258, false);
add_image_size( 'home-mini-feature', 250, 218, true);
add_image_size( 'third-list-image', 600, false);
add_image_size( 'old-stories', 342, 303, true);
add_image_size( 'story-image-full2x', 1560, false);
add_image_size( 'full-story2x', 2400, false);
add_image_size( 'in-story2x', 1560, false);
add_image_size( 'half-story2x', 1200, false);
add_image_size( 'two-third-story2x', 1200, false);
add_image_size( 'story-image-featured2x', 1740, false);
add_image_size( 'one-column2x', 1200, false);
add_image_size( 'two-column2x', 1486, false);
add_image_size( 'featured-crave2x', 280, 280, true);
add_image_size( 'clinger-column2x', 1200, false);
add_image_size( 'home-feature2x', 1305, 768, true);
add_image_size( 'home-mini-feature2x', 500, 436, true);
add_image_size( 'third-list-image2x', 1200, false);
add_image_size( 'old-stories2x', 684, 606, true);

/* Declare Nav Menu Areas */
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu'
        )
    );
}

/* ========================================================================= */
/* DISABLE EMOJIS */
/* ========================================================================= */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* Globally Hide Admin Meta Boxes */
function hide_meta_boxes() {
    remove_meta_box( 'postcustom', 'post', 'normal' );                  // custom fields post
    remove_meta_box( 'postcustom', 'page', 'normal' );                  // custom fields page
    remove_meta_box( 'commentstatusdiv', 'page', 'normal' );            // discussion page
    remove_meta_box( 'authordiv', 'page', 'normal' );                   // author page
    remove_meta_box( 'postimagediv', 'page', 'normal' );                // featured image page
    remove_meta_box( 'trackbacksdiv', 'post', 'normal' );               // track backs
    //remove_meta_box( 'pageparentdiv', 'page', 'normal' );             // page attributes
    //remove_meta_box( 'tagsdiv-post-tag', 'post', 'normal' );          // post tags
    //remove_meta_box( 'categorydiv', 'post', 'normal' );               // post categories
    //remove_meta_box( 'postexcerpt', 'post', 'normal' );               // post excerpt
    //remove_meta_box( 'revisionsdiv', 'post', 'normal' );              // revisions post
    //remove_meta_box( 'revisionsdiv', 'page', 'normal' );              // revisions page
    //remove_meta_box( 'postimagediv', 'post', 'normal' );              // featured image post
    //remove_meta_box( 'commentsdiv', 'post', 'normal' );               // comments post
    //remove_meta_box( 'commentsdiv', 'page', 'normal' );               // comments page
    //remove_meta_box( 'authordiv', 'post', 'normal' );                 // author post
    //remove_meta_box( 'commentstatusdiv', 'post', 'normal' );          // discussion post
}
add_action( 'admin_init', 'hide_meta_boxes' );


/* Hide Wordpress Default Dashboard Widgets */
function remove_dashboard_widgets() {
    global $wp_meta_boxes;
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments'] );
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );
    //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );


/* ========================================================================= */
/* CUSTOM LOGIN STYLES */
/* ========================================================================= */

function my_login_stylesheet() {
   wp_enqueue_style( 'custom-login', '/ui/css/login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

function ico_login() {
    echo '<a href="https://www.iconiclife.com/" target="_blank">';
    echo '<div id="ico-login"></div>';
    echo '</a>';
}
add_action( 'login_footer', 'ico_login' );

function ico_login_url() {
    return get_bloginfo( 'url' );
}
add_action( 'login_headerurl', 'ico_login_url' );

function ico_login_title() {
    return get_bloginfo( 'name' );
}
add_action( 'login_headertitle', 'ico_login_title' );


/* ========================================================================= */
/* ENQUEUE SCRIPTS */
/* ========================================================================= */

function enqueue_scripts() {
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_bloginfo( 'url' ) . '/ui/js/jquery.js', array(), null );
    wp_enqueue_script( 'modernizr', get_bloginfo( 'url' ) . '/ui/js/modernizr.js', array(), null, true );
    wp_enqueue_script( 'svgxuse', get_bloginfo( 'url' ) . '/ui/js/svgxuse.js', array(), null, true );
    wp_enqueue_script( 'plugins', get_bloginfo( 'url' ) . '/ui/js/jquery.plugins.js', array( 'jquery' ), filemtime( '/nas/content/live/iconic2/ui/js/jquery.plugins.js' ), true );
    wp_enqueue_script( 'init', get_bloginfo( 'url' ) . '/ui/js/jquery.init.js', array( 'jquery', 'plugins', 'modernizr' ), filemtime( '/nas/content/live/iconic2/ui/js/jquery.init.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


/* ========================================================================= */
/* ENQUEUE STYLES */
/* ========================================================================= */

function enqueue_styles() {
    wp_enqueue_style( 'style', get_bloginfo( 'url' ) . '/ui/css/style.css', array(), filemtime( '/nas/content/live/iconic2/ui/css/style.css' ) );
}
// With Print Style Sheet
// function enqueue_styles() {
//     wp_enqueue_style( 'style', get_bloginfo( 'url' ) . '/ui/css/style.css', array(), null, 'screen' );
//     wp_enqueue_style( 'print', get_bloginfo( 'url' ) . '/ui/css/print.css', array(), null, 'print' );
// }
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );


/* Add a Stylesheet for Admin Content Area */
function admin_font_setup() {
    add_editor_style( array( 'style-wysiwyg.css', '/' ) );
}
add_action( 'after_setup_theme', 'admin_font_setup' );

function my_custom_fonts() {
    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/style-wysiwyg.css" />';
}
add_action( 'admin_head', 'my_custom_fonts' );


/* ========================================================================= */
/* GRAVITY FORM CUSTOMIZATIONS */
/* ========================================================================= */

add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    $button_array = $form["button"];
    $button_text = $button_array["text"];
    return "<button type='submit' class='submit btn' id='gform_submit_button_{" . $form["id"] . "}'><span>$button_text</span></button>";
}
add_filter( 'gform_confirmation_anchor', '__return_true' );


/* ========================================================================= */
/* ADD ACF5 OPTIONS PAGE - more args available at http://www.advancedcustomfields.com/resources/acf_add_options_page/  */
/* ========================================================================= */

if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page( array(
        'page_title' => 'Options',
        'menu_slug' => 'options'
    ) );
}


/* ========================================================================= */
/*  REMOVE [] FROM [...] */
/* ========================================================================= */

function new_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


/* ========================================================================= */
/*  BROWSER DETECTION body_class() OUTPUT */
/* ========================================================================= */

function body_class_adjustments( $classes1 ) {

    $browser = $_SERVER['HTTP_USER_AGENT'];
    global  $is_iphone,     //iPhone Safari
            $is_chrome,     //Google Chrome
            $is_safari,     //Safari
            $is_NS4,        //NetScape 4
            $is_opera,      //Opera
            $is_macIE,      //Mac Internet Explorer
            $is_winIE,      //Windows Internet Explorer
            $is_gecko,      //FireFox
            $is_lynx,       //Lynx - The Rad Termninal Browsers
            $is_IE,         //Internet Explore
            $is_edge;       //Microsoft Edge

    $classes = array();
    /* Browsers no one cares about or uses... just fun to keep lol lynx*/
    if ( $is_lynx )        $classes[] = 'lynx';
    elseif ( $is_NS4 )     $classes[] = 'ns4';
    elseif ( $is_opera )   $classes[] = 'opera';
    elseif ( $is_chrome ) {
        $browser   = explode( ' ', $browser );
        $browser   = explode( '/', $browser[11] );
        $browser   = explode( '.', $browser[0]) ;
        $browser   = 'chrome-'.$browser[0];
        $classes[] = $browser;
        $classes[] = 'chrome';
    }
    elseif ( $is_gecko) {
        $browser   = explode( ' ', $browser );
        $browser   = $browser[9];
        $browser   = strtolower( $browser );
        $browser   = str_replace( '/', '-', str_replace( '.0', '', $browser ) );
        $classes[] = $browser;
        $classes[] = 'gecko';
    }
    elseif ( $is_safari) {
        $browser   = explode( " ", $browser );
        $browser   = str_replace( 'Version/', '', $browser[11] );
        $browser   = explode( ".", $browser );
        $browser   = 'safari-' . $browser[0];
        $classes[] = $browser;
        $classes[] = 'safari';
    } elseif ( $is_edge) {
        $browser   = explode( " ", $browser );
        $browser   = strtolower( str_replace( '/', '-', $browser[12] ) );
        $browser   = explode( '.', $browser );
        $browser   = $browser[0];
        $classes[] = $browser;
        $classes[] = 'edge';
    } elseif ( $is_IE) {
        $iecheck = substr( "$browser", 25, 8 );
        if ( "MSIE 10." == $iecheck ) {
            $classes[] = 'ie10';
            $classes[] = 'ie';
        } else {
            //Assume ie11 it's the last one.
            $classes[] = 'ie11';
            $classes[] = 'ie';
        }
    }

    return array_merge( $classes1, $classes );
}
add_filter( 'body_class', 'body_class_adjustments' );


/* ========================================================================= */
/* REMOVE <P> WRAPPER WHEN ONLY <IMG /> IS CONTAINED WITHIN */
/* ========================================================================= */

function filter_ptags_on_images( $content ) {
   return preg_replace( '/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content );
}
add_filter( 'the_content', 'filter_ptags_on_images' );


/* ========================================================================= */
/* ADD OPTION TO FILTER PDF IN MEDIA LIBRARY */
/* ========================================================================= */

function modify_post_mime_types( $post_mime_types ) {
    $post_mime_types['application/pdf'] = array(__( 'PDFs' ), __( 'Manage PDF' ), _n_noop( 'PDF <span class="count">(%s)</span>', 'PDFs <span class="count">(%s)</span>' ) );
    return $post_mime_types;
}
add_filter( 'post_mime_types', 'modify_post_mime_types' );


/* ========================================================================= */
/* SVG Support */
/* ========================================================================= */

function cc_mime_types( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


/* ========================================================================= */
/* Move Yoast to bottom
   Shove yoast to the bottom of the edit page where it belongs. */
/* ========================================================================= */

function yoasttobottom() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom' );

/* ========================================================================= */
/* Remove Auto P tag
   remove p tags around acf content */
/* ========================================================================= */

function the_field_without_filters( $the_field=null ) {
    remove_filter('acf_the_content', 'wpautop');
    if( $the_field ) {
      the_field( $the_field );
    } else {
      the_field();
    }
    add_filter('acf_the_content', 'wpautop');
}

/* ========================================================================= */
/*  Add dropdown for custom classes to WYSIWYG editor */
/* ========================================================================= */

function add_style_select_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );

/* ========================================================================= */
/*  Add custom classes for the WYSIWYG dropdown */
/* ========================================================================= */

function my_custom_styles( $init_array ) {

    $style_formats = array(
        // These are the custom styles
        array(
            'title' => 'Multislash',
            'block' => 'span',
            'classes' => 'multislash',
            'wrapper' => true,
        ),
        array(
            'title' => 'Photo Title',
            'block' => 'span',
            'classes' => 'photo-title',
            'wrapper' => true,
        ),
        array(
            'title' => 'Time',
            'block' => 'span',
            'classes' => 'time',
            'wrapper' => true,
        ),
        array(
            'title' => 'Time Meridiem',
            'block' => 'span',
            'classes' => 'time-meridiem',
            'wrapper' => true,
        ),
        array(
            'title' => 'Image Span',
            'block' => 'span',
            'classes' => 'img-span',
            'wrapper' => true,
        ),
        array(
            'title' => 'Also Like',
            'block' => 'span',
            'classes' => 'also-like',
            'wrapper' => true,
        ),
        array(
            'title' => 'Manual caption',
            'block' => 'span',
            'classes' => 'manual-caption',
            'wrapper' => true,
        ),
        array(
            'title' => 'Featured Side Title',
            'block' => 'span',
            'classes' => 'featured-side-title',
            'wrapper' => true,
        ),
        array(
            'title' => 'Barlow Text',
            'block' => 'span',
            'classes' => 'barlow',
            'wrapper' => true,
        ),
        array(
            'title' => 'Special Title',
            'block' => 'span',
            'classes' => 'special-title',
            'wrapper' => true,
        ),
        array(
            'title' => 'Extra Large Special Title',
            'block' => 'span',
            'classes' => 'xlrg-special-title',
            'wrapper' => true,
        ),
        array(
            'title' => 'Special Sub',
            'block' => 'span',
            'classes' => 'special-sub',
            'wrapper' => true,
        ),
        array(
            'title' => 'Fashion Title',
            'block' => 'span',
            'classes' => 'fashion-title',
            'wrapper' => true,
        ),
        array(
            'title' => 'Fashion Sub',
            'block' => 'span',
            'classes' => 'fashion-sub',
            'wrapper' => true,
        ),
        array(
            'title' => 'Fashion Sub Dark Link',
            'block' => 'span',
            'classes' => 'fashion-sub dark-link',
            'wrapper' => true,
        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );

    return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );

/* ========================================================================= */
/*  Remove the slug from published post permalinks. Only affect our CPT though.
/* ========================================================================= */

function vipx_remove_cpt_slug( $post_link, $post, $leavename ) {

    if ( ! in_array( $post->post_type, array( 'design', 'food', 'travel', 'special', 'style' ) ) || 'publish' != $post->post_status )
        return $post_link;

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'vipx_remove_cpt_slug', 10, 3 );

function vipx_parse_request_tricksy( $query ) {

    // Only noop the main query
    if ( ! $query->is_main_query() )
        return;

    // Only noop our very specific rewrite rule match
    if ( 2 != count( $query->query )
        || ! isset( $query->query['page'] ) )
        return;

    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) )
        $query->set( 'post_type', array( 'post', 'design', 'food', 'travel', 'special', 'style', 'page' ) );

}
add_action( 'pre_get_posts', 'vipx_parse_request_tricksy' );


/* ========================================================================= */
/* Limit length of excerpt */
/* ========================================================================= */
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

/* ========================================================================= */
/* Hey, Man, maybe don't resize them gifs */
/* ========================================================================= */

function disable_upload_sizes( $sizes, $metadata ) {

    // Get filetype data.
    $filetype = wp_check_filetype($metadata['file']);

    // Check if is gif.
    if($filetype['type'] == 'image/gif') {
        // Unset sizes if file is gif.
        $sizes = array();
    }

    // Return sizes you want to create from image (None if image is gif.)
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'disable_upload_sizes', 10, 2);


/* ========================================================================= */
/* Index authors in searchWP */
/* ========================================================================= */

function my_searchwp_extra_metadata( $extra_meta, $post_being_indexed ) {

    // available author meta: http://codex.wordpress.org/Function_Reference/get_the_author_meta

    // retrieve the author's name(s)
    $author_nicename      = get_the_author_meta( 'user_nicename', $post_being_indexed->post_author );
    $author_display_name  = get_the_author_meta( 'display_name', $post_being_indexed->post_author );
    $author_nickname      = get_the_author_meta( 'nickname', $post_being_indexed->post_author );
    $author_first_name    = get_the_author_meta( 'first_name', $post_being_indexed->post_author );
    $author_last_name     = get_the_author_meta( 'last_name', $post_being_indexed->post_author );

    // grab the author bio
    $author_bio           = get_the_author_meta( 'description', $post_being_indexed->post_author );

    // index the author name and bio with each post
    $extra_meta['my_author_meta_nicename']     = $author_nicename;
    $extra_meta['my_author_meta_display_name'] = $author_display_name;
    $extra_meta['my_author_meta_nickname']     = $author_nickname;
    $extra_meta['my_author_meta_first_name']   = $author_first_name;
    $extra_meta['my_author_meta_last_name']    = $author_last_name;
    $extra_meta['my_author_meta_bio']          = $author_bio;

    return $extra_meta;
}
add_filter( 'searchwp_extra_metadata', 'my_searchwp_extra_metadata', 10, 2 );

function my_searchwp_author_meta_keys( $keys )
{
    // the keys we used to store author meta (see https://gist.github.com/jchristopher/8558947 for more info)
    $my_custom_author_meta_keys = array(
        'my_author_meta_nicename',
        'my_author_meta_display_name',
        'my_author_meta_nickname',
        'my_author_meta_first_name',
        'my_author_meta_last_name',
        'my_author_meta_bio'
    );

    // merge my custom meta keys with the existing keys
    $keys = array_merge( $keys, $my_custom_author_meta_keys );

    // make sure there aren't any duplicates
    $keys = array_unique( $keys );

    return $keys;
}

add_filter( 'searchwp_custom_field_keys', 'my_searchwp_author_meta_keys', 10, 1 );

/* ========================================================================= */
/*   functions.php    */
/*   Use alm_query_args filter to pass data to SearchWP.   */
/*   https://connekthq.com/plugins/ajax-load-more/docs/filter-hooks/#alm_query_args  */
/* ========================================================================= */
function my_alm_query_args_searchwp($args){
   $engine = 'default'; // default = default
   $args = apply_filters('alm_searchwp', $args, $engine); // Make call to alm_searchwp filter
   return $args;
}
add_filter( 'alm_query_args_searchwp', 'my_alm_query_args_searchwp');



/* ========================================================================= */
/* SHORTCUT CODES */
/* ========================================================================= */
/*
function morelink( $atts, $content = null ) {
    extract( shortcode_atts( array(
        "link" => '',
        "target" => ''
    ), $atts ) );
    return '<a href="' . $link . '" class="button btn-read-more" target="' . $target . '">' . $content . '</a>';
}
add_shortcode( 'button', 'morelink' );
*/


/* ========================================================================= */
/* TINYMCE SELECT DROPDOWN CLASS SETUP CODES */
/* ========================================================================= */

/*
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );

function my_mce_before_init( $settings ) {

    $style_formats = array(
        array(
            'title' => 'Gray Box Button',
            'selector' => 'a',
            'classes' => 'box-link'
        )
    );

    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;

}
*/


/* ========================================================================= */
/* Add Classes to next_posts_link and prev_posts_link. */
/* ========================================================================= */
/*
add_filter( 'next_posts_link_attributes', 'posts_link_attributes' );
add_filter( 'previous_posts_link_attributes', 'posts_link_attributes' );

function posts_link_attributes() {
    return 'class="btn pink-purple"';
}
*/

/* ========================================================================= */
/* !CUSTOM CHILD SITE COLOR
    Add a custom color strip to the header for child sites on a multisite
    install. Helps differentiate them when jumping back and forth.
/* ========================================================================= */

/*add_action( 'admin_enqueue_scripts', 'my_admin_background' );
function my_admin_background() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom_script.css' );
    global $blog_id;
    $color = '';
    if ( 1 == $blog_id ) {
        $color = '#E1B13A';
    } elseif ( 2 == $blog_id ) {
        $color = '#BA273A';
    } elseif ( 3 == $blog_id ) {
        $color = '#BFD945';
    }
    $custom_css = "#wpadminbar { border-top: 5px solid $color }";
    wp_add_inline_style( 'custom-style', $custom_css );
}*/


/* ========================================================================= */
/* RELEVANSSI Add visible custom fields to the_excerpt when searching.
/* ========================================================================= */
/*
add_filter( 'relevanssi_excerpt_content', 'custom_fields_to_excerpts', 10, 3 );
function custom_fields_to_excerpts( $content, $post, $query ) {

        $custom_fields = get_post_custom_keys( $post->ID );
        $remove_underscore_fields = true;

        if ( is_array( $custom_fields ) ) {
            $custom_fields = array_unique( $custom_fields );
            foreach ( $custom_fields as $field ) {
                if ( $remove_underscore_fields ) {
                    if ( '_' == substr( $field, 0, 1 ) ) continue;
                }
                $values = get_post_meta( $post->ID, $field, false );
                if ( "" == $values ) continue;
                foreach ( $values as $value ) {
                    if ( !is_array ( $value ) ) {
                        $content .= " " . $value;
                    }
                }
            }
        }
    return $content;
}
*/
