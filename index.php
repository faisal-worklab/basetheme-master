<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DivsFlow Package
 * @since 1.0.0
 */

get_header();
	list( $dfb_var_post_id, $dfb_fields, $dfb_option_fields,$dfb_query_object ) = DivsFlow::defaults();

?>
<section id="hero-section" class="hero-section hero-section-default">
	<!-- Hero Start -->
	<div class="hero-single">
		<div class="wrapper">
		<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
		<p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
		</div>
	</div>
	<!-- Hero End -->
</section>
<section id="page-section" class="page-section">
	<div class="wrapper">
		<div class="<?php DivsFlow::have_post_class( 'three-columns' ); ?>">
			<!-- Content Start -->
			<?php $dfb_query = DivsFlow::query(); ?>
			<div class="ts-80"></div>
			<!-- Content End -->
		</div>
	</div>
</section>
<?php get_footer(); ?>
