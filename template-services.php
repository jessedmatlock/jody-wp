<?php
/*
Template Name: Services Template
*/
get_header(); ?>

<!-- Row for main content area -->
<section class="red-section">
	<div class="row">
	    <div class="small-12 medium-6 large-6 columns">
			<h2 class="page-title"><?php the_title(); ?></h2>							
	    </div><!-- end columns -->
	    <div class="small-12 medium-6 large-6 columns">
			<?php if( get_field("page_sub_title") ): ?>
				<p class="page-sub-title"><?php the_field('page_sub_title'); ?></p>											
			<?php endif; ?>				
	    </div><!-- end columns -->
	</div><!-- end row -->
</section><!-- end section #.dark-section -->

<?php if(get_field('show_large_image')): ?>
	<?php if( get_field("intro_image") ): ?>
		<?php $intro_background = get_field('intro_image'); ?>
		<?php else: ?>
		<?php $intro_background = get_template_directory_uri().'/img/team-smiling.jpg'; ?>
	<?php endif; ?>

<section id="intro" class="parallax-bg" style="background-image: url(<?php echo $intro_background; ?>)">
	<div class="overlay"></div><!-- end div.overlay -->
	<div class="row">
	    <div class="small-12 medium-12 large-12 columns">
			<?php if( get_field("intro_title") ): ?>
				<?php
					$intro_title = get_field("intro_title"); 
					$intro_title_echo = '';
					
					$intro_title_array = explode(" ", $intro_title);
					$word_count = count($intro_title_array);
					for($i = 0; $i < count($intro_title_array); $i++){
						if($i > 0 && $i < ($word_count - 1)){
							$intro_title_echo .= '<span>'.$intro_title_array[$i].'</span> ';							
						} else {
							$intro_title_echo .= $intro_title_array[$i].' ';
						}
					}
				?>				
				<h1 class="section-title"><?php echo $intro_title_echo; ?></h1>							
			<?php endif; ?>

			<?php if( get_field("intro_sub_title") ): ?>
				<p class="section-sub-title"><?php the_field('intro_sub_title'); ?></p>											
			<?php endif; ?>


			<?php if( get_field("intro_button_txt_left") ): ?>
				<a href="<?php the_field('intro_button_link_left'); ?>" id="" class="button clear-button"><?php the_field('intro_button_txt_left'); ?></a>
			<?php endif; ?>
			
			<span class="span-or">Or</span>
			
			<?php if( get_field("intro_button_txt_right") ): ?>
				<a href="<?php the_field('intro_button_link_right'); ?>" id="" class="button"><?php the_field('intro_button_txt_right'); ?></a>												
			<?php endif; ?>
	    </div><!-- end columns -->
	</div><!-- end row -->
</section><!-- end section #.parallax-section -->

<?php endif ?>

<section class="light-section">
	<div class="row">
	    <div class="small-12 medium-12 large-12 columns">
			<?php if( get_field("page_introduction") ): ?>
				<p class="page-introduction"><?php the_field('page_introduction'); ?></p>											
			<?php endif; ?>				
	    </div><!-- end columns -->
	</div><!-- end row -->
</section><!-- end section #.dark-section -->


