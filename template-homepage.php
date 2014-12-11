<?php
/*
Template Name: Homepage Template
*/
get_header(); ?>

<!-- Row for main content area -->
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

<section id="" class="dark-section">
	<div class="row">
	    <div class="small-12 medium-12 large-12 columns">
			<?php if( get_field("dark_section_title") ): ?>
				<h2 class="section-title"><?php the_field('dark_section_title'); ?></h2>							
			<?php endif; ?>

			<?php if( get_field("dark_section_sub_title") ): ?>
				<p class="section-sub-title"><?php the_field('dark_section_sub_title'); ?></p>											
			<?php endif; ?>				
	    </div><!-- end columns -->
	</div><!-- end row -->
</section><!-- end section #.dark-section -->

<section id="" class="light-section">
	<div class="row">
	    <div class="small-12 medium-12 large-12 columns">
	
			<?php if( get_field("overview_title") ): ?>
				<h3 class="section-title"><?php the_field('overview_title'); ?></h3>							
			<?php endif; ?>

			<?php if( get_field("overview_sub_title") ): ?>
				<p class="section-sub-title"><?php the_field('overview_sub_title'); ?></p>											
			<?php endif; ?>	
	
			<?php if(get_field('overview_services')): ?>

				<div class="row">		

				<?php while(has_sub_field('overview_services')): ?>
				   <div class="small-12 medium-12 large-4 columns">
					<h4 class="heading-lines"><?php the_sub_field('service_name'); ?></h4>
					<p><?php the_sub_field('service_description'); ?></p>
					<a href="<?php the_sub_field('service_link'); ?>" id="" class="button tiny">read more...</a>
					
			    </div><!-- end columns -->
				<?php endwhile; ?> 
	   
				</div><!-- end row -->
		
			<?php endif; ?>
	
	    </div><!-- end columns -->
	</div><!-- end row -->			
</section><!-- end section #.light-section -->

<section id="" class="dark-section patterned">
	<div class="row">
	    <div class="small-12 medium-12 large-12 columns">
			<?php if( get_field("recommended_reading_title") ): ?>
				<h3 class="section-title text-uppercase"><?php the_field('recommended_reading_title'); ?></h3>							
			<?php endif; ?>

			<?php if( get_field("recommended_reading_sub_title") ): ?>
				<p class="section-sub-title"><?php the_field('recommended_reading_sub_title'); ?></p>											
			<?php endif; ?>	
		
	        <?php if(get_field('recommended_reading_items')): ?>
	        	<div class="row">	        	

	        	<?php while(has_sub_field('recommended_reading_items')): ?>
	        	 <div class="small-12 medium-12 large-4 columns">
					<a href="javascript:void(0);" class="overlay-parent">
						<div class="overlay dark-mask">
							<div href="javascript:void(0);" class="overlay-icon">
								<i class="fa fa-link"></i>
							</div>
						</div>						
	        			<img src="<?php the_sub_field('book_image'); ?>"  class="" id=""  alt="" />
					</a>
					<h5 class="text-uppercase title heading-lines dark-lines"><?php the_sub_field('book_title'); ?></h5>
	        		<p class="tags"><?php the_sub_field('book_genre'); ?></p>
        	    </div><!-- end columns -->
	        	<?php endwhile; ?> 
	           
        	</div><!-- end row -->

	        <?php endif; ?>
			
	    </div><!-- end columns -->
	</div><!-- end row -->
</section><!-- end section #.dark-section -->
<?php if( get_field("get_in_touch_background_image") ): ?>
	<?php $intouch_background = get_field('get_in_touch_background_image'); ?>
	<?php else: ?>
	<?php $intouch_background = 'none'; ?>
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
<?php /*
<div class="row">
	<div class="small-12 large-12 columns" id="content" role="main">

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php //reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<!--p><?php the_tags(); ?></p-->
			</footer>
			<!--?php comments_template(); ?-->
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div><!-- Row End -->
*/ ?>
<?php get_footer(); ?>
