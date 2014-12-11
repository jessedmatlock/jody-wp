<?php get_header(); ?>

<!-- Row for main content area -->
<div class="row">
	<div class="small-12 large-8 columns" id="content" role="main">
		<?php // echo 'Single'; ?>
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<?php reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php get_template_part( 'content', 'post' ); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p class="entry-tags"><?php the_tags(); ?></p>
				<?php edit_post_link('Edit this Post'); ?>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
</div><!-- Row End -->
<?php get_footer(); ?>