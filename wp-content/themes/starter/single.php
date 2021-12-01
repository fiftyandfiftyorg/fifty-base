<?php get_header(); ?>
<section id="cms-main">
    <div class="cms-content-container max-width pad-hit">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="page-title"><?php the_title();?></h1>
            <p><?php echo the_content();?></p>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>