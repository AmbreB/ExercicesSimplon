<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD n things</title>
	<link rel="stylesheet" href="/semantic/semantic.css">
</head>
<body>

	<div class="ui three columns grid centered">
		<div class="row">
			<div class="sixteen wide column">
				<div class="ui menu teal inverted">
					<a href="/" class="item">Home</a>
					<a href="/dummies" class="item">Dummies</a>
					<a href="/hello/Simplonien" class="item">Hello</a>
					<a href="/hello/,%20You%20are%20Awesome" class="item">Again</a>
					<a href="/users" class="item">Users</a>
				</div>
			</div>
		</div>
		<div class="eight wide column">
			
			<?= $this->section('content') ?>
		</div>
	</div>


	<script src="/js/jquery-2.2.1.min.js"></script>
	<script src="/js/semantic.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>