<?php if(get_field('services')): $current_row = 1;?>
	<section class="light-section">
	<?php while(has_sub_field('services')):  ?>
		
		<?php if($current_row === 1 || $current_row === 4 || $current_row === 7 ||$current_row === 10): ?>
		<div class="row">
		<?php endif; ?>
		
	    <div class="small-6 medium-4 large-4 columns">
		
			<div class="icon-box">
				<?php if(get_sub_field('service_icon') != 'none'): ?>			
				<div class="icon-box-icon">
					<i class="fa <?php the_sub_field('service_icon'); ?>"></i>
				</div><!-- end div.icon-box-icon -->
				<?php endif; ?>								

				<div class="box-content">
					<?php if( get_sub_field("service_title") ): ?>
						<h4 class="heading-lines"><?php the_sub_field('service_title'); ?></h4>											
					<?php endif; ?>				

					<?php if( get_sub_field("service_description") ): ?>
						<p><?php the_sub_field('service_description'); ?></p>											
					<?php endif; ?>				

					<?php if(get_sub_field('service_button_text')): ?>
					<a href="<?php the_sub_field('service_button_link'); ?>" class="button tiny clear-button"><?php the_sub_field('service_button_text'); ?></a>
					<?php endif; ?>				
					
				</div><!-- end div.box-content -->
			</div><!-- end div.icon-box -->
			
	    </div><!-- end columns -->
	
		<?php if($current_row === 3 || $current_row === 6 || $current_row === 9): ?>
		</div><!-- end row -->
		<?php endif; ?>
						
	<?php $current_row ++; endwhile; ?> 
</section><!-- end section #.dark-section -->
<?php endif; ?>

		

<?php if( get_field("get_in_touch_background_image") ): ?>
	<?php $intouch_background = get_field('get_in_touch_background_image'); ?>
	<?php else: ?>
	<?php $intouch_background = get_template_directory_uri().'/img/touch-pad.jpg'; ?>
<?php endif;?>

<section class="parallax-bg" style="background-image: url(<?php echo $intouch_background; ?>)">
	<div class="overlay"></div><!-- end div.overlay -->
	<div class="row">
	    <div class="small-12 medium-12 large-12 columns">
	        <?php if( get_field("get_in_touch_title") ): ?>
				<h2 class="section-title"><?php the_field('get_in_touch_title'); ?></h2>							
			<?php endif; ?>

			<?php if( get_field("get_in_touch_sub_title") ): ?>
				<p class="section-sub-title"><?php the_field('get_in_touch_sub_title'); ?></p>											
			<?php endif; ?>	
			
			<?php if(get_field('get_in_touch_button_txt')): ?>
				<a href="<?php the_field('get_in_touch_button_link') ?>" id="" class="button"><?php the_field('get_in_touch_button_txt') ?></a>
			<?php endif ?>
			
	    </div><!-- end columns -->
	</div><!-- end row -->
</section><!-- end section #.parallax-bg -->


<section id="contact-footer" class="dark-section patterned">
	<div class="row">
	    <div class="small-12 medium-12 large-4 columns text-center">
			<i class="fa fa-map-marker fa-3x"></i>
			<h3 class="">Address</h3>
	        <?php if(get_field('global_address', 'options')): ?>
	        	<p><?php the_field('global_address', 'options') ?><br/>
	        	<?php the_field('global_address_2', 'options') ?></p>
	        <?php endif ?>	
	    </div><!-- end columns -->
	    <div class="small-12 medium-12 large-4 columns text-center">
			<i class="fa fa-phone fa-3x"></i>
			<h3 class="">Contacts</h3>
			<p>
	        <?php if(get_field('global_phone_number', 'options')): ?>
	        	<?php the_field('global_phone_number', 'options') ?>
	        <?php endif ?>	
	        <?php if(get_field('global_email_address', 'options')): ?>
				<br/>
	        	<a href="mailto:<?php the_field('global_email_address', 'options') ?>" target="_blank" class=""><?php the_field('global_email_address', 'options') ?></a>
	        <?php endif ?>	
			</p>
	    </div><!-- end columns -->
	    <div class="small-12 medium-12 large-4 columns">
			<img src="<?php echo get_template_directory_uri(); ?>/img/footer-content-logo.png" class="" id="footer-content-logo"  alt="Jody L. Schwartz" />
	        <?php if(get_field('footer_content', 'options')): ?>
	        	<p><?php the_field('footer_content', 'options') ?></p>
	        <?php endif ?>	
	    </div><!-- end columns -->
	</div><!-- end row -->
	
</section><!-- end section #.dark-section -->

<?php get_footer(); ?>