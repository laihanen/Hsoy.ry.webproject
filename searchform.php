<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="row">
		<div class="large-12 columns">
			<div class="row collapse">
				<div class="small-10 columns">
					<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search for...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />
				</div>
				<div class="small-2 columns">
					<button type="submit" class="button"><span class="fi-magnifying-glass"/></button>
				</div>
			</div>
		</div>
	</div>
</form>