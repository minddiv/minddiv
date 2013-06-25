<div class="sidebar-element">
	<form method="get" id="searchform" action="<?php echo home_url('/'); ?>">
		<div>
			<input id="s" type="text" name="s" 
				onblur="if(this.value=='') { this.value='Search';}"
				onfocus="if(this.value=='Search') { this.value=''; }"
				value="Search">
			<input type="submit" id="searchsubmit" value="<?php esc_attr_e('Search','nest'); ?>"
		</div>
	</form>
	</div>
</div>
