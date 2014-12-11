<?php
/*
Template Name: About Template
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

<?php if( get_field("intro_image") ): ?>
	<?php $intro_background = get_field('intro_image'); ?>
	<?php else: ?>
	<?php $intro_background = get_template_directory_uri().'/img/team-smiling.jpg'; ?>
	
<?php endif; ?>

<?php if(get_field('show_large_image')): ?>

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
	    <div class="small-12 medium-6 large-5 columns">
	        <?php if( get_field("about_you_image") ): ?>
				<img src="<?php the_field('about_you_image'); ?>"  class="bio-img"  alt="" />											
			<?php endif; ?>				
	    </div><!-- end columns -->
	    <div class="small-12 medium-6 large-7 columns">
	        <?php if( get_field("about_you_title") ): ?>
				<h4 class="text-uppercase heading-lines"><?php the_field('about_you_title'); ?></h4>											
			<?php endif; ?>	

			<?php if( get_field("about_you_sub_title") ): ?>
				<h5 class="text-italic text-thin text-red"><?php the_field('about_you_sub_title'); ?></h5>											
			<?php endif; ?>	

			<?php if( get_field("about_you_bio") ): ?>
				<p><?php the_field('about_you_bio'); ?></p>											
			<?php endif; ?>				
	    </div><!-- end columns -->
	</div><!-- end row -->	
</section><!-- end section #.light-section -->

<?php if( get_field("get_in_touch_background_image") ): ?>
	<?php $intouch_background = get_field('get_in_touch_background_image'); ?>
	<?php else: ?>
	<?php $intouch_background = get_template_directory_uri().'/img/touch-pad.jpg'; ?>
<?php endif; ?>

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
