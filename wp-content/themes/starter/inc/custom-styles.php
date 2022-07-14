<?php $max_desktop_width = get_field('max_desktop_width','options'); ?>

.max-width {
    width: 100%;
    margin: auto;
    <?php if ($max_desktop_width): ?>max-width: <?php echo $max_desktop_width;?>px; <?php endif; ?>
}

.block.fixed-width {
    <?php if ($max_desktop_width): ?>max-width: <?php echo $max_desktop_width;?>px; <?php endif; ?>
}

.block-headline, .cms-content-container > p, .cms-content-container > span, .cms-content-container > em, .cms-content-container > ul, .cms-content-container > li, .cms-content-container > a, .cms-content-container > h1, .cms-content-container > h2, .cms-content-container > h3, .cms-content-container > h4, .cms-content-container > h5, .cms-content-container > h6 {
    <?php if ($max_desktop_width): ?>max-width: <?php echo $max_desktop_width;?>px; <?php endif; ?>
    margin-left: auto; 
    margin-right: auto;
}