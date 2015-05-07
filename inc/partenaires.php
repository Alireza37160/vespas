<?php


function partenaires_register() {

	$post_type = 'partenaire';
	$args = [
		'label' => 'partenaires',
		'description' => 'ajoutez des images au caroussel',
		'supports' => ['title','thumbnail'],
		'capability_type' => 'post',
		'show_ui' => true,
		'show_in_menu' => true,
		'public' => true
	];


	register_post_type( $post_type, $args );
}

add_action( 'init', 'partenaires_register' );
add_image_size( 'partenaire', 0, 70, false );


function partenaires_show()
{

	$args = [
		'post_type' => 'partenaire',
		'posts_per_page' => -1
	];

	$partenaires = new WP_Query( $args );

	if ( $partenaires->have_posts() ) {

		echo '<section class="partenaires">';

		while ( $partenaires->have_posts() ) {
			$partenaires->the_post();
			global $post;

			echo '<a href="#" class="partenaires-item" target="_blank">';
			echo '<img src="'.wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'partenaire' )[0].'">';
			echo '</a>';
		}

		echo '</section>';

	}

}
