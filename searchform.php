<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="row collapse">
		<div class="large-10 small-10 columns">
			<input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'reverie'); ?>">
		</div>
		<div class="large-2 small-2 columns">
		<button type="submit" id="searchsubmit" class="button postfix"><i class="fa fa-search"></i></button>
		</div>
	</div>
</form>