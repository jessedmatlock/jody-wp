</div><!-- Container End -->

<footer class="full-width" role="contentinfo">
	<?php /*
	<div class="row">
		<div class="large-12 columns">
			<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list')); ?>
		</div>
	</div>
	*/ ?>
	<div class="row show-love">
		<div class="large-12 columns">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Business Website by','Revive Marketing'); ?> <a href="http://revivemarketing.org/" rel="nofollow" title="Revive Marketing">Revive Marketing</a></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>