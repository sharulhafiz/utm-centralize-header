<?php
/*
Plugin Name: UTM Header & Footer
Plugin URI: http://www.utm.my/dev
Description: Apply Universiti Teknologi Malaysia (UTM) utmQuery to the current page.
Author: Web Unit, UTM
Version: 0.6
Author URI: http://www.utm.my/webteam
*/

function utm_query() {
	wp_enqueue_script ('utm_header_footer', 'http://www.utm.my/dev/utmQuery.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts','utm_query');
?>
