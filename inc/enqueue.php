<?php

/**
 *
 * @link              velocitydeveloper.com
 * @since             1.2.0
 * @package           whatsapp-ads
 *
 **/

function plugins_enqueue_styles()
{
  wp_enqueue_style('whatsapp-ads-style', WHATSAPP_ADS_URL . 'src/css/style.css', array(), '1.6.0', 'all');

  wp_enqueue_script('jQuery');
  wp_enqueue_script('lazy-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.11/jquery.lazy.min.js', array(), '1.6.0', true);
  wp_enqueue_script('whatsapp-ads-script', WHATSAPP_ADS_URL . 'src/js/script.js', array(), '1.6.0', true);

  wp_add_inline_style('whatsapp-ads-style', get_theme_mod('custom_code_css'));
  wp_add_inline_script('whatsapp-ads-script', get_theme_mod('custom_code_js'));

  wp_localize_script('whatsapp-ads-script', 'whatsapp-ads', array(
    'ajaxurl' => admin_url('admin-ajax.php')
  ));
}
add_action('wp_enqueue_scripts', 'plugins_enqueue_styles', 20);