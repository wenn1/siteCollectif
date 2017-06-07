<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include('include/inc_head.php') ?>
	<meta name="description" content="titre de la page"/>
	<title>A propos</title>
</head>

<body role="document">
  <div class="content">
	<header class="header" role="banner">
			<?php include('include/inc_header.php') ?>
	</header>

	<nav class="menu" role="navigation">
		<?php $nav_en_cours = 'credit'; ?>
		<?php include('include/inc_menu.php') ?>
	</nav>

						
	<section id="main">
	  <h4>Liens sites internet :</h4>
	    <ul class="lien_site clear">
	      <li><a class="contact" href="http://simplon.co/" title="site de simplon" target="_blank">Site de Simplon</a></li>
	      <li><a class="contact" href="http://simplon.co/pont-en-royans/" title="site de develo'pont de pont-en-royans" target="_blank">Site de Dévelo'pont</a></li>
	      <li><a class="contact" href="http://vercors-pontenroyans.com/" title="site de la région pont-en-royans" target="_blank">Site de Pont-en-Royans</a></li>
	      <li><a class="contact" href="https://www.legrand.fr/" title="Site de legrand France" target="_blank">Site de Legrand</a></li>
	      <li><a class="contact" href="https://fr-fr.facebook.com/Simplon.co/" title="Le facebook de simplon" target="_blank">Facebook de Simplon</a></li>
	      <li><a class="contact" href="https://www.facebook.com/developont/?hc_ref=PAGES_TIMELINE&fref=nf" title="Le facebook de develo'pont pont-en-royans" target="_blank">Facebook de Dévelo'pont</a></li>
	      <li><a class="contact" href="https://twitter.com/simplonco?lang=fr" title="Twitter de Simplon" target="_blank">Twitter de Simplon</a></li>
	      <li><a class="contact" href="https://twitter.com/developont?lang=fr" title="Twitter de develo'pont pont-en-royans" target="_blank">Twitter de Dévelo'pont</a></li>
	      <li><a class="contact" href="https://www.epn-du-royans.fr/" title="Site de l'EPN de pont-en-royans" target="_blank">EPN de Pont-en-Royans</a></li>
	      <li><a class="contact" href="http://www.europe-centre.eu/fr/42/Le_programme_LEADER.html" title="Site du Programme LEADER" target="_blank">Le Programme LEADER</a></li>
	    </ul>
	</section>


	<!-- Pied de page -->
	<footer id="footer" role="contentinfo">
	<?php include('include/inc_footer.php') ?>
	</footer>

	</div><!-- fin #content -->
</body>

</html>