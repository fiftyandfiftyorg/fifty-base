<?php 
get_header(); ?>
<?php if(has_post_thumbnail()):?>
    <div class="cms-banner fadein">
        <img class="cb-background" src="<?php the_post_thumbnail_url();?>"/>                 
    </div>
<?php endif;?>
<section id="main-block" class="fadein general-section">
    <div class="cms-content-container">
            <?php the_content();?>
    </div>
</section>
<?php get_footer(); ?>