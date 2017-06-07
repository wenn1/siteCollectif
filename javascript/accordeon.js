
$(document).ready(function () {

/* ----------------- Menu accordéon simple ------------------- */

// Masquer les sous-menu sauf ceux dont le parent a une classe = open
	$('#aside li:not(".open") ul').hide();

	/* Remplacer le span par un lien afin d'interagir avec la pseudo-classe :focus
	les éléments de liste ne captent pas le focus lorsque l'utilisateur navigue au clavier
	contrairement aux liens. */
	$('#aside ul > li span').each(function() {
			var TextItem = $(this).text();
			$(this).replaceWith('<a class="chapitre" href="#" title="Afficher le menu">' + TextItem + '</a>');
			});
	
	$('#aside a.chapitre').click(function() {
	
		if ($(this).parent().hasClass('open') ) {
		// Si le menu courant est ouvert: le fermer
		$(this).next().slideUp('slow');
		$(this).parent().removeClass('open');
	}
	else
	{
		// Masquer tous les osus-menu dont le parent a une classe = open
		$('#aside li.open ul').slideUp('slow');
		// Ouvrir le menu courant
		$(this).next().slideDown('slow');
		$(this).parent().addClass('open');
	}
	return false;
});
});