<?php get_header();?>

<main class="main">
<h1 class="main-title"><?php echo the_title(); ?></h1>



 <section class="content">
  <div class="content-wrapper"> 

      <?php while(have_posts()):the_post(); ?>
            <h2 id="post-title" class="subheader">
            <a href="#"><?php the_title(); ?></a>
            </h2>
                        <figure>
              <a href="#">
               <?php the_post_thumbnail(); ?>
             </a>


               

          </figure>




      <?php the_content();?>
      <?php $meta_values = get_post_meta( $post->ID);

// echo '<pre>';
// var_dump($meta_values);
// echo '</pre>';
?>
<table>

<tbody>
<tr>
    <td>
       Date de naissance
    </td>
    <td>
        <?php echo $meta_values['ne'][0]?>
    </td>
</tr>
<tr>
      <td>
        Poid
      </td>
      <td>
        <?php echo $meta_values['poid'][0]?> 
      </td>
</tr>
<tr>
      <td>
        Taille
      </td>
      <td>
        <?php echo $meta_values['taille'][0]?>
      </td>
</tr>
</tbody>
</table>

      
     <?php endwhile; ?>

 </div>

             <div id="widget_sidebar">

             <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar')); ?>

             
              </div>

             
              </div>
</section>
                  <section class="pagination">
     
                 <?php previous_posts_link('< Précédent');?>
           
                 <?php next_posts_link('Suivant >');?>
                
                  </section> 

                  <div class="partenaires-wrapper">
                        <?php echo partenaires_show(); ?>
                  </div>

</main>


<?php get_footer();?>