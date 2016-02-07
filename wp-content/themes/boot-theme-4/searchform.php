<!-- weird-searchform - searchform.php -->
<p>&nbsp;</p>
<form role="search" method="get" class="form-inline search-form" action="<?php echo home_url( '/' ); ?>">
	
	<div class="input-group input-group-sm">
		<label>
			<span class="screen-reader-text"><?php echo _x( '', 'label' ) ?></span></label>
			<input type="search" class="form-control search-field" placeholder="<?php echo esc_attr_x( 'Search ', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		
		<!-- <input type="submit" class="btn btn-default search-submit" value="<?php //echo esc_attr_x( 'Search', 'submit button' ) ?>" /> -->
		<button type="submit" class="btn btn-default btn-sm search-submit"><?php echo esc_attr_x( 'Search', 'submit button' ) ?></button>
	</div>

</form>