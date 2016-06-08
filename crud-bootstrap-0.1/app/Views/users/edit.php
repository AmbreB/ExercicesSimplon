<?php $this->layout('layout') ?>

<form method="post" action="/users/<?= $user->id ?>/edit" class="ui form">
		<input type="hidden" placeholder="id" name="id" value="<?= $user->id ?>">
	<p>
		<label for="nom">Nom :</label>
		<input type="text" placeholder="Nom" name="nom" value="<?= $user->nom ?>">
	</p>	
	<p>
		<label for="prenom">Prénom :</label>
		<input type="text" placeholder="Prénom" name="prenom" value="<?= $user->prenom ?>">
	</p>	
	<p>
		<label for="naissance_date">Date de naissance :</label>
		<input type="date" placeholder="10/02/1994" name="naissance_date" value="<?= $user->naissance_date ?>">
	</p>	
	<p>
		<label for="adresse">Adresse :</label>
		<input type="text" placeholder="97 route de Narbonne - 31200 TOULOUSE" name="adresse" value="<?= $user->adresse ?>">
	</p>	
	<p>
		<label for="telephone">Téléphone :</label>
		<input type="text" placeholder="06102039109" name="telephone" value="<?= $user->telephone ?>">
	</p>
	<button class="ui button blue">Editer l'utilisateur</button>
</form>