<!doctype html>
<html lang="fr">
	<head>
		<?php include('include/inc_head.php') ?>
		<meta name="description" content="galerie interactive"/>
		<title>Galerie</title>
	</head>

	<body class="galerie" role="document">
	  <div class="content">
		<header class="header" role="banner">
		<?php include('include/inc_header.php') ?>
		</header>
		
		<nav class="menu" role="navigation">
		<?php $nav_en_cours = 'slider'; ?>
		<?php include('include/inc_menu.php') ?>
		</nav>

		<main id="main2" role="main">


		<!-- Place somewhere in the <body> of your page -->
		<section class="slider">
		<h3>Photos de la promotion 2017</h3>
		<div id="slider" class="flexslider">
		 <ul class="slides">
		  <li>
		    <img src="galerie/sliderphoto1.jpg" alt="Photo 1"/>
		    <p class="flex-caption">Photo de la promotion au bord de la Vernaison</p>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto3.jpg" alt="Photo 3"/>
		    <p class="flex-caption">Les élèves qui travaillent sur leurs postes respectifs</p>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto4.jpg" alt="Photo 4"/>
		    <p class="flex-caption">Les élèves commencent à créer leurs CV en HTML et CSS</p>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto5.jpg" alt="Photo 5"/>
		    <p class="flex-caption">Un élève travaille sur CodeAcademy</p>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto6.jpg" alt="Photo 6"/>
		    <p class="flex-caption">Une élève créée sont CV en HTML et CSS</p>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto7.jpg" alt="Photo 7"/>
		    <p class="flex-caption">En route pour la médiathèque</p>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto9.jpg" alt="Photo 9"/>
		    <p class="flex-caption">Exposition Thibault Brunet à la médiathèque de Pont en Royans</p>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto10.jpg" alt="Photo 10"/>
		    <p class="flex-caption">Construction de maquettes avec des légos</p>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto11.jpg" alt="Photo 11"/>
		    <p class="flex-caption">Construction de maquettes avec des légos</p>
		  </li>
	       </ul>
		</div>
		<div id="carousel" class="flexslider">
		<ul class="slides">
		  <li>
		    <img src="galerie/sliderphoto1.jpg" alt="Photo 1"/>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto3.jpg" alt="Photo 3"/>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto4.jpg" alt="Photo 4"/>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto5.jpg" alt="Photo 5"/>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto6.jpg" alt="Photo 6"/>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto7.jpg" alt="Photo 7"/>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto9.jpg" alt="Photo 9"/>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto10.jpg" alt="Photo 10"/>
		  </li>
		  <li>
		    <img src="galerie/sliderphoto11.jpg" alt="Photo 11"/>
		  </li>
	      </ul>
		</div>
		</section>
	</main>

	    <footer id="footer" role="contentinfo"><?php include('include/inc_footer.php') ?>
	    </footer>

	</div><!-- fin #content -->

	</body>
</html>
