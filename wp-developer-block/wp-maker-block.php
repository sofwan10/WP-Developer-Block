<?php
/**
 * Plugin Name: WP Developer Block
 * Plugin URI:  https://github.com/sofwan10
 * Description: Adds a custom block to the Gutenberg editor.
 * Version:     1.0
 * Author:      Sofwan Rafiee
 * Author URI:  https://github.com/sofwan10
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-maker-block
 * Domain Path: /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function my_custom_block_init() {
  wp_register_script(
    'instagram-block',
    plugins_url( 'block.js', __FILE__ ),
	array( 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n', 'wp-editor' ),
    filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
  );

  register_block_type( 'my-plugin/instagram-block', array(
    'editor_script' => 'instagram-block',
  ) );
}
add_action( 'init', 'my_custom_block_init' );


