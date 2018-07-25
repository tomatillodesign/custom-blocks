<?php
/**
 * Plugin Name: Custom Blocks for Gutenberg
 * Plugin URI: https://github.com/ahmadawais/create-guten-block/
 * Description: custom-blocks — is a Gutenberg plugin created via create-guten-block.
 * Author: Chris Liu-Beers based on work by mrahmadawais, maedahbatool
 * Author URI: https://AhmadAwais.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
