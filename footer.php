<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="title-holder">
		<div class="container">
			<h2>
				<span>asdwd</span>
			</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-11"></div>
			</div>
		</div>
	</div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

