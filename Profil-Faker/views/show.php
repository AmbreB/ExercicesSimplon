<?php
require_once 'vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create('fr_FR');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jean-Michel Profil</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/app.js"></script>
	<style>
	body, section, h1, p {
		margin:0;
		padding:0;
	}
	body {
		font-family: 'Open Sans', sans-serif;
		font-size:18px;
		background-color:#F0F0F0;
	}
	.profil {
		height:50vh;
		background-image: url('<?php echo $faker->imageUrl($width = 1400, $height = 400, "nature");?>');
		background-size: cover;
		background-attachment: fixed;
		background-repeat: no-repeat;
		filter:grayscale(100%);
		color:white;
	}
	.profil img {
		border-radius: 200px;
		display: block;
		float:left;
		margin:50px;
	}
	.profil h1 {
		padding:150px 0px 0px 20px;
		margin:0;
	}
	.container {
		width:940px;
		margin:0 auto;
	}
</style>
</head>
	<body>
	<section class="profil">
		<div class="container">
			<img src= "<?php echo $faker->imageUrl($width = 300, $height = 300, 'people'); ?>" alt="lorem pixel">
			<h1><?php echo $faker->name; ?></h1>
			<p><?php echo $faker->numberBetween($min = 10, $max = 99); ?> ans</p>
			<p><?php echo $faker->freeEmail; ?></p>
			<p><?php echo $faker->phoneNumber; ?> </p>
		</div>
	</section>
	<section>
		<div class="container">
			<h2></h2>
		</div>
	</section>
	</body>
</html> 