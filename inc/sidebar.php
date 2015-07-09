<?php

add_theme_support('widgets');

function ma_sidebar(){


	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="widget_sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

}

add_action('widgets_init','ma_sidebar');

?>