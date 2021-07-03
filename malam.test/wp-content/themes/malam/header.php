<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @author  Yehuda raz
 * @package AppsFlyerTest
 * @since   1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<header id="masthead" class="site-header">
		
			<div class="nav-container">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="container nav-bar">
						<div class="site-nav">
							<div class="site-logo">
								<?php
									if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
    									the_custom_logo();
									} else {
									?> <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">לוגו חברה</a></h1><?php 
									}
								?>		
							</div>
							<div class="site-header_menu">								
								<?php echo MalamTest_header_menu()  ?>
							</div>
						</div>
					</div>
				</nav><!-- #site-navigation -->
			</div>
		

	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
