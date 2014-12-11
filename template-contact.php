<?php
/*
Template Name: Contact Template
*/

 get_header(); ?>

<!-- Row for main content area -->
<section  class="light-section">
	<div class="row">
		<div class="small-12 medium-6 large-6 columns">
			<h4 class="text-uppercase heading-lines">Send Me A Message</h4>
			<?php gravity_form(1, false, false, false, '', false); ?>

		</div>
		<div class="small-12 medium-6 large-6 columns">
			<h4 class="text-uppercase heading-lines">Contact Me</h4>
			<?php if(get_field('sidebar_intro_message')): ?>
	        	<p><?php the_field('sidebar_intro_message') ?></p>
	        <?php endif ?>	
	
			<div class="contact-info">
				<div class="address-box">
					<?php if(get_field('global_address', 'options')): ?>
			        	<p><?php the_field('global_address', 'options') ?> <?php the_field('global_address_2', 'options') ?></p>
			        <?php endif ?>					
				</div><!-- end div.address-box -->
				<div class="phone-box">
					<?php if(get_field('global_phone_number', 'options')): ?>
			        	<p><?php the_field('global_phone_number', 'options') ?></p>
			        <?php endif ?>	

				</div><!-- end div.phone-box -->
				<div class="email-box">
					<?php if(get_field('global_email_address', 'options')): ?>
			        	<a href="mailto:<?php the_field('global_email_address', 'options') ?>" target="_blank" class=""><?php the_field('global_email_address', 'options') ?></a>
			        <?php endif ?>			        
				</div><!-- end div.email-box -->
			</div><!-- end div.contact-info -->

			<div class="office-hours">
				<?php if(get_field('office_hours')): ?>

					<?php while(has_sub_field('office_hours')): ?>
						<p><?php the_sub_field('day'); ?>: <strong><?php the_sub_field('hour'); ?></strong></p>						
					<?php endwhile; ?> 

				<?php endif; ?>
				
			</div><!-- end div.office-hours -->
			<div class="map-wrapper">
				<?php if(get_field('map')): $location = get_field('map'); ?>
		        	<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
		        <?php endif ?>	
			</div><!-- end div.map-wrapper -->
		</div>

	</div><!-- Row End -->
	
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