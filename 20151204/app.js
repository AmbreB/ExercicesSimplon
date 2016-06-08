'use strict';
$(document).ready(function(){
	var monObjet = { 
		nom: 'Buisset', 
		prenom: 'Andréa', 
		github: 'AmbreB',
	};
	for (var element in monObjet) {
		console.log($("div[data-me=" + element + "]"));
		$("div[data-me=" + element + "]").find("p").eq(0).html(monObjet[element]);
		console.log(monObjet[element]);
	};
});