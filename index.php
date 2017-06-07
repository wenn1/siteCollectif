<!doctype html>
<html lang="fr">
<head>
	<?php include('include/inc_head.php') ?>
	<meta name="description" content="Page d'accueil"/>
	<title>Accueil</title>
</head>

<body role="document">
	<div class="content">

					<!-- En-tête de page -->
		<header class="header" role="banner">
			<?php include('include/inc_header.php') ?>
		</header>

					<!-- barre principale de navigation -->
		<nav class="menu" role="navigation">
		    <?php $nav_en_cours = 'accueil'; ?>
		    <?php include('include/inc_menu.php') ?>
		</nav>

					<!-- Page principale -->
		<article id="main" role="main">
		    <h3 class="preambule_main">La formation Dévelo'pont</h3>
		    <h4 class="preambule_main2">Présentation</h4>
		</article>

		<article id="main">
		  <section class="preambule">
		    <h5 id="developont" class="preambule_titre">Qu'est ce que Dévelo'pont ?</h5>
		    <p>Pour la première fois en Isère, dans un petit village authentique adossé au Vercors, Simplon.co propose une formation de développeur(euse) Web, en PHP, gratuite et intensive, de 7 mois à partir d’avril 2017.</p>
		    <p>Mené dans une démarche d’innovation sociale, ce projet constitue un double défi :</p>
		    
		    <ul class="listeAccueil">
		      <li>économique : participer à l’endiguement du chômage en répondant aux besoins de recrutement des entreprises du
		      numérique engagées dans cette démarche citoyenne.</li>
		      <li>social : en agissant sur l’emploi et la qualification de publics marginalisés sélectionnés uniquement sur la base de critères sociaux et de leur motivation, et non selon les diplômes.</li>
		      <figure class="container">
			<img class="imageFlyer" src="galerie/photoflyer.jpg" alt="Flyer develo'pont">
		      </figure>
		  </section>
		</article>
		<article id="main">
		  <section class="preambule">
		    <h5 id="pont" class="preambule_titre">Où se situe Pont-en-Royans ?</h5>
		    <p>La formation se passe à Pont-en-Royans, petite commune du Royans (Massif du Vercors).<br>Le
		    Royans est l'une des 7 régions naturelles du Parc naturel régional du Vercors. Le village se trouve au confluent de la Bourne et de la Vernaison.</p>
		    <p>Cette petite bourgade abrite près de 788 habitants, et représente également un grand lieu de tourisme, grâce notamment au Musée de L'Eau.</p>
		    <p>
		    Ce musée vous propose des visites guidées, des ateliers pédagogiques et des animations adaptées à chaque public.
		    On visite la salle des eaux du monde, la salle des eaux du Vercors, la salle de  cinéma 3D et le bar à eaux, dans
		    lequel une dégustation d'eaux vous attend.
		    </p>
		    <img class="imageAutre effetProfondeur" src="galerie/image-pont-en-royans.png" alt="Pont-en-Royans">
		  </section>
		</article>
		<article id="main">
		  <section class="preambule">
		      <h5 id="formation" class="preambule_titre">Où se passe la formation ?</h5>
		      <p>
			L'entreprise Legrand accueille la formation sur son site de Pont-en-Royans.
		      <br> Elle met à disposition plusieurs salles (cours, repos, administration) ainsi que l'accès à la cafétéria,
			de manière à offrir un cadre adapté pour répondre aux besoins des futurs développeurs.
			</p>
		      <img class="imageAutre effetProfondeur" src="galerie/sliderphoto3.jpg" alt="Les_Locaux">
		  </section>
		</article>
		<!-- Pied de page -->
		<footer id="footer" role="contentinfo"><?php include('include/inc_footer.php') ?>
		</footer>

		<section>
		    <div id="sommaire" class="clear">
		    <div class="box">
		      <h3 class="sommaire_heading">Sommaire</h3>
		      <ul id="menu-lateral">
			<li><a href="#developont">Qu'est-ce que Develo'Pont?</a></li>
			<li><a href="#pont">Où se situe Pont en Royans?</a></li>
			<li><a href="#formation">Où se passe la formation?</a></li>
		      </ul>
		    </div>
		  </div>
		</section>

	</div><!-- fin #content -->

			<!-- Animation du logo Develo'pont sur la page d'accueil -->
		<!--	<script>
			$("p#valid")
							// propriétés CSS au chargement
							.css('top','95%')
							.css('left', '70%')
							// position initiale
							.animate({
										left: '5px',
										top: '3em'
							}, 3500); // Durée de l'animation
					$("#header img")
									// propriétés CSS au chargement
									.css ('position', 'relative')
									.css ('left','100%')
									// position initiale
									.animate({
												left: '10px'
							}, 4000 ); // Durée de l'animation
			</script> -->
</body>
</html>
