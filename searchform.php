<div class="search-form">
		<form class="form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label class="screen-reader-text" for="s"><?php esc_html_e( 'Search for:', 'blogzine' ); ?></label>
			 <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="&hellip;"  />
				<button type="submit" id="searchsubmit" />
           			<span class="icon"><i class="fa fa-search"></i></span>   
      			</button>
		</form>
</div>