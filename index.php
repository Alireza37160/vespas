<?php get_header();?>



		<main class="main">
<h1 class="main-title">Phoenix de Vouillé</h1>




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

            			<h2 class="post-title">
						<a href="#"><?php the_title(); ?></a>
					</h2>

                              <div class="post-meta">
                                    <span class="post-auteur">
                                          <?php the_author(); ?>
                                    </span>
                                    <span class="post-date">
                                          <?php the_date(); ?>
                                    </span>
                                    <span>     
                                    <?php the_category(' / '); ?>
                                    </span>
                              </div>



            			<div class="post-content">
            				<p>
            					<?php the_excerpt();?>
            				</p>
            			</div>
            			<a class="post-suite" href="<?php echo get_permalink();?>">...Suite</a>

            		</article>

                  <?php endwhile; ?>
            		


            	
            			
            	
            			
	
            	</div>

              <?php get_sidebar();?>

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

            <?php /*the_posts_pagination([
                        'mid_size'=> 1,
                        'prev_next' => true,
                        'prev_text'=> 'Précédent',
                        'next_text'=> 'Suivant',
                        'screen_reader_text'=> __( '   ' )
                   ]); */?>