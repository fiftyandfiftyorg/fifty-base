<?php
/**
 * Default Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'fp-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'tc';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

/****************************************
 * Custom Block Values
****************************************/
$global_block_width = get_field('global_block_width');
$custom_width = get_field('custom_width');

if( have_rows('block_padding') ):
    while( have_rows('block_padding') ): the_row(); 
        $padding_top        = get_sub_field('padding_top');
        $padding_right      = get_sub_field('padding_right');
        $padding_bottom     = get_sub_field('padding_bottom');
        $padding_left       = get_sub_field('padding_left');
    endwhile; 
endif;

if( have_rows('block_margin') ):
    while( have_rows('block_margin') ): the_row(); 
        $margin_top         = get_sub_field('margin_top');
        $margin_right       = get_sub_field('margin_right');
        $margin_bottom      = get_sub_field('margin_bottom');
        $margin_left        = get_sub_field('margin_left');
    endwhile; 
endif;

/****************************************
 * Custom Block Values
****************************************/
$acf_name                   = get_field('acf_name');


/* aos animations per block. works but also hides it in CMS editor so dont have a fix yet
$animate = get_field('animate');
$animation_type = get_field('animation_type');
$animation_offset = get_field('animation_offset');
$animation_anchor_placement = get_field('animation_anchor_placement');
$animate_once = get_field('animate_once');
*/

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> general-block p-relative">
    <div class="block block-block-name <?php echo $global_block_width;?>" 
    style="<?php if($global_block_width=='custom-width'):?>max-width:<?php echo $custom_width;?>px;<?php endif;?>
    <?php if($padding_top):?>padding-top:<?php echo $padding_top;?>;<?php endif;?>
    <?php if($padding_right):?>padding-right:<?php echo $padding_right;?>;<?php endif;?>
    <?php if($padding_bottom):?>padding-bottom:<?php echo $padding_bottom;?>;<?php endif;?>
    <?php if($padding_left):?>padding-left:<?php echo $padding_left;?>;<?php endif;?>
    <?php if($margin_top):?>margin-top:<?php echo $margin_top;?>;<?php endif;?>
    <?php if($margin_right):?>margin-right:<?php echo $margin_right;?>;<?php endif;?>
    <?php if($margin_bottom):?>margin-bottom:<?php echo $margin_bottom;?>;<?php endif;?>
    <?php if($margin_left):?>margin-left:<?php echo $margin_left;?>;<?php endif;?>
    " 
    
    <?php if($animate == 'yes'):?>
        data-aos="<?php echo $animation_type;?>" 
        data-aos-anchor-placement="<?php echo $animation_anchor_placement;?>"
        <?php if($animation_offset):?> data-aos-offset="<?php echo $animation_offset;?>"<?php endif;?>
        <?php if($animate_once):?> data-aos-once="<?php echo $animate_once;?>"<?php endif;?>
    <?php endif;?>>

        <!-- Block Content Goes Here -->
        <div class="block-content">
        <?php

            if( have_rows('repeater_field_name') ):

                while ( have_rows('repeater_field_name') ) : the_row();

                    // display a sub field value
                    the_sub_field('sub_field_name');

                endwhile;
            else :
                // no rows found
            endif;

        ?>
        </div>

    </div> <!-- end .block -->
</div> <!-- end .general-block -->
