<?php
/*
Template Name: contact
*/
?>

          <?php get_header();?>


   <section class="content">
          <div class="content-wrapper">


			   <form class="demande-info" action="mailer.php" method="post">
    

  
         <h4>Contactez nous</h4>
            
            
                <input type="text" name="nom" id="nom" placeholder="nom">
          
                <input type="text" name="prenom" id="prenom" placeholder="Prénom">
            
                <input type="text" name="mail" id="mail" placeholder="mail">
        

        
   

                <textarea name="message"  id="message" placeholder="message" >
                	
                </textarea>
                <button class="button button--wayra button--border-thick button--text-upper button--size-s">Envoyer</button>
                
          
    
          
         </form>
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