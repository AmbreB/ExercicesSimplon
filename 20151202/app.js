$(document).ready(function(){			// Quand le document est prêt
	$('a').on('click',function(){		// Quand je selectionne un lien 
		$('.hide').hide();				// Cache tous les elements avec la classe "hide"
		var id = $(this).attr('href');	// Récupère l'attribut "href" contenue dans l'élement courant et le place dans la variable "id"
		$(id).show();					// Montre l'element contenu dans la variable "id"
	});
});