<?php

require 'vendor/autoload.php';
use \Michelf\Markdown;

$html = getPostList();

function getPostList() {
	$dossier = "posts/*.md";
	$list = glob($dossier);
	$pages = makeLinkList($list);
	$page = getPagePath($pages);
	return markdownToHTML($page);
}
function makeLinkList($list) {
	$pages = [];

	foreach ($list as $key) {
		$fileName = substr($key, 6, -3);
		array_push($pages, $fileName);

		$title = fopen($key, "r");
		$firstline = Markdown::defaultTransform(fgets($title));

		echo $link = "<a href='?page=" . $fileName . "'>" . $firstline . "</a>";

	}
	return $pages;
}
function getPagePath($pages) {
	if (in_array($_GET["page"], $pages)) {
		$page = "posts/" . $_GET["page"] . ".md";
	}
	return $page;
}
function markdownToHTML($page) {
	$text = file_get_contents($page);
	$html = Markdown::defaultTransform($text);
	return $html;
}
?>