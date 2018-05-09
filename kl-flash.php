<?php
/*
Plugin Name: KL Flash
Plugin URI: https://github.com/educate-sysadmin/kl-flash
Description: Wordpress plugin to show php variable $KL_FLASH for administrators using shortcode (for instrumentation/debugging)
Version: 0.1
Author: b.cunningham@ucl.ac.uk
Author URI: https://educate.london
License: GPL2
*/

function kl_flash_shortcode( $atts, $content = null ) {
    global $KL_FLASH;
	if (current_user_can('administrator')) {
        if (isset($KL_FLASH)) {
            return $KL_FLASH;
        }
    }
}

add_shortcode( 'kl_flash', 'kl_flash_shortcode' );
