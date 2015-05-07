<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Handball</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

</head>
<body>

<?php include_once('img/svgdefs.svg'); ?>


		<header class="header">
			<div class="header-top">


				<a href="<?Php echo get_site_url ('index.php');?>" class="header-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"  >
				</a>
				<h1 class="header-title">VESTAS HANDBALL</h1>
			</div>

			
			<div class="wrapper-menu">
			<?php wp_nav_menu( array(  'principal' => 'menu principal' ) );  ?>

				
			</div>
		

			

			<nav class="header-social">
			    <a href="#">
			    	<svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg>
		    	</a>
				<a href="#">
					<svg class="icon icon-google-plus"><use xlink:href="#icon-google-plus"></use></svg>
			    </a>
				<a href="#">
					<svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg>
			    </a>
				<a href="#">
					<svg class="icon icon-youtube3"><use xlink:href="#icon-youtube3"></use></svg>
			    </a>
					
			</nav>





			
			
		</header>

		<nav class="burger">
		
			<button class="burger-btn">Menu</button>
		</nav>
