<?php
/*
Split up all functions
*/
//The basics
require get_template_directory() . '/functions/cleanup.php';
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/author-bio.php';
//Custom + Modular stuff
require get_template_directory() . '/functions/submenu.php';
require get_template_directory() . '/functions/acf.php';
require get_template_directory() . '/functions/gutenberg.php';
require get_template_directory() . '/functions/blocks.php';
require get_template_directory() . '/functions/custom-css.php';
//require get_template_directory() . '/functions/deregister-cf7-js.php';
//require get_template_directory() . '/functions/remove-cf7-styles.php';
//require get_template_directory() . '/functions/remove-gutenberg-styles.php';
//require get_template_directory() . '/functions/single-split-pagination.php';

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
