<?php

/**
 * Plugin Name:       Aloha Blocks CTA - Long Desc Stacked Images
 * Description:       CTA for Aloha theme with Long description and stacked images.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       alohablocks-cta-long-desc-stacked-image
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function alohablocks_cta_long_desc_stacked_image_init()
{
	register_block_type(__DIR__ . '/build');
}
add_action('init', 'alohablocks_cta_long_desc_stacked_image_init');
