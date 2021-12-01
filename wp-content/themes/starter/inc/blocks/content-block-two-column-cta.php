<?php

/**
 * Post Loop Block Template.
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
// Global Block Values
$global_block_width = get_field('global_block_width');
$custom_width = get_field('custom_width');
if( have_rows('block_padding') ):
    while( have_rows('block_padding') ): the_row(); 
        $padding_top = get_sub_field('padding_top');
        $padding_right = get_sub_field('padding_right');
        $padding_bottom = get_sub_field('padding_bottom');
        $padding_left = get_sub_field('padding_left');
    endwhile; 
endif;
if( have_rows('block_margin') ):
    while( have_rows('block_margin') ): the_row(); 
        $margin_top = get_sub_field('margin_top');
        $margin_right = get_sub_field('margin_right');
        $margin_bottom = get_sub_field('margin_bottom');
        $margin_left = get_sub_field('margin_left');
    endwhile; 
endif;
//Custom Block Values
$two_col_headline = get_field('two_col_headline');
$two_col_layout = get_field('two_col_layout');
$two_col_column_one_width = get_field('two_col_column_one_width');
$two_col_column_two_width = get_field('two_col_column_two_width');
$two_col_image = get_field('two_col_image');
$two_col_content = get_field('two_col_content');
$two_col_content_background = get_field('two_col_content_background');
$two_col_align_content = get_field('two_col_align_content');
$two_col_mobile_layout = get_field('two_col_mobile_layout');
$two_col_min_block_height = get_field('two_col_min_block_height');
if( have_rows('content_padding') ):
    while( have_rows('content_padding') ): the_row(); 
        $two_col_content_padding_top = get_sub_field('two_col_content_padding_top');
        $two_col_content_padding_right = get_sub_field('two_col_content_padding_right');
        $two_col_content_padding_bottom = get_sub_field('two_col_content_padding_bottom');
        $two_col_content_padding_left = get_sub_field('two_col_content_padding_left');
    endwhile; 
endif;
/*$animate = get_field('animate');
$animation_type = get_field('animation_type');
$animation_offset = get_field('animation_offset');
$animation_anchor_placement = get_field('animation_anchor_placement');
$animate_once = get_field('animate_once');*/
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> general-block p-relative">
	<?php if($two_col_headline):?><h2 class="block-headline"><?php echo $two_col_headline;?></h2><?php endif;?>
    <div class="block block-two-col-cta <?php echo $global_block_width;?> <?php echo $two_col_layout;?> <?php echo $two_col_mobile_layout;?>" 
    style="<?php if($global_block_width=='custom-width'):?>max-width:<?php echo $custom_width;?>px;<?php endif;?>
    <?php if($post_loop_grid_gap):?>grid-gap:<?php echo $post_loop_grid_gap;?>;<?php endif;?>
    <?php if($padding_top):?>padding-top:<?php echo $padding_top;?>;<?php endif;?>
    <?php if($padding_right):?>padding-right:<?php echo $padding_right;?>;<?php endif;?>
    <?php if($padding_bottom):?>padding-bottom:<?php echo $padding_bottom;?>;<?php endif;?>
    <?php if($padding_left):?>padding-left:<?php echo $padding_left;?>;<?php endif;?>
    <?php if($margin_top):?>margin-top:<?php echo $margin_top;?>;<?php endif;?>
    <?php if($margin_right):?>margin-right:<?php echo $margin_right;?>;<?php endif;?>
    <?php if($margin_bottom):?>margin-bottom:<?php echo $margin_bottom;?>;<?php endif;?>
    <?php if($margin_left):?>margin-left:<?php echo $margin_left;?>;<?php endif;?>
    <?php if ($two_col_min_block_height):?>min-height:<?php echo $two_col_min_block_height;?>px;<?php endif;?>
    "
    <?php if($animate == 'yes'):?>
        data-aos="<?php echo $animation_type;?>" 
        data-aos-anchor-placement="<?php echo $animation_anchor_placement;?>"
        <?php if($animation_offset):?> data-aos-offset="<?php echo $animation_offset;?>"<?php endif;?>
        <?php if($animate_once):?> data-aos-once="<?php echo $animate_once;?>"<?php endif;?>
    <?php endif;?>>

        <div class="block-two-col-cta-image" <?php if($two_col_column_one_width):?>style="width:<?php echo $two_col_column_one_width;?>%;"<?php endif;?>>
            <img src="<?php echo $two_col_image;?>"/>
        </div>
        <div class="block-two-col-cta-content <?php echo $two_col_align_content;?>" style="
            <?php if($two_col_content_padding_top):?>padding-top:<?php echo $two_col_content_padding_top;?>;<?php endif;?>
            <?php if($two_col_content_padding_right):?>padding-right:<?php echo $two_col_content_padding_right;?>;<?php endif;?>
            <?php if($two_col_content_padding_bottom):?>padding-bottom:<?php echo $two_col_content_padding_bottom;?>;<?php endif;?>
            <?php if($two_col_content_padding_left):?>padding-left:<?php echo $two_col_content_padding_left;?>;<?php endif;?>
            <?php if($two_col_content_background):?>background-color:<?php echo $two_col_content_background;?>;<?php endif;?>
            <?php if($two_col_column_two_width):?>width:<?php echo $two_col_column_two_width;?>%;<?php endif;?>">
            <?php echo $two_col_content;?>
        </div>
    </div>
</div>
