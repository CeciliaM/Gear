<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">

		<div id="menu-top" class="top-bar">
			<div class='row container'>
			<div class="top-bar-left">
				<ul class="menu">
					<li><a href="#">FR</a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<ul class="menu">
					<?php wp_nav_menu( array( 'theme_location' => 'Menu-top-info' ) ); ?>
				</ul>
			</div>
		</div>
		</div>

		<div id="logo" class="row text-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory') ?>/assets/images/logo-gear.png" width="300"/></a>
		</div>

<!-- MON CODE -->
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<a class="menu-icon" type="button" data-toggle="mobile-menu"></a>
			<div class="title-bar-title">Menu</div>
		</div>

		<div class="top-bar">
			<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
				<div class='row container'>
					<div class="top-bar-left">
						<ul class="vertical medium-horizontal menu">
							<?php foundationpress_top_bar_r(); ?>

							<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
								<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
							<?php endif; ?>
						</ul>
					</div>
					<div class="top-bar-right">
						<ul class="vertical medium-horizontal menu">
							<?php dynamic_sidebar('Recherche'); ?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>


	<section class="container">

		<!-- // Injection slider my_slider_10 -->
		<?php do_action( 'foundationpress_after_header' );
