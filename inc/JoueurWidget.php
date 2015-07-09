<?php
class JoueurWidget extends WP_Widget {
 
    function JoueurWidget() {
        // Instantiate the parent object
        parent::__construct( false, 'Joueur Widget' );
    }
 
    function widget( $args, $instance )
    {

        $args = [
        'post_type' => 'joueur',
        'posts_per_page' => 1,
        'orderby' => 'rand',
       
    ];

    $joueur = new WP_Query( $args );
    if ( $joueur->have_posts() ) {

       echo '<aside class="sidebar">';
       echo '<div class="sidebar-wrapper1">';
       while ( $joueur->have_posts() ) {
            $joueur->the_post();
            global $post;

       echo  '<h4 class="post-title">Un joueur par hasard</h4>';
       echo  '<img src="'.wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'joueur' )[0].'">';
       echo  '<p id="title_joueur_item">'.get_the_title().'</p>';

}
       echo '</div>';
       echo '</aside>';
      }


    }
 
    function update( $new_instance, $old_instance ) {
        // Save widget options
    }
 
    function form( $instance ) {
        // Output admin widget options form
    }
}
 
function joueur_register_widgets() {
    register_widget( 'JoueurWidget' );
}
 
add_action( 'widgets_init', 'joueur_register_widgets' );
 
 
?>