Template.formulaire_saisie_depense.events({
	"click submit_depense, submit form" :  function(event, template){
		var depense_name = template.$(".depense_name").val();
		var depense_fric = template.$(".depense_fric").val();
		alert(depense_name + " a dépensé " + depense_fric + "€");
	}
});