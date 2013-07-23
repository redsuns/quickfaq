<?php
/*
 * Plugin Name: Quick Faq
 * Description: This plugin provides an easy way to create your FAQs
 * Author: Redsuns Design e Tecnologia Web
 * Author URI: http://www.redsuns.com.br
 * Date: 2013-07-22
 * Version: 1.0
 */

require_once 'includes/faq.php';

/**
 * @since 1.0
 */
function quickfaq_custom_init()
{
    $args = array('public' => true, 'label' => 'Faq');
    register_post_type( 'faq', $args );
}
add_action( 'init', 'quickfaq_custom_init' );

/**
 * @since 1.0
 */
function faq()
{
    show_faq();
}
add_shortcode('faq', 'faq');

/*if ( !is_file('../wp-content/themes/' . get_template() . '/page-faq.php') ) {
    @copy('../wp-content/plugins/quickfaq/includes/page-faq.php', '../wp-content/themes/' . get_template() . '/page-faq.php');
}*/

/**
 * Turns the plugin localization
 */
function quickfaq_textdomain() {
  load_plugin_textdomain( 'quickfaq', false, plugin_dir_url( __FILE__ ) . '/languages/' ); 
}
add_action( 'plugins_loaded', 'quickfaq_textdomain' );

/**
 * Registers and Enqueues Styles and Scripts
 */
function quickfaq_scripts() {
	// Register style and script
	wp_register_style( 'quickfaq-style', plugin_dir_url( __FILE__ ) . '/includes/quickfaq.css' );
	wp_register_script( 'quickfaq-script', plugin_dir_url( __FILE__ ) . '/includes/quickfaq.js', array( 'jquery' ), false, true );
	
	// Enqueue style and script
	wp_enqueue_style( 'quickfaq-style' );
	wp_enqueue_script( 'quickfaq-script' );
}
add_action( 'wp_enqueue_scripts', 'quickfaq_scripts' );