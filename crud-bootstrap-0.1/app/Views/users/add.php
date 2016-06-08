<?php $this->layout('layout') ?>

<form method="post" action="/users/create" class="ui form">
	<p>
		<label for="nom">Nom :</label>
		<input type="text" placeholder="Nom" name="nom">
	</p>	
	<p>
		<label for="prenom">Prénom :</label>
		<input type="text" placeholder="Prénom" name="prenom">
	</p>	
	<p>
		<label for="naissance_date">Date de naissance :</label>
		<input type="date" placeholder="10/02/1994" name="naissance_date">
	</p>	
	<p>
		<label for="adresse">Adresse :</label>
		<input type="text" placeholder="97 route de Narbonne - 31200 TOULOUSE" name="adresse">
	</p>	
	<p>
		<label for="telephone">Téléphone :</label>
		<input type="text" placeholder="06102039109" name="telephone">
	</p>
	<button class="ui button blue" type="submit">Créer l'utilisateur</button>
</form>