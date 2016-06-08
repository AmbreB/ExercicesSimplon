<?php require '../views/head.part.php'; ?>
<h1> SHOW ME </h1>

<?php 

$counters = new Counter();
$c = $counters->get($_GET['id']); ?>

<h2><?php echo $c->name; ?> : <span class="herecomethenumber<?php echo $c->id ?>"><?php echo $c->count ?></span></h2>

<button class="ui green button" counter-id="<?php echo $c->id ?>">+1</button></br></br>

<?php require '../views/footer.part.php'; ?>