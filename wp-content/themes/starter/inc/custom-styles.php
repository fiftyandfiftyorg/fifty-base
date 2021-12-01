<?php
//container styles
$max_desktop_width = get_field('max_desktop_width','options');
//header styles
$header_background_color = get_field('header_background_color','options'); 
$navigation_bar_background_color = get_field('navigation_bar_background_color','options'); 
$navigation_link_color = get_field('navigation_link_color','options'); 
$navigation_link_hover_color = get_field('navigation_link_hover_color','options'); 
$navigation_link_background_hover_color = get_field('navigation_link_background_hover_color','options'); 
$dropdown_menu_background_color = get_field('dropdown_menu_background_color','options'); 
$dropdown_menu_link_color = get_field('dropdown_menu_link_color','options'); 
$dropdown_menu_link_hover_color = get_field('dropdown_menu_link_hover_color','options'); 
$dropdown_menu_link_background_hover_color = get_field('dropdown_menu_link_background_hover_color','options');
//paddings
if( have_rows('header_padding','options') ):
    while( have_rows('header_padding','options') ): the_row(); 
        $header_padding_top = get_sub_field('header_padding_top');
        $header_padding_bottom = get_sub_field('header_padding_bottom');
        $header_padding_left = get_sub_field('header_padding_left');
        $header_padding_right = get_sub_field('header_padding_right');
    endwhile; 
endif;
if( have_rows('nav_padding','options') ):
    while( have_rows('nav_padding','options') ): the_row(); 
        $nav_padding_top = get_sub_field('nav_padding_top');
        $nav_padding_bottom = get_sub_field('nav_padding_bottom');
        $nav_padding_left = get_sub_field('nav_padding_left');
        $nav_padding_right = get_sub_field('nav_padding_right');
    endwhile; 
endif;
if( have_rows('menu_item_padding','options') ):
    while( have_rows('menu_item_padding','options') ): the_row(); 
        $nav_menu_item_padding_top = get_sub_field('nav_menu_item_padding_top');
        $nav_menu_item_padding_bottom = get_sub_field('nav_menu_item_padding_bottom');
        $nav_menu_item_padding_left = get_sub_field('nav_menu_item_padding_left');
        $nav_menu_item_padding_right = get_sub_field('nav_menu_item_padding_right');
    endwhile; 
endif;
if( have_rows('footer_padding','options') ):
    while( have_rows('footer_padding','options') ): the_row(); 
        $footer_padding_top = get_sub_field('footer_padding_top');
        $footer_padding_bottom = get_sub_field('footer_padding_bottom');
        $footer_padding_left = get_sub_field('footer_padding_left');
        $footer_padding_right = get_sub_field('footer_padding_right');
    endwhile; 
endif;
//global styles 
$h1_color = get_field('h1_color','options');
$h1_font_size = get_field('h1_font_size','options');
$h2_color = get_field('h2_color','options'); 
$h2_font_size = get_field('h2_font_size','options');
$h3_color = get_field('h3_color','options'); 
$h3_font_size = get_field('h3_font_size','options');
$h4_color = get_field('h4_color','options'); 
$h4_font_size = get_field('h4_font_size','options');
$h5_color = get_field('h5_color','options'); 
$h5_font_size = get_field('h5_font_size','options');
$h6_color = get_field('h6_color','options');
$h6_font_size = get_field('h6_font_size','options');
$body_copy_color = get_field('body_copy_color','options'); 
$link_color = get_field('link_color','options'); 
$button_background_color = get_field('button_background_color','options'); 
$button_link_color = get_field('button_link_color','options'); 
$button_background_hover_color = get_field('button_background_hover_color','options'); 
$button_link_hover_color = get_field('button_link_hover_color','options'); 
//footer styles
$footer_background_color = get_field('footer_background_color','options'); 
$footer_copy_color = get_field('footer_copy_color','options'); 
$footer_link_color = get_field('footer_link_color','options'); 
$footer_link_hover_color = get_field('footer_link_hover_color','options'); 
//fonts
$google_fonts_script = get_field('google_fonts_script','options');
$google_fonts_family_name = get_field('google_fonts_family_name','options');
?>
<?php if ($google_fonts_script):?><?php echo $google_fonts_script;?><?php endif;?>

<?php if ($google_fonts_family_name):?>
    * {
        <?php echo $google_fonts_family_name;?>
    }
