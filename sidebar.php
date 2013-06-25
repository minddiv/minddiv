<div class = "five columns clearfix sidebar" >
	<?php get_search_form(); ?>
	<div class="sidebar-element">
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
	</div>
	<div class="sidebar-element">
		Siuiy
	</div>
	<div class="sidebar-element">
		Facebook
	</div>
	<div class="sidebar-element">
		Email Subscription
	</div>
	<div class="sidebar-element">
		RSS links
	</div>
	<?php dynamic_sidebar('main-sidebar'); ?>

</div>
