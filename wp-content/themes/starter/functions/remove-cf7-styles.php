<?php
/**!
 * Remove CF7 Styles Call in Head
 */
function total_remove_cf7_styles() {
	wp_deregister_style('contact-form-7');
}
add_action('wp_print_styles', 'total_remove_cf7_styles');