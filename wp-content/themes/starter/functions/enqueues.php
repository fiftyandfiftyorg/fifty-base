<?php
/**!
 * Enqueues
 */

if ( ! function_exists('base_enqueues') ) {
	function base_enqueues() {

		// Styles
		wp_register_style('base-css', get_template_directory_uri() . '/assets/dist/css/style.css', false, null);
		wp_enqueue_style('base-css');

		wp_register_style('crucial-css', get_template_directory_uri() . '/assets/dist/css/custom-styles.css', false, null);
		wp_enqueue_style('crucial-css');

		// Scripts
		wp_register_script('jquery-3.6.0', 'https://code.jquery.com/jquery-3.6.0.min.js', false, '3.6.0', true);
		wp_enqueue_script('jquery-3.6.0');

		wp_register_script('base-js', get_template_directory_uri() . '/assets/src/js/scripts.js', false, null, true);
		wp_enqueue_script('base-js');

		wp_register_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', false, '2.3.1', true);
		wp_enqueue_script('aos-js');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'base_enqueues', 100);