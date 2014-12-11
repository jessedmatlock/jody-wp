<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-card clearfix'); ?>>
	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it ?>
		<figure><?php the_post_thumbnail('full'); ?></figure> 
		<?php endif; ?>
		<?php the_content(); ?>
	</div>
</article>