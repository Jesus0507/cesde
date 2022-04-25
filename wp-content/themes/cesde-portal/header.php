<?php
/**
 * Theme Header.
 *
 * See also inc/template-parts/header.php.
 *
 * @package Page Builder Framework
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php wpbf_body_schema_markup(); ?>>

	<a class="screen-reader-text skip-link" href="#content" title="<?php echo esc_attr__( 'Skip to content', 'page-builder-framework' ); ?>"><?php _e( 'Skip to content', 'page-builder-framework' ); ?></a>
     
	<?php do_action( 'wp_body_open' ); ?>

	<?php do_action( 'wpbf_body_open' ); ?>

	<div id="container" class="hfeed wpbf-page">
	<div class="preheader-section">
			<div class="preheader-container">
			<div class="left-section">
				<?php
				echo do_shortcode( "[social-Link]" );
				?>
			</div>
			<div class="right-section">
			<?php get_template_part( 'inc/template-parts/preheader/preheader-menu' ); ?>
			<?php
				 get_template_part( 'inc/template-parts/preheader/search-component' );
			?>
			</div>
			</div>
		</div>
	<header  id="header-cesde" class="cesde-header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
		
		<div class="cesde-navigation header-desktop">
			<?php get_template_part( 'inc/template-parts/logo/logo' ) ?>
			<?php get_template_part( 'inc/template-parts/navigation/desktop-navigation' ) ?>
		</div>
		<div class="cesde-navigation header-mobile">
			<?php get_template_part( 'inc/template-parts/navigation/mobile-navigation' ) ?>
			<?php get_template_part( 'inc/template-parts/logo/logo-mobile' ) ?>
			<div class="mobilesearh">
				<button id="search-button" >
				<i class="fa-solid fa-magnifying-glass"></i>
				</button>
			</div>
		</div>
	</header>


