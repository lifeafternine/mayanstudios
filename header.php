<?php
/**
* The template for displaying the header
*
* Displays all of the head element and everything up until the "site-content" div.
*
* @package WordPress
* @subpackage Twenty_Fifteen
* @since Twenty Fifteen 1.0
*/
parse_array_to_global();
$array = array(
	"sc_text",
  "sc_phone",
);

foreach ($array as $i => $value) {

  $$value = stripslashes_deep(get_option( $value ));
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Rulsky Law Group</title>
	<meta name="description" content="...">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/fontello/css/fontello.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/styles.css" rel="stylesheet" type="text/css">
	<script>document.documentElement.className += ' js';</script><!--[if gt IE 9]><!-->
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><!--<![endif]-->
		<?php wp_head(); ?>
	</head>

	<body itemscope itemtype="http://schema.org/WebPage" class="is-loading page-index">
		<div class="l-page">
			<header class="l-header">
				<div class="l-constrained"><a href="/" class="site-logo">
					<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt=""><span class="element-invisible">Website Name</span></h1></a><a href="tel:+1-888-888-8888" class="schedule-consultation"><span class="title"><?php echo $sc_text;?></span><span class="phone"><?php echo $sc_phone;?></span></a></div>
				</header>
				<input id="main-menu-toggle" type="checkbox" class="layout-toggle-checkbox">
				<nav class="l-nav fixedsticky">
					<label for="main-menu-toggle">
						<h2><span><span class="element-invisible">Main</span> Menu</span><i class="icon-menu"></i></h2><span class="close"><span></span><i class="icon-cancel"></i></span>
					</label>
					<div class="l-constrained">
						<?php wp_nav_menu( $args ); ?>
					</div>
				</nav>
