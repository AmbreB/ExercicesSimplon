<?php require '../views/head.part.php'; ?>

<h1>Add user</h1>
<form method='post' class='ui form' action='?page=add'>
	<div class="field">
		<label for="name">Nom</label>
		<input type="text" id="name" name="name" placeholder="Entrez un nom">
	</div>
	<div class="field">
		<input type="hidden" name="count" id="count" value="0">
	</div>
	<a href="?page=home"><button class='ui green button'>Add counter</button></a>
</form>

<?php require '../views/footer.part.php'; ?>