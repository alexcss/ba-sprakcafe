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
	<?php $responsiveToggleId = get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ? 'mobile-menu' : 'site-navigation' ?>
	<header id="masthead" class="site-header" >
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<div class="title-bar-left">
			<!-- BEGIN menu  -->
			<div class="menu">
				<?php do_action('wpml_add_language_selector'); ?>
			</div>
			<!-- END menu -->
			</div>
			<div class="title-bar-right">
				<button class="menu-icon" type="button" data-toggle="<?php echo $responsiveToggleId ?>"></button>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar">
			<div class="row column">
				<div class="top-bar-left">

					<?php foundationpress_top_bar_r(); ?>

					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
				<div class="top-bar-right">
				<!-- For language selector -->
				<!-- BEGIN menu  -->
				<div class="menu">
					<?php do_action('wpml_add_language_selector'); ?>
				</div>
				<!-- END menu -->
				</div>
			</div>
		</nav>
	</header>

	<?php get_template_part( 'template-parts/page-intro' ); ?>
