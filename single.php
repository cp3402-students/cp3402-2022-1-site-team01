<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row">

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					include 'content-single.php';
					understrap_post_nav();

				}
				?>

			</main><!-- #main -->

		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #single-wrapper -->

<?php
get_footer();
