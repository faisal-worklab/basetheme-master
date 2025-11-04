<?php
/**
 * Block Name: Media Alongside Text
 *
 * The template for displaying the custom gutenberg block named Media Alongside Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package DivsFlow Package
 * @since 1.0.0
 */

DivsFlow::block(
	$block,
	function ( $dfb_block_id, $dfb_block_name, $dfb_block_fields, $dfb_option_fields ) {

		// Block variables.
		$dfb_var_blk_mat_title        = $dfb_block_fields['dfb_var_blk_mat_title'] ?? null;
		$dfb_var_blk_mat_text        = $dfb_block_fields['dfb_var_blk_mat_text'] ?? null;
		$dfb_var_blk_mat_button        = $dfb_block_fields['dfb_var_blk_mat_button'] ?? null;
		$dfb_var_blk_mat_image        = $dfb_block_fields['dfb_var_blk_mat_image'] ?? null;
		$dfb_var_blk_mat_img_location        = ("left" === $dfb_block_fields['dfb_var_blk_mat_img_location']) ? "image-at-left" : "image-at-right";
		?>

			<div class="iat-section two-columns justify-content-between align-items-center <?php echo $dfb_var_blk_mat_img_location; ?>">
				<div class="iat-image column" tabindex="0" role="img" aria-label="Image illustrating the content of this block">
					<?php if ( $dfb_var_blk_mat_image ) { ?>
						<?php DivsFlow::the_attachment_image( $dfb_var_blk_mat_image, 1000 ); ?>
					<?php } ?>
				</div>
				<div class="iat-text column">
					<?php if ( DivsFlow::is_block_title( $dfb_var_blk_mat_title ) ) { ?>
						<?php DivsFlow::the_block_title( $dfb_var_blk_mat_title, 'heading-2' ); ?>
					<?php } ?>
					<?php if ( $dfb_var_blk_mat_text ) {  ?>
						<?php echo html_entity_decode( $dfb_var_blk_mat_text ); ?>
					<?php } ?>
					<?php if ( $dfb_var_blk_mat_button ) { ?>
						<?php echo DivsFlow::button( $dfb_var_blk_mat_button, 'button' ); ?>
					<?php } ?>
				</div>
			</div>

		<?php
	}
);

