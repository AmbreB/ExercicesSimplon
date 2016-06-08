<?php 
	require_once '../lib/controller.php';
	$controller = new Controller;
	$content = $controller->returnPage();
?>
<?php include '../views/parts/header.php'; ?>
	<h1>Coucou</h1>
	<?= $content; ?>
<?php include '../views/parts/footer.php'; ?>