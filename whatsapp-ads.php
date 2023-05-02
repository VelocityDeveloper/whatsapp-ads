<?php

/**
 *
 * @link              velocitydeveloper.com
 * @since             1.2.0
 * @package           whatsapp-ads
 *
 * @wordpress-plugin
 * Plugin Name:       Whatsapp Ads
 * Plugin URI:        velocitydeveloper.com
 * Description:       Plugin for velocitydeveloper client.
 * Version:           1.6.0
 * Author:            AVelocity Developer
 * Author URI:        velocitydeveloper.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       whatsapp-ads
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.6.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('WHATSAPP_ADS_VERSION', '1.6.0');

/**
 * Define plugin path url
 */
define('WHATSAPP_ADS_URL', plugin_dir_url(__FILE__));

/**
 * Add function
 */
// require_once plugin_dir_path(  __FILE__ ) . 'custom/custom.php';


$libs = array(
	'lib/tgmpa/class-tgm-plugin-activation.php',
);
$incs = array(
	'inc/enqueue.php',
    'inc/function.php',
	'inc/shortcode.php',
);

// foreach ($libs as $lib) {
// 	require_once plugin_dir_path(__FILE__) . $lib;
// }
foreach ($incs as $inc) {
	require_once plugin_dir_path(__FILE__) . $inc;
}