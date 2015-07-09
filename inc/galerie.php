<?php

add_shortcode('gallery', 'galerie');

function galerie( $attr ) {
	$output = '<div class="galerie">';

	echo '<pre>';
	var_dump($attr);
	echo '</pre>';

	$output .= '</div>';

	return $output;

}