<?php endif;?>
.max-width {width:100%;margin:auto;<?php if ($max_desktop_width):?>max-width:<?php echo $max_desktop_width;?>px;<?php endif;?>}
.block.fixed-width {<?php if ($max_desktop_width):?>max-width:<?php echo $max_desktop_width;?>px;<?php endif;?>}
.block-headline, .cms-content-container > p, .cms-content-container > span, .cms-content-container > em, .cms-content-container > ul, .cms-content-container > li, .cms-content-container > a, .cms-content-container > h1, .cms-content-container > h2, .cms-content-container > h3, .cms-content-container > h4, .cms-content-container > h5, .cms-content-container > h6 {
    <?php if ($max_desktop_width):?>max-width:<?php echo $max_desktop_width;?>px;<?php endif;?>
    margin-left: auto; 
    margin-right: auto;
}
h1 {<?php if ($h1_color):?>color:<?php echo $h1_color;?>;<?php endif;?><?php if ($h1_font_size):?>font-size:<?php echo $h1_font_size;?>;<?php endif;?>}
h2 {<?php if ($h2_color):?>color:<?php echo $h2_color;?>;<?php endif;?><?php if ($h2_font_size):?>font-size:<?php echo $h2_font_size;?>;<?php endif;?>}
h3 {<?php if ($h3_color):?>color:<?php echo $h3_color;?>;<?php endif;?><?php if ($h3_font_size):?>font-size:<?php echo $h3_font_size;?>;<?php endif;?>}
h4 {<?php if ($h4_color):?>color:<?php echo $h4_color;?>;<?php endif;?><?php if ($h4_font_size):?>font-size:<?php echo $h4_font_size;?>;<?php endif;?>}
h5 {<?php if ($h5_color):?>color:<?php echo $h5_color;?>;<?php endif;?><?php if ($h5_font_size):?>font-size:<?php echo $h5_font_size;?>;<?php endif;?>}
h6 {<?php if ($h6_color):?>color:<?php echo $h6_color;?>;<?php endif;?><?php if ($h6_font_size):?>font-size:<?php echo $h6_font_size;?>;<?php endif;?>}
body, body p, body span, body ul, body li, body em {<?php if ($body_copy_color):?>color:<?php echo $body_copy_color;?>;<?php endif;?><?php if ($body_copy_font_size):?>font-size:<?php echo $body_copy_font_size;?>;<?php endif;?>}
a {<?php if ($link_color):?>color:<?php echo $link_color;?>;<?php endif;?><?php if ($body_copy_font_size):?>font-size:<?php echo $body_copy_font_size;?>;<?php endif;?>}
button:not(.components-button) {padding:10px;<?php if ($button_link_color):?>color:<?php echo $button_link_color;?>;<?php endif;?><?php if ($button_background_color):?>background-color:<?php echo $button_background_color;?>;<?php endif;?>transition: .25s all ease-in-out;}
button:not(.components-button):hover {<?php if ($button_link_hover_color):?>color:<?php echo $button_link_hover_color;?>;<?php endif;?><?php if ($button_background_hover_color):?>background-color:<?php echo $button_background_hover_color;?>;<?php endif;?>}

header {
    <?php if ($header_background_color):?>background-color:<?php echo $header_background_color;?>;<?php endif;?> 
    padding:<?php echo $header_padding_top;?>px <?php echo $header_padding_right;?>px <?php echo $header_padding_bottom;?>px <?php echo $header_padding_left;?>px;
}
header > nav {
    <?php if ($navigation_bar_background_color):?>background-color:<?php echo $navigation_bar_background_color;?>;<?php endif;?> 
    padding:<?php echo $nav_padding_top;?>px <?php echo $nav_padding_right;?>px <?php echo $nav_padding_bottom;?>px <?php echo $nav_padding_left;?>px;
}
header > nav a {
    <?php if ($navigation_link_color):?>color:<?php echo $navigation_link_color;?>;<?php endif;?>
    <?php if ($navigation_bar_background_color):?>background-color:<?php echo $navigation_bar_background_color;?>;<?php endif;?>
    padding:<?php echo $nav_menu_item_padding_top;?>px <?php echo $nav_menu_item_padding_right;?>px <?php echo $nav_menu_item_padding_bottom;?>px <?php echo $nav_menu_item_padding_left;?>px;
}
header > nav a:hover {
    <?php if ($navigation_link_hover_color):?>color:<?php echo $navigation_link_hover_color;?>;<?php endif;?>
    <?php if ($navigation_link_background_hover_color):?>background-color:<?php echo $navigation_link_background_hover_color;?>!important;<?php endif;?>
}
header > nav > ul > li > ul > li > a {
    <?php if ($dropdown_menu_link_color):?>color:<?php echo $dropdown_menu_link_color;?>;<?php endif;?>
    <?php if ($dropdown_menu_background_color):?>background-color:<?php echo $dropdown_menu_background_color;?>!important;<?php endif;?>
}
header > nav > ul > li > ul > li > a:hover {
    <?php if ($dropdown_menu_link_hover_color):?>color:<?php echo $dropdown_menu_link_hover_color;?>;<?php endif;?>
    <?php if ($dropdown_menu_link_background_hover_color):?>background-color:<?php echo $dropdown_menu_link_background_hover_color;?>!important;<?php endif;?>
}
footer {
    <?php if ($footer_background_color):?>background-color:<?php echo $footer_background_color;?>;<?php endif;?>
    <?php if ($footer_copy_color):?>color:<?php echo $footer_copy_color;?>;<?php endif;?>
    padding:<?php echo $footer_padding_top;?>px <?php echo $footer_padding_right;?>px <?php echo $footer_padding_bottom;?>px <?php echo $footer_padding_left;?>px;
}
footer a {
    <?php if ($footer_link_color):?>color:<?php echo $footer_link_color;?>;<?php endif;?>
}
footer a:hover {
    <?php if ($footer_link_hover_color):?>color:<?php echo $footer_link_hover_color;?>;<?php endif;?>
}