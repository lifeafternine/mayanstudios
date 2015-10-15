<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	$color_scheme  = twentyfifteen_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentyfifteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

	wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

	wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_scripts' );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';

function member_shortcode( $atts ) {
    ob_start();
    $output =  require ('includes/members.php');
    $output = ob_get_clean();
    return $output;
}
add_shortcode( 'Members', 'member_shortcode' );

add_action( 'init', 'etg_post_type' );
function etg_post_type() {

        register_post_type( 'etglaw_members',
    array(
      'labels' => array(
        'name' => __( 'Members' ),
        'singular_name' => __( 'Member' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array(
        'title',
        'thumbnail',
        'editor',
        'page-attributes', // (menu order, hierarchical must be true to show Parent option)
      )

    )
  );
}




function etg_ps_tabs( $current) {
    $tabs = array( 'section1' => 'Globals and Home Page', 'section2' => 'Page Fill',);
    echo '<div id="icon-themes" class="icon32"><br></div>';
    echo '<h2 class="nav-tab-wrapper">';
    foreach( $tabs as $tab => $name ){
        $class = ( $tab == $current ) ? ' nav-tab-active' : '';
        echo "<a class='nav-tab$class' href='?page=etg-parallax-silver&tab=$tab'>$name</a>";
    }
    echo '</h2>';
}

add_action('admin_menu', 'etg_parallax_silver');

function etg_parallax_silver() {

    add_menu_page(__('ETG Parallax Silver','etg-ps'), __('ETG Parallax Silver','etg-ps'), 'manage_options', 'etg-parallax-silver', 'etg_ps' );

}

function etg_ps() {
    //add additional css to overwrite admin css and add js for add media
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
wp_register_script('my-upload', get_stylesheet_directory_uri() .'/js/upload.js', array('jquery','media-upload','thickbox'));
wp_enqueue_script('my-upload');
wp_enqueue_style('thickbox');
wp_enqueue_style('my-style', get_stylesheet_directory_uri() .'/css/admin-styles.css', '');
wp_enqueue_style('my-style', get_stylesheet_directory_uri() .'/stylemedia1024max.css', '');
wp_enqueue_style('fontello-style', get_stylesheet_directory_uri() .'/fonts/fontello/css/fontello.css', '');
    //must check that the user has the required capability
    if (!current_user_can('manage_options'))
    {
      wp_die( __('You do not have sufficient permissions to access this page.') );
    }



if( isset($_POST[ 'section1' ]) && $_POST[ 'section1' ] == 'Y' ) {
        // Read their posted value
        $array = array(
					"sc_text",
				  "sc_phone",
				  "footer_disclaimer",
					"footer_address_1",
					"footer_address_2",
					"footer_email",
				  "home_banner_img",
				  "home_banner_title",
				  "home_banner_text",
					"home_bar1_img",
				  "home_bar1_text",
				  "home_bar1_url",
				  "home_bar2_img",
				  "home_bar2_text",
				  "home_bar3_url",
				  "home_bar3_img",
				  "home_bar3_text",
				  "home_bar3_url",
				  "home_primary_header",
				  "home_primary_body",
				  "home_secondary_header",
				  "home_secondary_body",
				  "home_carousel_header",
				  "home_carousel_slide1_body",
				  "home_carousel_slide1_footer",
				  "home_carousel_slide2_body",
				  "home_carousel_slide2_footer",
				  "home_carousel_slide3_body",
				  "home_carousel_slide3_footer",
				  "home_carousel_slide4_body",
				  "home_carousel_slide4_footer",
				  "contact_header",
				  "contact_body",
				  "contact_button_text",
					"pa_banner_img",
					"pa_banner_title",
					"pa_banner_text",
					"pa_primary_header",
					"pa_primary_body",
					"at_banner_img",
					"at_banner_title",
					"at_banner_text",
					"at_primary_header",
					"at_primary_body",
);

foreach ($array as $i => $value) {
    $$value = $_POST[ $value ];
    update_option( $value, $$value );
}

?>
<div class="updated"><p><strong><?php _e('Home Page settings saved.', 'menu-test' ); ?></strong></p></div>

<?php
}


// Section 2 Loop
if( isset($_POST[ 'section2' ]) && $_POST[ 'section2' ] == 'Y' ) {
        // Read their posted value
        $array = array(
					"pa_banner_img",
					"pa_banner_title",
					"pa_banner_text",
					"pa_primary_header",
					"pa_primary_body",
					"at_banner_img",
					"at_banner_title",
					"at_banner_text",
					"at_primary_header",
					"at_primary_body",
					"contact_banner_img",
					"contact_banner_title",
					"contact_banner_text",
					"contact_primary_header",
					"contact_primary_body",
);

foreach ($array as $i => $value) {
    $$value = $_POST[ $value ];
    update_option( $value, $$value );
}
?>
<div class="updated"><p><strong><?php _e('Page settings saved.', 'menu-test' ); ?></strong></p></div>

<?php
}

// Section 4 Loop
if( isset($_POST[ 'section3' ]) && $_POST[ 'section3' ] == 'Y' ) {
        // Read their posted value
        $array = array(
"whoweare_banner",
"whoweare_banner_text",
"wwb_header",
"wwb_subheader",
"wwb_statementbox1_header",
"wwb_statementbox1_text",
"wwb1_image",
"wwb1_text",
"wwb2_image",
"wwb2_text",
"wwb3_image",
"wwb3_text",
"wwb_statementbox2_header",
"wwb_statementbox2_text",
"wwb_testimonial1_image",
"wwb_testimonial1_text",
"wwb_testimonial1_attribution",
"wwb_testimonial1_header",
"wwb_testimonial1_body",

);


foreach ($array as $i => $value) {
    $$value = $_POST[ $value ];
    update_option( $value, $$value );
}
?>
<div class="updated"><p><strong><?php _e('Who We Are settings saved.', 'menu-test' ); ?></strong></p></div>

<?php
}

// Section 4 Loop
if( isset($_POST[ 'section4' ]) && $_POST[ 'section4' ] == 'Y' ) {
        // Read their posted value
        $array = array(
"seller_banner",
"seller_banner_text",
"seller_statementbox1_header",
"seller_statementbox1_text",
"seller_testimonial1_image",
"seller_testimonial1_text",
"seller_testimonial1_attribution",
"seller_testimonial1_name",
"seller_testimonial2_image",
"seller_testimonial2_text",
"seller_testimonial2_attribution",
"seller_testimonial2_name",
"seller_testimonial3_image",
"seller_testimonial3_text",
"seller_testimonial3_attribution",
"seller_testimonial3_name",
"seller_testimonial4_image",
"seller_testimonial4_text",
"seller_testimonial4_attribution",
"seller_testimonial4_name",
"seller_testimonial5_image",
"seller_testimonial5_text",
"seller_testimonial5_attribution",
"seller_testimonial5_name",
"seller_testimonial6_image",
"seller_testimonial6_text",
"seller_testimonial6_attribution",
"seller_testimonial6_name",

);


foreach ($array as $i => $value) {
    $$value = $_POST[ $value ];
    update_option( $value, $$value );
}
?>
<div class="updated"><p><strong><?php _e('Seller Stories settings saved.', 'menu-test' ); ?></strong></p></div>

<?php
}

// Section 4 Loop
if( isset($_POST[ 'section5' ]) && $_POST[ 'section5' ] == 'Y' ) {
        // Read their posted value
        $array = array(
"contact_banner",
"contact_banner_text",
"contact_statementbox1_header",
"contact_statementbox1_text",
"location1_image",
"location1_title",
"location1_address",
"location2_image",
"location2_title",
"location2_address",
"location3_image",
"location3_title",
"location3_address",
"location4_image",
"location4_title",
"location4_address",

);


foreach ($array as $i => $value) {
    $$value = $_POST[ $value ];
    update_option( $value, $$value );
}
?>
<div class="updated"><p><strong><?php _e('Contact Us settings saved.', 'menu-test' ); ?></strong></p></div>

<?php

    }

     if( isset($_POST[ 'headers' ]) && $_POST[ 'headers' ] == 'Y' ) {
        // Read their posted value
        $section5_text1 = $_POST[ 'section5_text1' ];
        $staff_header = $_POST[ 'staff_header' ];
        $ourstory_image = $_POST[ 'ourstory_image' ];
        $ourstory_text_body = $_POST[ 'ourstory_text_body' ];
        $ourstory_text_header = $_POST[ 'ourstory_text_header' ];
        $kidsatrisk_header = $_POST[ 'kidsatrisk_header' ];

        // Save the posted value in the database

        update_option( 'section5_text1', $section5_text1 );
        update_option( 'staff_header', $staff_header );
        update_option( 'ourstory_image', $ourstory_image );
        update_option( 'ourstory_text_body', $ourstory_text_body );
        update_option( 'ourstory_text_header', $ourstory_text_header );
        update_option( 'kidsatrisk_header', $kidsatrisk_header );
        // Put an settings updated message on the screen
?>
<div class="updated"><p><strong><?php _e('Headers settings saved.', 'menu-test' ); ?></strong></p></div>

<?php

    }

     if( isset($_POST[ 'donation' ]) && $_POST[ 'donation' ] == 'Y' ) {
        // Read their posted value
        $donation_header_1 = $_POST[ 'donation_header_1' ];
        $donation_body_1 = $_POST[ 'donation_body_1' ];
        $donation_header_2 = $_POST[ 'donation_header_2' ];
        $donation_body_2 = $_POST[ 'donation_body_2' ];
        $donation_button_1 = $_POST[ 'donation_button_1' ];
        $donation_button_2 = $_POST[ 'donation_button_2' ];
        $donation_button_3 = $_POST[ 'donation_button_3' ];
        $donation_button_4 = $_POST[ 'donation_button_4' ];
        $donation_button_5 = $_POST[ 'donation_button_5' ];
                $contactpage_text1 = $_POST[ 'contactpage_text1' ];
        $contactpage_text2 = $_POST[ 'contactpage_text2' ];
        $contactpage_phone = $_POST[ 'contactpage_phone' ];
        $contactpage_address = $_POST[ 'contactpage_address' ];
        // Save the posted value in the database

        update_option( 'donation_header_1', $donation_header_1 );
        update_option( 'donation_body_1', $donation_body_1 );
        update_option( 'donation_header_2', $donation_header_2 );
        update_option( 'donation_body_2', $donation_body_2 );
        update_option( 'donation_button_1', $donation_button_1 );
        update_option( 'donation_button_2', $donation_button_2 );
        update_option( 'donation_button_3', $donation_button_3 );
        update_option( 'donation_button_4', $donation_button_4 );
        update_option( 'donation_button_5', $donation_button_5 );
        update_option( 'contactpage_text1', $contactpage_text1 );
        update_option( 'contactpage_text2', $contactpage_text2 );
        update_option( 'contactpage_phone', $contactpage_phone );
        update_option( 'contactpage_address', $contactpage_address );

        // Put an settings updated message on the screen
?>
<div class="updated"><p><strong><?php _e('Donation settings saved.', 'menu-test' ); ?></strong></p></div>

<?php

    }

$array = array(
	"sc_text",
  "sc_phone",
  "footer_disclaimer",
	"footer_address_1",
	"footer_address_2",
	"footer_email",
  "home_banner_img",
  "home_banner_title",
  "home_banner_text",
	"home_bar1_img",
  "home_bar1_text",
  "home_bar1_url",
  "home_bar2_img",
  "home_bar2_text",
  "home_bar3_url",
  "home_bar3_img",
  "home_bar3_text",
  "home_bar3_url",
  "home_primary_header",
  "home_primary_body",
  "home_secondary_header",
  "home_secondary_body",
  "home_carousel_header",
  "home_carousel_slide1_body",
  "home_carousel_slide1_footer",
  "home_carousel_slide2_body",
  "home_carousel_slide2_footer",
  "home_carousel_slide3_body",
  "home_carousel_slide3_footer",
  "home_carousel_slide4_body",
  "home_carousel_slide4_footer",
  "contact_header",
  "contact_body",
  "contact_button_text",
	"contact_button_url",
	"pa_banner_img",
	"pa_banner_title",
	"pa_banner_text",
	"pa_primary_header",
	"pa_primary_body",
	"at_banner_img",
	"at_banner_title",
	"at_banner_text",
	"at_primary_header",
	"at_primary_body",
	"contact_banner_img",
	"contact_banner_title",
	"contact_banner_text",
	"contact_primary_header",
	"contact_primary_body",

);

foreach ($array as $i => $value) {

    $$value = stripslashes_deep( htmlentities(get_option($value)));
}

    // Now display the settings editing screen

    echo '<div class="wrap">';

    // header

    echo "<h2>" . __( 'ETG Parallax Silver', 'menu-test' ) . "</h2>";

    // settings form

if(!$_GET['tab']) $current = 'section1'; else $current = $_GET['tab'];
etg_ps_tabs($current);


    $pages = array( 'section1' => 'section1.php', 'section2' => 'section2.php', );
    foreach( $pages as $page => $name ){

    	if($current == $page) require ('admin/'.$name);

 //       echo "<a class='nav-tab$class' href='?page=etg-parallax-silver&tab=$tab'>$name</a>";
    }

}

function parse_array_to_global(){
	$array = array(
		"sc_text",
	  "sc_phone",
	  "footer_disclaimer",
		"footer_address_1",
		"footer_address_2",
		"footer_email",
	  "home_banner_img",
	  "home_banner_title",
	  "home_banner_text",
		"home_bar1_img",
	  "home_bar1_text",
	  "home_bar1_url",
	  "home_bar2_img",
	  "home_bar2_text",
	  "home_bar3_url",
	  "home_bar3_img",
	  "home_bar3_text",
	  "home_bar3_url",
	  "home_primary_header",
	  "home_primary_body",
	  "home_secondary_header",
	  "home_secondary_body",
	  "home_carousel_header",
	  "home_carousel_slide1_body",
	  "home_carousel_slide1_footer",
	  "home_carousel_slide2_body",
	  "home_carousel_slide2_footer",
	  "home_carousel_slide3_body",
	  "home_carousel_slide3_footer",
	  "home_carousel_slide4_body",
	  "home_carousel_slide4_footer",
	  "contact_header",
	  "contact_body",
	  "contact_button_text",
		"contact_button_url",
		"pa_banner_img",
		"pa_banner_title",
		"pa_banner_text",
		"pa_primary_header",
		"pa_primary_body",
		"at_banner_img",
		"at_banner_title",
		"at_banner_text",
		"at_primary_header",
		"at_primary_body",
		"contact_banner_img",
		"contact_banner_title",
		"contact_banner_text",
		"contact_primary_header",
		"contact_primary_body",

	);

	foreach ($array as $i => $value) {
	global $$value;
  $$value = stripslashes_deep( htmlentities(get_option($value)));
	}
}
