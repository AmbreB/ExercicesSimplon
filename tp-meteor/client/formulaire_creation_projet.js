Template.formulaire_creation_projet.events({
	"click btn_create_project, submit form" :  function(event, template){
		var project_name = template.$(".project_name").val();
		alert(project_name);
	}
});