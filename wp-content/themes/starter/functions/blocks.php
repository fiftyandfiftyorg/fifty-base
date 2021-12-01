
<?php
/*
 * Adds Custom Blocks - Project Agnostic (i.e. Carousel slider, etc.)
 */

 /*
 * Include main stylesheet in blocks area of admin
 */

add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_style( 'base-css', get_stylesheet_directory_uri() . "/assets/dist/css/style.css", false, null);
    wp_enqueue_style( 'crucial-css', get_stylesheet_directory_uri() . "/assets/dist/css/custom-styles.css", false, null);
} );

/*
 * Initial Block Construction
*/

function register_acf_blocks() {
    acf_register_block(array(
        'name'              => 'post-loop',
        'title'             => __('Post Loop'),
        'description'       => __('Display a list of all posts or custom post types on your page.'),
        'render_template'   => 'inc/blocks/content-block-post-loop.php',
        'icon'              => 'grid-view',
        'keywords'          => array( 'post loop', 'post group', 'posts' )
    ));

    acf_register_block(array(
        'name'              => 'two-column-cta',
        'title'             => __('Two Column CTA'),
        'description'       => __('Display a customizable, two column CTA on your page.'),
        'render_template'   => 'inc/blocks/content-block-two-column-cta.php',
        'icon'              => 'align-pull-left',
        'keywords'          => array( 'two column', 'cta', 'custom' )
    ));

    acf_register_block(array(
        'name'              => 'carousel-slider',
        'title'             => __('Carousel Slider'),
        'description'       => __('Display a customizable slider on your page.'),
        'render_template'   => 'inc/blocks/content-block-carousel-slider.php',
        'icon'              => 'embed-photo',
        'keywords'          => array( 'carousel', 'slider', 'custom' )
    ));
 }
 if( function_exists('acf_register_block') ) {
    add_action('acf/init', 'register_acf_blocks');
 }

/*
 *  Post Loop Block Configuration - Dynamically update select to display all custom post type options - make sure this acf field exists! and is named "select_post_type"
*/
add_filter('acf/load_field/name=select_post_type', 'bt_acf_load_post_types');

function bt_acf_load_post_types( $field ) {
    $choices = get_post_types( array( 'show_in_nav_menus' => true, 'public'   => true), 'objects' );
    foreach ( $choices as $post_type ) :
        $field['choices'][$post_type->name] = $post_type->labels->singular_name;
    endforeach;
    return $field;
}