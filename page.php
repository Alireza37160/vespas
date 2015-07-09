<?php get_header();?>
<main class="main">
<h1 class="main-title"><?php echo the_title(); ?></h1>

 <section class="content">
  <div class="content-wrapper">	
	<?php while(have_posts()):the_post(); ?>
		<h2 id="post-title">
		<a href="#"><?php the_title(); ?></a>
		</h2>

	<?php the_content();?>

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