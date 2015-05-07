<?php 

add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_prev');

function posts_link_attributes_prev() {
    return 'class="pagination-prev"';
}

function posts_link_attributes_next() {
    return 'class="pagination-next"';
}


function next_posts_link_attributes(){
	return '<a href="" >le texte du lien</a>';
}