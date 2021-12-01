<?php if( have_rows('flex_content') ):?>
	<?php while ( have_rows('flex_content') ) : the_row(); ?>
		<?php if( get_row_layout() == 'cta_headline' ):?>
			<div class="cta-headline max-width pad-hit">
				<h2><?php echo the_sub_field('cta_headline_title');?></h2>
				<h3><?php echo the_sub_field('cta_headline_subtitle');?></h3>
				<p><?php echo the_sub_field('cta_headline_description');?></p>
			</div>
		<?php elseif( get_row_layout() == 'carousel_section' ):?>
			<div class="image-carousel-section">
				<h2><?php echo the_sub_field('carousel_headline');?></h2>
				<div class="image-carousel max-width pad-hit" > 
					<?php while( have_rows('carousel_slider') ): the_row(); 
						$carousel_slider_image = get_sub_field('carousel_slider_image');
						$carousel_slider_title = get_sub_field('carousel_slider_title');
						$carousel_slider_description = get_sub_field('carousel_slider_description');
					?>
						<div class="image-carousel__cell">
								<div class="carousel-cell-image">
					            	<img class="cc-image" src="<?php echo $carousel_slider_image['url']; ?>" alt="<?php echo $carousel_slider_image; ?>"/>
								</div>
					            <?php if($carousel_slider_title):?>
									<div class="carousel-cell-label">
										<h3><?php echo $carousel_slider_title; ?></h3>
										<p><?php echo $carousel_slider_description; ?></p>
									</div>
								<?php endif;?>
				        </div>
					<?php endwhile; ?>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'headline' ):?>
			<h2 class="cms-headline max-width pad-hit"><?php echo the_sub_field('headline');?></h2>
		<?php elseif( get_row_layout() == 'sub_headline' ): ?>
			<h3 class="max-width pad-hit"><?php echo the_sub_field('sub_headline');?></h3>
		<?php elseif( get_row_layout() == 'one_column_paragraph' ): ?>
			<div class="single-column max-width pad-hit">
				<div class="sc-col">
					<p><?php echo the_sub_field('text');?></p>
				</div>
			</div>
		<?php elseif( get_row_layout() == 'two_column_paragraph' ): ?>
			<div class="double-column max-width pad-hit">
				<div class="dc-col">
					<p><?php echo the_sub_field('column_one_text');?></p>
				</div>
				
				<div class="dc-col">
					<p><?php echo the_sub_field('column_two_text');?></p>
				</div>
			</div>
		<?php elseif( get_row_layout() == 'full_width_image' ): ?>
			<div class="cms-cc-img max-width pad-hit">
				<img src="<?php echo the_sub_field('image');?>"/>
			</div>
		<?php elseif( get_row_layout() == 'list_group' ): ?>
			<h4 class="max-width pad-hit"><?php echo the_sub_field('list_headline');?></h4>
			<ul class="max-width pad-hit">
			<?php while( have_rows('list') ): the_row(); 
				$item = get_sub_field('list_item');?>
					<li><?php echo $item; ?></li>
				<?php endwhile; ?>
			</ul>

			<?php elseif( get_row_layout() == 'form' ): 
				$form_shortcode = get_sub_field('form_shortcode', false, false);?>
				<div class="form-container max-width pad-hit">
					<div class="form">
						<?php echo do_shortcode($form_shortcode);?>
					</div>
				</div>
			<?php elseif( get_row_layout() == 'image_gallery' ): ?>
				<div class="image-gallery-section">
					<div class="image-gallery max-width pad-hit">
						<?php while( have_rows('gallery') ): the_row(); 
							$image = get_sub_field('image');
							$label = get_sub_field('label');
						?>
							<div class="image-gallery__cell">
									<img class="gallery-single" src="<?php echo $image; ?>" alt="<?php echo $label; ?>"/>
									<?php if($label):?>
										<div class="caption-label">
											<?php echo $label; ?>
										</div>
									<?php endif;?>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php elseif( get_row_layout() == 'logos' ): ?>
				<div class="image-gallery" style="clear:both;">
					<?php while( have_rows('logo') ): the_row(); 
						$image = get_sub_field('logo_image');
					?>
						<div class="image-gallery__cell">
					            <img class="gallery-single" src="<?php echo $image; ?>" alt="<?php echo $label; ?>"/>
				        </div>
					<?php endwhile; ?>
				</div>
		<?php elseif( get_row_layout() == 'accordion' ): ?>
			<div id="general-accordion" class="accordion cms-accordion">
				<div id="ga-container" class="container-pad">
						<h2><?php echo the_sub_field('accordion_title');?></h2>
						<div class="ga-ul-container">
							<ul class="ga-ul">
								<?php while( have_rows('accordion') ): the_row(); 
								$title = get_sub_field('acc_title');
								$description = get_sub_field('acc_description');
								?>
								<li class="ga-li">
									<div class="ga--title">
										<?php echo $title; ?>
										<div class="ga--arrow"></div>
									</div>
									<div class="ga--content">
										<p><?php echo $description; ?></p>
									</div>
								</li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
			</div>
		<?php endif; endwhile; ?>
<?php endif;?>