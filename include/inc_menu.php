<!-- Menu principal -->
<ul>
		<li <?php if ($nav_en_cours == 'accueil') {echo 'id="en-cours"';} ?> ><a href="index.php" >Accueil</a></li >
		<li <?php if ($nav_en_cours == 'formation') {echo 'id="en-cours"';} ?> ><a href="LaFormation.php" >La formation</a></li>
		<li <?php if ($nav_en_cours == 'promo') {echo 'id="en-cours"';} ?> ><a href="lapromoleslocaux.php">La Promo/Les Locaux</a></li>
		<li <?php if ($nav_en_cours == 'slider') {echo 'id="en-cours"';} ?> ><a href="galerie.php">Galerie photos</a></li>
		<li <?php if ($nav_en_cours == 'contact') {echo 'id="en-cours"';} ?> ><a href="contact.php">Contact</a></li>
		<li <?php if ($nav_en_cours == 'partenaires'){echo 'id="en-cours"';} ?> ><a href="partenaires.php">Partenaires</a></li>
</ul>
