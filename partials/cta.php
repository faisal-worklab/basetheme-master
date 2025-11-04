<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package DivsFlow Package
 * @since 1.0.0
 */

list( $dfb_var_post_id, $dfb_fields, $dfb_option_fields, $dfb_queried_object ) = DivsFlow::defaults();

$dfb_var_to_cta_headline = $dfb_option_fields['dfb_var_to_cta_headline'] ?? null;

$dfb_var_page_cta_pagevisibility = $dfb_fields['dfb_var_page_cta_pagevisibility'] ?? null;
$dfb_var_ftrcta_headline         = $dfb_fields['dfb_var_page_cta_headline'] ?? $dfb_var_to_cta_headline;
?>

<section id="cta-section" class="cta-section">
	<!-- cta Start -->
	<div class="cta-single">
		<div class="wrapper">
			<h4><?php echo esc_html( $dfb_var_ftrcta_headline ); ?></h4>
		</div>
	</div>
	<!-- cta End -->
</section>
