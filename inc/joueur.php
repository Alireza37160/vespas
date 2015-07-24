<?php


function joueur_register()
{

    $post_type = 'joueur';
    $args = [
        'label' => 'joueur',
        'description' => 'ajoutez des images au caroussel',
        'supports' => ['title', 'thumbnail', 'editor', 'excerpt', 'custom-fields'],
        'capability_type' => 'post',
        'show_ui' => true,
        'show_in_menu' => true,
        'public' => true
    ];


    register_post_type($post_type, $args);
}

add_action('init', 'joueur_register');
add_image_size('partenaire', 0, 70, false);


function joueurs_show()

{

    $args = [
        'post_type' => 'joueur',
        'posts_per_page' => -1
    ];

    $joueur = new WP_Query($args);

    if ($joueur->have_posts()) {

        echo '<div class="row joueur">';

        while ($joueur->have_posts()) {
            $joueur->the_post();
            global $post;

            echo '<div class="columns small-12 medium-6 large-4">';
            echo '<div class="card">';
            echo '<div class="card-image">';
            echo '<img src="' . wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'joueur')[0] . '">';
            echo '<div class="card-bio">
			<p>Numéro: ' . get_post_meta($post->ID, 'numero', true) . '</p>
			<p>Né le: ' . get_post_meta($post->ID, 'ne', true) . '</p>
			<p>poid: ' . get_post_meta($post->ID, 'poid', true) . '</p>
			<p>Taille: ' . get_post_meta($post->ID, 'taille', true) . '</p>
			</div>';
            echo '</div>';
            echo '<div class="card-content">';
            echo '<h3 class="subheader"><small><a href= "' . get_the_permalink() . '" id="title_joueur_item">' . get_the_title() . '</a></small></h4>';
            echo '<p>' . substr(get_the_content(), 0, 100) . ' ...</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }

        echo '</div>';

    }

}


//[joueurs]
function joueurs_func($atts)
{
    joueurs_show();

}

add_shortcode('joueurs', 'joueurs_func');







