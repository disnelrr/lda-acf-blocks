<?php
/**
 * Beans Specific Unit Tests
 *
 * @author    Maurice Tadros <maurice@bowriverstudio.com> & Disnel Rodriguez <disnelrr@gmail.com>
 * @copyright 2020 Maurice Tadros
 * @license   GPL v2 or later
 * @package UiKit
 *
 * Plugin Name: LDA ACF Blocks
 * Plugin URI: https://bowriverstudio.com
 * Description: Custom ACF Blocks for LD&A Site
 * Version: 0.0.1
 * Author: Maurice Tadros & Disnel Rodriguez
 * Author URI: https://www.bowriverstuio.com
 * Text Domain: beans-typography
 * Domain Path: /languages
 * Requires PHP: 7.0.x
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

define( 'LDABLOCKSDIR' , plugin_dir_path( __FILE__ ) );

/**
 * Class with onboarding definitions
 */
require_once LDABLOCKSDIR . 'ldaACFBlocks.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 * @return void
 */
function ldaACFBlocks_run_plugin() {
	$plugin = new ldaACFBlocks();
	$plugin->run();
}

ldaACFBlocks_run_plugin();
