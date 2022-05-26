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
 * Global Block Values
 ****************************************/
$global_block_width        = get_field('global_block_width');
$custom_width              = get_field('custom_width');

if( have_rows('block_padding') ):
    while( have_rows('block_padding') ): the_row(); 
        $padding_top       = get_sub_field('padding_top');
        $padding_right     = get_sub_field('padding_right');
        $padding_bottom    = get_sub_field('padding_bottom');
        $padding_left      = get_sub_field('padding_left');
    endwhile; 
endif;

if( have_rows('block_margin') ):
    while( have_rows('block_margin') ): the_row(); 
        $margin_top        = get_sub_field('margin_top');
        $margin_right      = get_sub_field('margin_right');
        $margin_bottom     = get_sub_field('margin_bottom');
        $margin_left       = get_sub_field('margin_left');
    endwhile; 
endif;

/****************************************
 * Custom Block Values
****************************************/
$simple_cta_heading            = get_field('simple_cta_heading');
$simple_cta_content            = get_field('simple_cta_content');
$simple_cta_btn_text           = get_field('simple_cta_btn_text');
$simple_cta_btn_url            = get_field('simple_cta_btn_url');
$simple_cta_btn_target         = get_field('simple_cta_btn_target');
$target_blank                  = 'target="_blank" rel="noopener"';
$target_self                   = 'target="_self"';

/* aos animations per block. works but also hides it in CMS editor so dont have a fix yet
$animate = get_field('animate');
$animation_type = get_field('animation_type');
$animation_offset = get_field('animation_offset');
$animation_anchor_placement = get_field('animation_anchor_placement');
$animate_once = get_field('animate_once');
*/

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> general-block p-relative">
    <div class="block block-simple-cta <?php echo $global_block_width;?>" 
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

        <div class="block-simple-cta-content">
            <h2><?php echo $simple_cta_heading; ?></h2>
            <p><?php echo $simple_cta_content; ?></p>
            <a href=<?php echo '"' . $simple_cta_btn_url . '"'; ?> <?php if($simple_cta_btn_target == 'yes') { echo $target_blank; } if($simple_cta_btn_target == 'no') { echo $target_self; } ?> class="btn"><?php echo $simple_cta_btn_text; ?></a>
        </div>
    </div> <!-- end .block -->
</div> <!-- end .general-block -->
