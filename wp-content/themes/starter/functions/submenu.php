<?php
/**!
 * Adding a submenu class
 */
function add_submenu_class($menu) {
	$menu = preg_replace('/ class="sub-menu"/','/ class="sub-menu nav-dropdown" /',$menu);  
	return $menu;  
}
add_filter('wp_nav_menu','add_submenu_class'); 