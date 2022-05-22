<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<div class="top-header-holder">	
			<div class="container">
			 	<div class="row">
					<div class="col-4">
							<div class="logo-holder">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jazz-logo.png" 
								alt="Jazz Townsville Logo" width="250px">
							</div>
					</div>

					<div class="col-5">
						<div class="reservation">
							<div class="contact-holder">
								<div class="phone">
									<i class="fa fa-phone"> 0431618618</i>
								</div>
								<div class="address">
									<i class='fa fa-map-marker'> 334 Flinders St, Townsville QLD 4810</i>
								</div>																							
								<div class="tablet-social-media">
									<a href="https://www.facebook.com/tsvjazzclub"><i class="fa fa-facebook-square fa-3x"></i></a>
									<a href="townsvillejazz@icloud.com"><i class="fa fa-envelope-square fa-3x"></i></a>		
								</div>						
							</div>
							<a href="http://54.79.204.77/jazztownsville/events/" class="booking-btn">Book Now!</a>
						</div>
					</div>

					<div class="col-3">
						<div class="social-media">
							<a href="https://www.facebook.com/tsvjazzclub"><i class="fa fa-facebook-square fa-3x"></i></a>
							<a href="townsvillejazz@icloud.com"><i class="fa fa-envelope-square fa-3x"></i></a>		
						</div>
					</div>
				</div>
			</div>
		</div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		
		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar end -->
