<?php require '../views/head.part.php'; ?>

<h1>Here's my home !</h1>

<ul>
	<?php 

	$counters = new Counter();
	foreach ($counters->all() as $c) : ?>

		<li><a href="?page=show&id=<?php echo $c->id ?>">
				<span class="herecomethenumber<?php echo $c->id ?>">
					<?php echo $c->count ?>
				</span> 
				<?php echo $c->name ?>
			</a>
			<button class="ui mini green" counter-id="<?php echo $c->id ?>">+1</button>
		</li>
	<?php endforeach; ?>
</ul>
<a href="?page=add"><button class='ui green button'>Add counter</button></a>
<?php require '../views/footer.part.php'; ?>