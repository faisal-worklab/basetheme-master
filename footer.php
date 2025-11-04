<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DivsFlow Package
 * @since 1.0.0
 */

list( $dfb_var_post_id, $dfb_fields, $dfb_option_fields ) = DivsFlow::defaults();
// Default Footer Options.
$dfb_var_footer_scripts = $dfb_option_fields['footer_scripts'] ?? '';



// Schema Markup - ACF variables.
$dfb_var_schema_check = $dfb_option_fields['dfb_var_schema_check'] ?? null;
if ( $dfb_var_schema_check ) {
	$dfb_var_schema_business_name       = $dfb_option_fields['dfb_var_schema_business_name'] ?? null;
	$dfb_var_schema_business_legal_name = $dfb_option_fields['dfb_var_schema_business_legal_name'] ?? null;
	$dfb_var_schema_street_address      = $dfb_option_fields['dfb_var_schema_street_address'] ?? null;
	$dfb_var_schema_locality            = $dfb_option_fields['dfb_var_schema_locality'] ?? null;
	$dfb_var_schema_region              = $dfb_option_fields['dfb_var_schema_region'] ?? null;
	$dfb_var_schema_postal_code         = $dfb_option_fields['dfb_var_schema_postal_code'] ?? null;
	$dfb_var_schema_map_short_link      = $dfb_option_fields['dfb_var_schema_map_short_link'] ?? null;
	$dfb_var_schema_latitude            = $dfb_option_fields['dfb_var_schema_latitude'] ?? null;
	$dfb_var_schema_longitude           = $dfb_option_fields['dfb_var_schema_longitude'] ?? null;
	$dfb_var_schema_opening_hours       = $dfb_option_fields['dfb_var_schema_opening_hours'] ?? null;
	$dfb_var_schema_telephone           = $dfb_option_fields['dfb_var_schema_telephone'] ?? null;
	$dfb_var_schema_business_email      = $dfb_option_fields['dfb_var_schema_business_email'] ?? null;
	$dfb_var_schema_business_logo       = $dfb_option_fields['dfb_var_schema_business_logo'] ?? null;
	$dfb_var_schema_price_range         = $dfb_option_fields['dfb_var_schema_price_range'] ?? null;
	$dfb_var_schema_type                = $dfb_option_fields['dfb_var_schema_type'] ?? null;
}
// Custom - ACF variables.

$dfb_var_ftrop_title     = $dfb_option_fields['dfb_var_ftrop_title'] ?? null;
$dfb_var_ftrop_text      = $dfb_option_fields['dfb_var_ftrop_text'] ?? null;
$dfb_var_ftrop_copyright = $dfb_option_fields['dfb_var_ftrop_copyright'] ?? null;
$dfb_var_social_profiles = $dfb_option_fields['dfb_var_social_profiles'] ?? null;

?>
<?php get_template_part( 'partials/cta' ); ?>
</main>
<footer id="footer-section" class="footer-section">
	<!-- Footer Start -->
	<div class="footer-ctn">
		<div class="wrapper">

			<div class="footer-widgets d-flex justify-content-between flex-wrap">
				<div class="single-widget">
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/site-logo.svg"
								alt="Logo" />
						</a>
					</div>
					<?php if ( $dfb_var_ftrop_title ) { ?>
					<h5><?php echo html_entity_decode( $dfb_var_ftrop_title ); ?></h5>
					<?php } ?>
					<?php if ( $dfb_var_ftrop_text ) { ?>
					<div class="address"><?php echo html_entity_decode( $dfb_var_ftrop_text ); ?></div>
					<?php } ?>
					<div class="social-icons d-flex">
						<?php DivsFlow::the_social_icons( $dfb_var_social_profiles ); ?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-one',
									'fallback_cb'    => 'DivsFlow::nav_fallback',
								)
							);
							?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-two',
									'fallback_cb'    => 'DivsFlow::nav_fallback',
								)
							);
							?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-three',
									'fallback_cb'    => 'DivsFlow::nav_fallback',
								)
							);
							?>
					</div>
				</div>
			</div>
			<div class="gl-s72"></div>
			<div class="footer-bottom d-flex align-items-center justify-content-between">
				<?php if ( $dfb_var_ftrop_copyright ) { ?>
				<div class="copy-right"><?php echo esc_html( $dfb_var_ftrop_copyright ); ?></div>
				<?php } ?>
				<div class="legal-nav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'legal-nav',
								'fallback_cb'    => 'DivsFlow::nav_fallback',
							)
						);
						?>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->
	<?php
	if ( $dfb_var_schema_check ) {
		?>
	<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "<?php echo esc_html( $dfb_var_schema_type ); ?>",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?php echo esc_html( $dfb_var_schema_locality ); ?>",
			"addressRegion": "<?php echo esc_html( $dfb_var_schema_region ); ?>",
			"postalCode": "<?php echo esc_html( $dfb_var_schema_postal_code ); ?>",
			"streetAddress": "<?php echo esc_html( $dfb_var_schema_street_address ); ?>"
		},
		"hasMap": "<?php echo esc_html( $dfb_var_schema_map_short_link ); ?>",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "<?php echo esc_html( $dfb_var_schema_latitude ); ?>",
			"longitude": "<?php echo esc_html( $dfb_var_schema_longitude ); ?>"
		},
		"name": "<?php echo esc_html( $dfb_var_schema_business_name ); ?>",
		"openingHours": "<?php echo esc_html( $dfb_var_schema_opening_hours ); ?>",
		"telephone": "<?php echo esc_html( $dfb_var_schema_telephone ); ?>",
		"email": "<?php echo esc_html( $dfb_var_schema_business_email ); ?>",
		"url": "<?php echo esc_url( home_url() ); ?>",
		"image": "<?php echo esc_html( $dfb_var_schema_business_logo ); ?>",
		"legalName": "<?php echo esc_html( $dfb_var_schema_business_legal_name ); ?>",
		"priceRange": "<?php echo esc_html( $dfb_var_schema_price_range ); ?>"
	}
	</script> <?php } ?>
</footer>
<?php wp_footer(); ?>
<?php
if ( '' !== $dfb_var_footer_scripts ) {
	?>
<div style="display: none;">
	<?php echo html_entity_decode( $dfb_var_footer_scripts, ENT_QUOTES ); ?>
</div>
<?php } ?>
</body>

</html>
