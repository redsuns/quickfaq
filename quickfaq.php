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
function codex_custom_init()
{
    $args = array('public' => true, 'label' => 'Faq');
    register_post_type('faq', $args);
}

add_action('init', 'codex_custom_init');


/**
 * @since 1.0
 */
function faq()
{
    show_faq();
}

add_shortcode('faq', 'faq');


if ( !is_file('../wp-content/themes/' . get_template() . '/page-faq.php') ) {
    @copy('../wp-content/plugins/quickfaq/includes/page-faq.php', '../wp-content/themes/' . get_template() . '/page-faq.php');
}
