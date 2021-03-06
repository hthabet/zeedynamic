<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package zeeDynamic
 */
 
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
		
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zeedynamic' ); ?></a>
		
		<div id="header-top" class="header-bar-wrap"><?php do_action( 'zeedynamic_header_bar' ); ?></div>
		
		<header id="masthead" class="site-header clearfix" role="banner">

			<?php if ( has_nav_menu( 'top-navigation' ) ) : ?>
			<div id="top-navigation-wrap">
				<?php 
						// Display Top navigation
						wp_nav_menu( array(
							'theme_location' => 'top-navigation', 
							'container' => false,
							'menu_class' => 'top-navigation-menu',  
							'echo' => true,
							'fallback_cb' => '')
						);
					?>
				<div class="clear"></div> 
			</div><!-- #top-navigation-wrap -->
			<?php endif; ?>

			<div class="header-main container clearfix">
						
				<div id="logo" class="site-branding clearfix">
				
					<?php zeedynamic_site_logo(); ?>
					<?php zeedynamic_site_title(); ?>
					<?php zeedynamic_site_description(); ?>

				</div><!-- .site-branding -->
				
				<div class="header-widgets clearfix">
					
					<?php // Display Header Widgets
					if( is_active_sidebar( 'header' ) ) : 
			
						dynamic_sidebar( 'header' );
						
					endif; ?>
					
				</div><!-- .header-widgets -->

			
			</div><!-- .header-main -->	

			<div id="main-navigation-wrap" class="primary-navigation-wrap">
			
				<nav id="main-navigation" class="primary-navigation navigation clearfix" role="navigation">
					<?php 
						// Display Main Navigation
						wp_nav_menu( array(
							'theme_location' => 'primary', 
							'container' => false, 
							'menu_class' => 'main-navigation-menu', 
							'echo' => true, 
							'fallback_cb' => 'zeedynamic_default_menu')
						);
					?>
				</nav><!-- #main-navigation -->
				
			</div>
		
		</header><!-- #masthead -->
		
		<?php zeedynamic_breadcrumbs(); ?>
		
		<div id="content" class="site-content container clearfix">
		
			<?php zeedynamic_header_image(); ?>