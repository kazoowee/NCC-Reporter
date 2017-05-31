<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.uniqmarketing.co.uk
 * @since             1.0.0
 * @package           Ncc_Reporter
 *
 * @wordpress-plugin
 * Plugin Name:       NCC Reporter
 * Plugin URI:        www.uniqmarketing.co.uk
 * Description:       Tailored report generator for Nuclear Compliance
 * Version:           1.0.0
 * Author:            UNIQ Marketing & Design
 * Author URI:        www.uniqmarketing.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ncc-reporter
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ncc-reporter-activator.php
 */
function activate_ncc_reporter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ncc-reporter-activator.php';
	Ncc_Reporter_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ncc-reporter-deactivator.php
 */
function deactivate_ncc_reporter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ncc-reporter-deactivator.php';
	Ncc_Reporter_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ncc_reporter' );
register_deactivation_hook( __FILE__, 'deactivate_ncc_reporter' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ncc-reporter.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ncc_reporter() {

	$plugin = new Ncc_Reporter();
	$plugin->run();

}
run_ncc_reporter();
