"use strict";

$(document).ready(function(){
	var monObjet = {
		prenom: 'Andréa', 
		nom: 'Buisset',
		github: 'AmbreB',
		simplonline: 'Andréa Buisset',
	};

	for (var element in monObjet){
		$("div[data-me =" +element+"]").find("p").eq(0).html(monObjet[element]);
	};
	$.getJSON("me.json", function(json){
			console.log(json);
	});
});