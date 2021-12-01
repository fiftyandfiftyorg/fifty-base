
<?php
/*
 * Limits the gutenberg block availability to the core necessity
 */
function wpcc_allowed_block_types() {
	return array(
		'core/paragraph',
		'core/image',
        'core/freeform',
        'core/column',
        'core/columns',
        'core/html',
        'core/list',
        'core/shortcode',
        'core/separator',
        'core/spacer',
        'core/table',
        'core/video',
        'acf/post-loop',
        'acf/two-column-cta'
	);
}
add_filter( 'allowed_block_types', 'wpcc_allowed_block_types' );