<?php get_header(); ?>
<?php // echo 'Search'; ?>

<!-- Row for main content area -->
<div class="row">
	<div class="small-12 large-12 columns" id="content" role="main">
		<?php if(get_search_query()): ?>
			<h2><?php _e('Search Results for', 'reverie'); ?> "<?php echo get_search_query(); ?>"</h2>
		<?php else: ?>
			<h2>Here are the results we found for your search...</h2>
		<?php endif; ?>
		
	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
</div><!-- Row End -->
		
<?php get_footer(); ?>