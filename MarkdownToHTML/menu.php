<?php

require __DIR__ . '/vendor/autoload.php';
use \Michelf\Markdown;

$dossier="posts/*.md";
$list=glob($dossier);
$pages = [];

foreach ($list as $key) {

	$fileName = substr($key, 6, -3);
	array_push($pages, $fileName);

	$title = fopen($key, "r");
	$firstline = Markdown::defaultTransform(fgets($title));

	$link = "<a href='?page=" . $fileName . "'>" . $firstline . "</a>";
	echo $link;

}

if (in_array($_GET["page"], $pages)) {
	$page = "posts/" . $_GET["page"] . ".md";
}

$text = file_get_contents($page);
$html = Markdown::defaultTransform($text);

?>