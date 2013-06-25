<?php
	if(function_exists('register_nav_menus')) {
		register_nav_menus( array('primary' => 'Nav menu') );
	}
	
	if(function_exists('add_theme_support')){
		add_theme_support('post-thumbnails');
	}
	
	if(function_exists('add_image_size')){
		add_image_size('featured',640,480,true );
		// true = we want it to crop instead of resize
		add_image_size('post-thumb',270,200,true );
	}
	
	if(function_exists(register_sidebar)){
		register_sidebar(
			array(
				'name'=>'Main Sidebar',
				'id'=>'main-sidebar',
				'description'=>'This is the main sidebar',
				'before_widget'=>'<div class="sidebar-element">',
				'after_widget'=>'</div>',
				'before_title'=>'<p class="widget-hdg">',
				'after_title'=>'</p>'
		));
	}



?>
