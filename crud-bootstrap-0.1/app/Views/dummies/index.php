<?php $this->layout('layout') ?>

<h1 class="ui header">List of dummies</h1>
<table class="ui table">
	<thead>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($dummies as $dummy) : ?>
		<tr>
			<td class="collapsing"><?= $dummy->id ?></td>
			<td><?= $dummy->name ?></td>
			<td class="collapsing"><a href="/dummies/<?= $dummy->id ?>/edit" class="ui tiny red button icon labeled"><i class="icon wrench"></i> Editer</a></td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>