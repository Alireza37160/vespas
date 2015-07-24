<?php get_header();?>


		<main class="main">
<h1 class="main-title subheader" ><?php echo the_title(); ?></h1>
</h1>




            <?php echo slider_show(); ?>

            <section class="content">

            	<div class="content-wrapper">

                  <?php while(have_posts()):the_post(); ?>
            		<article class="post">
         			
					<figure>
            				<a href="#">
            					<?php the_post_thumbnail(); ?>
            				</a>
            			</figure>

            			<h2 class="post-title subheader">
						<a href="#"><?php the_title(); ?></a>
					</h2>

                        
                                    <span class="post-auteur">
                                          <?php the_author(); ?>
                                    </span>
                                    <span class="post-date">
                                          <?php the_date(); ?>
                                    </span>
                                    <span>     
                                    <?php the_category(' / '); ?>
                                    </span>
                              



            			<div class="post-content">
            				<p>
            					<?php the_excerpt();?>
            				</p>
            			</div>
            			<a class="post-suite" href="<?php echo get_permalink();?>">...Suite</a>

            		</article>

                  <?php endwhile; ?>
            			
	
            	</div>

              <div id="widget_sidebar">
             <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar')) ; ?>


              </div>

            	
            	</section>

                  



            	<section class="pagination">
                               

                  <?php previous_posts_link('< Précédent');?>
       
               
                  <?php next_posts_link('Suivant >');?>

                        
            	</section>
            	   

	            <div class="partenaires-wrapper">
	            	
	            </div>

              <?php echo partenaires_show(); ?>


		</main>


		<?php get_footer();?>

            <?php /*the_posts_pagination([
                        'mid_size'=> 1,
                        'prev_next' => true,
                        'prev_text'=> 'Précédent',
                        'next_text'=> 'Suivant',
                        'screen_reader_text'=> __( '   ' )
                   ]); */?>