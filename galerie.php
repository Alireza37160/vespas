<?php
/*
Template Name: galerie
*/
?>

<?php get_header();?>


<section class="content">

<div class="content-wrapper">
	<?php while(have_posts()):the_post(); ?>

	<?php the_content();?>




	
<?php endwhile; ?>
</div>
</section>





<?php get_galerie();?>

<?php get_footer(); ?>