<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * Please note that missing files will produce a fatal error.
 *
 * @package DivsFlow Package
 * @since 1.0.0
 */

if ( ! defined( 'DIVSFLOW_BLOCK_DIR' ) ) {
	define( 'DIVSFLOW_BLOCK_DIR', __DIR__ . '/blocks' );
}


if ( ! defined( 'DIVSFLOW_DEFAULT_IMAGE' ) ) {
	define( 'DIVSFLOW_DEFAULT_IMAGE', esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp' );
}


$dfb_folder_includes = dfb_includes( __DIR__ . '/includes/classes' );
/**
 * Checks if any file have error while including it.
 */
foreach ( $dfb_folder_includes as $dfb_folders ) {
	foreach ( $dfb_folders as $dfb_file ) {
		$dfb_filepath = locate_template( str_replace( __DIR__ . '/', '', $dfb_file ) );
		if ( file_exists( $dfb_filepath ) ) {
			require_once $dfb_filepath;
		} else {
			echo 'Unable to load configuration file ' . esc_html( basename( $dfb_file ) ) . ' please check file name in functions.php in your current active theme.';
		}
	}
}
/**
 * Get folder Dir
 *
 * @param string $directory Folder dir path.
 */
function dfb_includes( $directory ) {
	$folders = array();

	// Get all files and folders in the specified directory.
	$items = scandir( $directory );

	// Iterate through each item.
	foreach ( $items as $item ) {
		$full_path = $directory . '/' . $item;

		// Check if the item is a directory and not '.' or '..'.
		if ( is_dir( $full_path ) && '.' !== $item && '..' != $item ) {
			$folders[ $item ] = glob( __DIR__ . '/includes/classes/' . $item . '/*.php' );
		}
	}
	$folders['other'] = array(
		__DIR__ . '/includes/cpt.php',
		__DIR__ . '/includes/project.php',
	);

	return $folders;
}
