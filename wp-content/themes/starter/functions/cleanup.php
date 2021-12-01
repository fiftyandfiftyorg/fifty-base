<?php
/*
 * Cleanup
 */

// Less stuff in <head>

if ( ! function_exists('total_cleanup_head') ) {
  function total_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
	  remove_action('wp_print_styles', 'print_emoji_styles');
	  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  }
}
add_action('init', 'total_cleanup_head');

// Show less info to users on failed login for security.
// (Will not let a valid username be known.)

if ( ! function_exists('show_less_login_info') ) {
  function show_less_login_info() {
      return "<strong>ERROR</strong>: Stop guessing!";
  }
}
add_filter( 'login_errors', 'show_less_login_info' );

// Do not generate and display WordPress version

if ( ! function_exists('total_remove_generator') ) {
  function total_remove_generator()  {
    return '';
  }
}
add_filter( 'the_generator', 'no_generator' );

// Remove Query Strings From Static Resources

if ( ! function_exists('total_remove_script_version') ) {
  function total_remove_script_version( $src ) {
    $parts = explode( '?', $src );
    return $parts[0];
  }
}
add_filter( 'script_loader_src', 'total_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'total_remove_script_version', 15, 1 );
//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');

//Remove oEmbed script
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
 }
 add_action( 'wp_footer', 'my_deregister_scripts' );

//Remove AdminBar Inline CSS
//add_filter( 'show_admin_bar', '__return_false' );

//Remove Recent Comments Inline CSS
add_filter( 'show_recent_comments_widget_style', function() { return false; });
