<?php $this->layout('layout') ?>

<h1 class="ui header">Liste des utilisateurs</h1>
<table class="ui table">
	<thead>
		<tr>
			<th>
				ID
				<a href="?tri=id&direction=asc"><i class="angle up icon"></i></a>
				<a href="?tri=id&direction=dsc"><i class="angle down icon"></i></a>
			</th>
			<th>
				Nom
				<a href="?tri=nom&direction=asc"><i class="angle up icon"></i></a>
				<a href="?tri=nom&direction=dsc"><i class="angle down icon"></i></a>
			</th>
			<th>
				Prénom
				<a href="?tri=prenom&direction=asc"><i class="angle up icon"></i></a>
				<a href="?tri=prenom&direction=dsc"><i class="angle down icon"></i></a>
			</th>
			<th>
				Date de naissance
				<a href="?tri=naissance_date&direction=asc"><i class="angle up icon"></i></a>
				<a href="?tri=naissance_date&direction=dsc"><i class="angle down icon"></i></a>
			</th>
			<th>
				Adresse
				<a href="?tri=adresse&direction=asc"><i class="angle up icon"></i></a>
				<a href="?tri=adresse&direction=dsc"><i class="angle down icon"></i></a>
			</th>
			<th>
				Téléphone
				<a href="?tri=telephone&direction=asc"><i class="angle up icon"></i></a>
				<a href="?tri=telephone&direction=dsc"><i class="angle down icon"></i></a>
			</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($users as $user) : ?>
		<tr>
			<td class="collapsing"><?= $user->id ?></td>
			<td><a href="/users/<?= $user->id ?>"><?= $user->nom ?></a></td>
			<td><?= $user->prenom ?></td>
			<td><?= $user->naissance_date ?></td>
			<td><?= $user->adresse ?></td>
			<td><?= $user->telephone ?></td>
			<td class="collapsing"><a href="/users/<?= $user->id ?>/edit" class="ui tiny blue button">Editer</a></td>
		</tr>
	<?php endforeach ?>
	</tbody>
	<tfoot>
	    <tr>
	    	<th colspan="8">
	      		<div class="ui pagination menu">
		        	<a class="icon item">
		          		<i class="left chevron icon"></i>
		        	</a>
			        <a class="item">1</a>
			        <a class="item">2</a>
			        <a class="item">3</a>
			        <a class="item">4</a>
			        <a class="icon item">
			          <i class="right chevron icon"></i>
			        </a>
	      		</div>
	    	</th>
	  	</tr>
  	</tfoot>
</table>

<a href="/users/create" class="ui green button">Créer un utilisateur</a>
