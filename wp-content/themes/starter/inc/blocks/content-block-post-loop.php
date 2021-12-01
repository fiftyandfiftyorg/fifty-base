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
$className = 'pl';
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
/*$animate = get_field('animate');
$animation_type = get_field('animation_type');
$animation_offset = get_field('animation_offset');
$animation_anchor_placement = get_field('animation_anchor_placement');
$animate_once = get_field('animate_once');*/

//Custom Block Values
$post_loop_title = get_field('post_loop_title');
$select_post_type = get_field('select_post_type');
$post_loop_number_of_posts = get_field('post_loop_number_of_posts');
$post_loop_number_of_columns = get_field('post_loop_number_of_columns');
$post_loop_grid_gap = get_field('post_loop_grid_gap');
$post_loop_layout = get_field('post_loop_layout');
$post_loop_show_image = get_field('post_loop_show_image');
$post_loop_max_image_height = get_field('post_loop_max_image_height');
$post_loop_show_title = get_field('post_loop_show_title');
$post_loop_show_description = get_field('post_loop_show_description');
$post_loop_show_cta = get_field('post_loop_show_cta');
$post_loop_cta_text = get_field('post_loop_cta_text');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> general-block p-relative">
	<?php if($post_loop_title):?><h2 class="block-headline"><?php echo $post_loop_title;?></h2><?php endif;?>
        <div class="block block-post-feed <?php echo $global_block_width;?> <?php if($post_loop_number_of_columns):?>limit-<?php echo $post_loop_number_of_columns;?><?php endif;?>" 
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
            "
            <?php if($animate == 'yes'):?>
                data-aos="<?php echo $animation_type;?>" 
                data-aos-anchor-placement="<?php echo $animation_anchor_placement;?>"
                <?php if($animation_offset):?> data-aos-offset="<?php echo $animation_offset;?>"<?php endif;?>
                <?php if($animate_once):?> data-aos-once="<?php echo $animate_once;?>"<?php endif;?>
            <?php endif;?>>

            <?php 
                $args = array(
                'post_type' => ".'$select_post_type'.",
                'posts_per_page' => $post_loop_number_of_posts
            ); 
            ?>
            <?php $loop = new WP_Query($args); ?>
            <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();?>
                <div class="block-post-feed-item is-<?php echo $post_loop_layout;?>">
                    <?php if($post_loop_show_image):?>
                        <div class="bpfi-photo">   
                            <?php if(has_post_thumbnail()):?>
                                <img src="<?php the_post_thumbnail_url();?>" alt="<?php echo the_title();?>" <?php if($post_loop_max_image_height):?>style="max-height:<?php echo $post_loop_max_image_height;?>px;"<?php endif;?>/>
                            <?php endif;?>
                        </div>
                    <?php endif;?>
                    <div class="bpfi-details">
                        <?php if($post_loop_show_title):?>
                            <a href="<?php echo the_permalink();?>"><h4><?php the_title();?></h4></a>
                        <?php endif;?>
                        <?php if($post_loop_show_description):?>
                            <?php $content = get_the_content();?>
                            <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 200, '...');?></p>
                        <?php endif;?>
                        <?php if($post_loop_show_cta):?>
                            <a href="<?php echo the_permalink();?>"><?php echo $post_loop_cta_text;?></a>
                        <?php endif;?>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php else: ?>
                <div class="no-opp">No Posts</div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <!--end post loop-->
</div>
