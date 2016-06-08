<?php
function start(){
	
	if(!isset($_GET['page'])) {
		require 'views/home.php';
	} else {
		$page = $_GET['page'];
		router($page);
	}

}
function router($page){
	if($page === 'truc') {
		require 'views/truc.php';
	} elseif($page === 'coucou'){
		require 'views/coucou.php';
	} else {
		require 'views/home.php';
	}
}

require 'views/header.php';
start();

?>

</body>
</html>