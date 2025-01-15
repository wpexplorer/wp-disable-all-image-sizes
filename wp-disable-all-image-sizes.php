<?php
/**
 * Plugin Name:       WP Disable All Image Sizes
 * Plugin URI:        https://github.com/wpexplorer/wp-disable-all-image-sizes
 * Description:       Disables all image sizes to preven extra images from being created and stored on the server when uploading new images.
 * Version:           1.0
 * Requires at least: 6.6
 * Requires PHP:      8.0
 * Author:            WPExplorer
 * Author URI:        https://www.wpexplorer.com/
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       wp-disable-all-image-sizes
 * Update URI:         false
 */

/*
WP Disable All Image Sizes is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.

WP Disable All Image Sizes is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with WP Disable All Image Sizes. If not, see https://www.gnu.org/licenses/gpl-3.0.html.
*/

/**
 * Prevent direct access to this file.
 */
defined( 'ABSPATH' ) || exit;

/**
 * Disable the big image size threshold.
 */
add_filter( 'big_image_size_threshold', '__return_false' );

/**
 * Return false for image_resize_dimensions().
 */
add_filter( 'image_resize_dimensions', '__return_false' );

/**
 * Return an empty list of image sizes to generate on upload.
 */
add_filter( 'intermediate_image_sizes_advanced', '__return_empty_array' );
