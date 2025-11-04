<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package DivsFlow Package
 * @since 1.0.0
 */

list($dfb_var_author_avatar,$dfb_var_author_name) = DivsFlow::get_author_data( get_the_ID() );

// Post Tags & Categories.
$dfb_var_post_tag = get_the_tags( get_the_ID() );

?>


<div class="post-box-meta d-flex justify-content-between">
	<div class="post-date">
		<?php the_time( DIVSFLOW_PROJECT_DTFORMAT ); ?>
	</div>
	<?php if ( $dfb_var_post_tag ) { ?>
		<div class="ac-post-cat">
		<?php foreach ( $dfb_var_post_tag as $dfb_var_category ) { ?>
			<a href="<?php echo esc_url( get_category_link( $dfb_var_category ) ); ?>"><?php echo esc_html( $dfb_var_category->name ); ?></a>
		<?php } ?>
		</div>
	<?php } ?>
</div>
