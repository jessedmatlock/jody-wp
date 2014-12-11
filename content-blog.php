<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-card clearfix'); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php //reverie_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it ?>
		<figure class="alignleft"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a></figure> 
		<?php endif; ?>
		
		<?php the_excerpt(); ?>
		<div class="clearfix"></div>
		<a class="button small" href="<?php the_permalink(); ?>">Read</a>
	</div>
</article>