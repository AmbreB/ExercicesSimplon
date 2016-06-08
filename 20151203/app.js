'use strict';
/*
$(document).ready(function(){			
	$('a').click(function(){
		$('.hide').toggleClass().hide();
		var attribut = $(this).attr('href');
		$(attribut).show();
	});
});
*/
$(document).ready(function(){
	$('a').click(function(){
		var adresse = $(this).attr('adresse');
		$('.container').load(adresse);
	});
});