<?php


function slider_register() {

	$post_type = 'slide';
	$args = [
		'label' => 'Slides',
		'description' => 'ajoutez des images au caroussel',
		'supports' => ['title','thumbnail'],
		'capability_type' => 'post',
		'show_ui' => true,
		'show_in_menu' => true,
		'public' => true
	];





	register_post_type( $post_type, $args );
}

add_action( 'init', 'slider_register' );
add_image_size( 'slide', 1680, 500, true );


function slider_show()
{

	
	$args = [
		'post_type' => 'slide',
		'posts_per_page' => -1
	];

	$slider = new WP_Query( $args );

	if ( $slider->have_posts() ) {

		echo '<section class="slider">';

		while ( $slider->have_posts() ) {
			$slider->the_post();
			global $post;
			echo '<div class="slider-item" style="background-image: url('. wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slide' )[0] .');" ></div>';
		}

		echo '</section>';

	}

}


