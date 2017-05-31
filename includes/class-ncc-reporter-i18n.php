<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.uniqmarketing.co.uk
 * @since      1.0.0
 *
 * @package    Ncc_Reporter
 * @subpackage Ncc_Reporter/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ncc_Reporter
 * @subpackage Ncc_Reporter/includes
 * @author     UNIQ Marketing & Design <jacob@uniqmarketing.co.uk>
 */
class Ncc_Reporter_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ncc-reporter',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
