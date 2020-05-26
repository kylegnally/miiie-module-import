<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           MIIIE_Module_Import
 *
 * @wordpress-plugin
 * Plugin Name:       MIIIE Module Import
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       Plugin to import curriculum modules into a custom Module post type containing custom fields.
 * Version:           1.0.0
 * Author:            Kyle G. Nally
 * Author URI:        https://github.com/kylegnally
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       miiie-module-import
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_miiie-module-import() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-miiie-module-import-activator.php';
	MIIIE_Module_Import_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_miiie-module-import() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-miiie-module-import-deactivator.php';
	MIIIE_Module_Import_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_miiie-module-import' );
register_deactivation_hook( __FILE__, 'deactivate_miiie-module-import' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-miiie-module-import.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_miiie_module_import() {

	$plugin = new MIIIE_Module_Import();
	$plugin->run();

}
run_miiie-module-import();
