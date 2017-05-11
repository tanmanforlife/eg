<?php
/**
 * AdThrive Ads
 *
 * @package AdThrive Ads
 *
 * Plugin Name: AdThrive Ads
 * Plugin URI: http://www.adthrive.com
 * Description: AdThrive Ads
 * Version: 1.0.9
 * Author: AdThrive
 * Author URI: http://www.adthrive.com
 * License: GPL2
 *
 * Copyright (c) AdThrive LLC 2014-2017
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with This plugin. If not, see {License URI}.
 */

defined( 'ABSPATH' ) or die;

define( 'ADTHRIVE_ADS_VERSION', '1.0.9' );
define( 'ADTHRIVE_ADS_FILE', __FILE__ );
define( 'ADTHRIVE_ADS_PATH', plugin_dir_path( ADTHRIVE_ADS_FILE ) );
define( 'ADTHRIVE_ADS_URL', trailingslashit( plugin_dir_url( ADTHRIVE_ADS_FILE ) ) );

/**
 * Output the minimum PHP version error message
 */
function adthrive_ads_php_notice() {
	// @codingStandardsIgnoreStart
	echo '<div class="error"><p>' . __( 'AdThrive Ads requires PHP 5.3 or newer.', 'adthrive-ads' ) . '</p></div>';

	if ( isset( $_GET['activate'] ) ) {
		unset( $_GET['activate'] );
	}
	// @codingStandardsIgnoreEnd
}

/**
 * Deactivate this plugin
 */
function adthrive_ads_deactivate_self() {
	deactivate_plugins( plugin_basename( ADTHRIVE_ADS_FILE ) );
}

if ( version_compare( phpversion(), '5.3', '<' ) ) {
	add_action( 'admin_notices', 'adthrive_ads_php_notice' );

	add_action( 'admin_init', 'adthrive_ads_deactivate_self' );

	return;
} else {
	require_once( 'adthrive-ads-loader.php' );

	require_once( 'class-main.php' );
}
