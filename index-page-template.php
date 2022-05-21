<?php
/**
 * Template Name: Index page template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="home-banner">
    <h1>22 May Love 4 Swing</h1>
    <h2> Terra Grimard on Keys and Vocals, Andrew Dajski on Trumpet, 
		Bob Passmore on Sax, Doug Lye on Drums</h2>
	<a href="http://54.79.204.77/jazztownsville/sign-up/" class="join-btn">Join now!</a>
</div>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

			</main><!-- #main -->


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php

get_footer();