<!doctype html>
<html lang="fr">
<head>
<?php include('include/inc_head.php') ?>
<meta name="description" content="contact"/>
<title>Contact</title>
</head>

<body role="document">
	<div class="content">
		<header class="header" role="banner">
		<?php include('include/inc_header.php') ?>
		</header>

		<nav class="menu" role="navigation">
		<?php $nav_en_cours = 'contact'; ?>
		<?php include('include/inc_menu.php') ?>
		</nav>

		<article  role="main">
		<div id="ancre_main"></div>

		<section id="main">
		<h3 class="heading_page">Formulaire de contact</h3>
		<h4>Veuillez remplir ce formulaire afin de nous contacter</h4>
		<h5>(*) Les champs précédés d'une astérisque sont obligatoires</h5>
		
		<form class="style_contact" method="post" action="resultat.php" enctype="multipart/form-data">
		  <input type="hidden" name="parametre cache" value="parametre caché"/>
		  <fieldset>
		  <legend>Nous contacter par mail</legend>
		  <p class="field">
			  <label for="nom1">*Nom: </label>
			  <input type="text" name="nom1" id="nom1" value="" size="15" maxlength="20" placeholder="Saisir votre nom"/>
		  </p>

		  <p class="field">
			  <label for="prenom1">*Prénom: </label>
			  <input type="text" name="prenom1" id="nom1" value="" size="15" maxlength="20" placeholder="Saisir votre prénom"/>
		  </p>

		  <p class="field">
			  <label for="email">*Email: </label>
			  <input id="email" class="h5-email" type="email"
			  maxlength="40" size="30" name="email" required="required" value="" placeholder="Saisir une adresse email valide"/>
		  </p>

		  <p class="field">
			  <label for="sujet">*Objet du message: </label>
			  <input id="sujet" class="h5-sujet" type="sujet" maxlength="30" size="20" name="sujet" required="required" value=""
			  placeholder="objet du message"/>
		  </p>
		  <p class="field">
			  <label for="nom2" class="VerticalAlignTop">*Message:</label>
			  <textarea name="message" id="nom2" cols="80" rows="4" placeholder="Saisir votre message"></textarea>
		  </p>
		  <p class="button">
			  <input type="reset" value="Annuler"/>
			  <input type="submit" value="Envoyer"/>
		  </p>
		  </fieldset>
	       </form>
		
		</section>


		<section id="main">
		  <h3 class="heading_page">Un plan d'accès aux locaux de Dévelopont</h3>
		  <h4>Nous rendre visite</h4>
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22545.28288336239!2d5.327721931044048!3d45.06225797520093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478abb82046dcbe1%3A0xce9c6af3c67f8452!2s38680+Pont-en-Royans!5e0!3m2!1sfr!2sfr!4v1496045830866" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><a href="https://www.google.fr/maps/place/Legrand+France/@45.1481754,5.3131242,15z/data=!4m5!3m4!1s0x0:0x88bdc0e74bfeab06!8m2!3d45.1481754!4d5.3131242" style="color:#0000FF;text-align:left"></a>
		</section>
				
		<section id="main">		
		<h3 class="heading_page">Itinéraires</h3>
		 <img class="dessin" src="galerie/dessinRegion.gif" alt="dessin de la région">
		<h4>Plans de route</h4>
		<p> <a target="_blank" class="contact" href="https://fr.mappy.com/#/8/M2/TItinerary/IFRSaint-Marcellin%2038160|TOPont-en-Royans%2038680|GP1.442|GTpetrol/N151.12061,6.11309,5.50796,45.19107/Z10/">Depuis St Marcellin(25 min)</a></p>
		<p> <a target="_blank" class="contact" href="https://fr.mappy.com/#/6/M2/TItinerary/IFRGrenoble%2038000-38100|TOPont-en-Royans%2038680|GP1.446|GTpetrol/N151.12061,6.11309,5.11601,44.99795/Z11/">Depuis Grenoble(50 min)</a></p>
		<p><a target="_blank" class="contact" href="https://fr.mappy.com/#/8/M2/TItinerary/IFRValence%2026000|TOPont-en-Royans%2038680|GP1.446|GTpetrol/N151.12061,6.11309,5.30803,45.10758/Z11/">Depuis Valence(45 min)</a></p>	      
		</section>
		</article>
		
		<footer id="footer" role="contentinfo"><?php include('include/inc_footer.php') ?>
		</footer>

		</div><!-- fin #content -->
	</body>
</html>
