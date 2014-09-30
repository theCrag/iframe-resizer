<?php
/**
 * Plugin Name: WP iframe-resizer
 * Description: Test WordPress wrapper plugin for David Bradshaw's iframe-resizer: https://github.com/davidjbradshaw/iframe-resizer
 * Version: 1.0
 * Author: Simon Dale
 * License: MIT license
 *
 */

function wp_iframe_resizer_scripts() {
 wp_register_script('iframe_resizer',plugins_url('/js/iframeResizer.min.js',__FILE__),array('jquery'),'2.6.1');
 wp_enqueue_script('iframe_resizer');
 wp_enqueue_script('iframe_resizer_initialise',plugins_url('js/iframeResizer.initialise.js',__FILE__),array('iframe_resizer'));
}
add_action('wp_enqueue_scripts','wp_iframe_resizer_scripts');

?>
