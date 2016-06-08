<?php $this->layout('layout') ?>

<table class="ui definition table centered">
  	<tbody>
    	<tr>
      		<td class="two wide column">Nom</td>
      		<td><?= $user->nom ?></td>
    	</tr>
    	<tr>
      		<td>Prenom</td>
      		<td><?= $user->prenom ?></td>
    	</tr>
    	<tr>
      		<td>Date de naissance</td>
      		<td><?= $user->naissance_date ?></td>
    	</tr>
    	<tr>
      		<td>Adresse</td>
      		<td><?= $user->adresse ?></td>
    	</tr>
    	<tr>
      		<td>Téléphone</td>
      		<td><?= $user->telephone ?></td>
    	</tr>
  	</tbody>
</table>
<form action="/users/<?= $user->id ?>/delete" method="post">
  <a href="/users/<?= $user->id ?>/edit" class="ui blue button">Modifier l'utilisateur</a>
  <button class="ui red button">Supprimer l'utilisateur</button>
</form>