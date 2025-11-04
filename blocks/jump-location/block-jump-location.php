<?php
/**
 * Block Name: Jump Link
 *
 * The template for displaying the custom gutenberg block named Jump Link.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package DivsFlow Package
 * @since 1.0.0
 */

DivsFlow::block(
	$block,
	function ( $dfb_block_id, $dfb_block_name,$dfb_block_fields, $dfb_option_fields ) {

		// Block variables.
		$dfb_blkjmplctn_hashid = $dfb_block_fields['dfb_blkjmplctn_hashid'] ?? '';

		echo html_entity_decode( '<div class="theme-jumplink" id="' . $dfb_blkjmplctn_hashid . '"></div>' );

	}
);

