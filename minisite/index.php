<?php include 'parts/header.php'; ?>

<?php

	// $page = $_GET["page"] . ".php";
	// include 'parts/' . $page;	

	// if ($_GET["page"] == "contact") {
	// 	include 'parts/contact.php';
	// } elseif ($_GET["page"] == "home") {
	// 	include 'parts/home.php';
	// }

	$pages = ["contact", "home"];
	
	if (in_array($_GET["page"], $pages)) {
		include "parts/" . $_GET["page"] . ".php";
	}

?>

<?php include 'parts/footer.php';?>