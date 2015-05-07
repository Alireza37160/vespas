<?php get_header();?>



		<main class="main">
<h1 class="main-title">Phoenix de Vouillé</h1>






            <section class="content_single">
                              <figure>
                                    <a href="#">
                                          <?php the_post_thumbnail(); ?>
                                    </a>
                              </figure>

            	<div class="content-wrapper">

                  <?php while(have_posts()):the_post(); ?>
            		<article class="post">
         			


            			<h2 class="post-title">
						<a href="#"><?php the_title(); ?></a>
					</h2>

                              <div class="post-meta_single">
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
            					<?php the_content();?>
            				</p>
            			</div>
            			

            		</article>

                  <?php endwhile; ?>
            		


            	
            			
            	
            			
	
            	</div>

              <?php get_sidebar();?>

            	</div>
            	
            	</section>

            	<section class="pagination">

            		<a href="#" class="pagination-prev">
						Précédent 
            		</a><!--
            		--><a href="#" class="pagination-next">
						Suivant 
            		</a> 
            	</section> 

	            <div class="partenaires-wrapper">
	            	<?php echo partenaires_show(); ?>
	            </div>

		</main>


		<?php get_footer();?>