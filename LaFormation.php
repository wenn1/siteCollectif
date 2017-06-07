<!doctype html>

<html lang="fr">

	<head>
			<link rel="stylesheet" href="ModuleTableau/ModuleTableau.css">
			<?php include('include/inc_head.php') ?>
			<meta name="description" content="titre de la page"/>
			<title>La formation</title>
	</head>


	<body role="document">
	     
	    <div class="content">


	    <header class="header" role="banner">
	      <?php include('include/inc_header.php') ?>
	    </header>


	    <nav class="menu" role="navigation">
	    <?php $nav_en_cours = 'formation'; ?>
	    <?php include('include/inc_menu.php') ?>
	    </nav>


	    <article class="LaFormation" role="main">
	    <div id="ancre_main"></div>
		<section id="main">
		    <h3>La formation</h3>
		    <h4 id="formaDev">Develo'Pont ? Qu'est-ce que c'est ?</h4>
		    <p>Cette formation entre dans un double dispositif : le contrat d'aide au retour à l'emploi durable (Cared), financé par la Région et POEC :
		    préparation opérationnelle à l'emploi collectif financée par OPCALIA. Elle sera encadrée par les bénévoles de l'EPN, deux formateurs,
		    une administratrice et une chargée des relations entreprise, tous Pontois.</p>
		    <img src="galerie/logosimplon.png" alt="Logo Simplon">
	      </section>
	    
	    
	      <section id="main">
		  <h4 id="duree">Combien de temps dure la formation ?</h4>

		  <p>
		  6 mois à temps plein sur le centre de formation (avec ou sans 6 mois de stage supplémentaire) :
		  vous êtes à temps plein (35h) sur votre centre et vous avez la possibilité à la fin de la formation de
		  faire 6 mois de stage pour compléter votre apprentissage.
		  </p>
		  <img src="galerie/imageTemps.jpg" alt="Image représentant le temps qui passe">
	      </section>
	    
	    
	    <section id="main">
		    <h4 id="contenu">Que faites-vous durant les 6 mois de formation ?</h4>

		    <p><span class="gris"> Chaque centre de formation possède sa spécialité de langages informatiques.</span></p>
		    <p>Consultez les différents programmes ci-dessous pour en savoir plus</p>

		    <?php include('ModuleTableau/ModuleTableau.html') ?>
	    </section>
	    
	    
	    <section id="main">
		    <h4 id="debouches">Quels sont les débouchés après la formation ?</h4>
		    <ul>
			    <li><span class="gris">Développeur junior</span>, pour continuer à se former au sein d’une équipe</li>
			    <li><span class="gris">Intégrateur web</span>, UX designer…</li>
			    <li>Ou auront la possibilité de mettre à profit les compétences techniques acquises pendant la formation pour exercer d’autres métiers :<span class="gris"> chef de projet web, formateur ou médiateur numérique </span>, community manager…</li>
		    </ul> 
	    </section>
      </article>


	<footer id="footer" role="contentinfo"><?php include('include/inc_footer.php') ?>
	</footer>
	      
      <section>
	  <div id="sommaire" class="clear">
	  <div class="box">
	    <h3 class="sommaire_heading">Sommaire</h3>
	      <ul id="menu-lateral">
		<li><a href="#formaDev">La formation Develo'Pont</a></li>
		<li><a href="#duree">Durée de la formation</a></li>
		<li><a href="#contenu">Contenu de la formation</a></li>
		<li><a href="#debouches">Les débouchés</a></li>
	      </ul>
	  </div>
	  </div>
      </section>

</div><!-- fin #content -->

</body>

</html>
