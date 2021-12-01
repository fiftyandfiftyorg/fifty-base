<?php
/**!
 * Remove CF7 JS Call in Footer ONLY to specific pages
 */
function total_remove_cf7_js() {
	if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
	   if ( !is_page('contact')) { //replace the slug if needed
		   wp_deregister_script('contact-form-7');
   		}	
	}
}
add_action('wp_print_scripts', 'total_remove_cf7_js');