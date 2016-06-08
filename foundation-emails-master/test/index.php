<?php

require 'vendor/autoload.php';

$templates = new League\Plates\Engine(__DIR__);

$html = $templates->render('content');
$css = file_get_contents('style.css');

$emogrifier = new \Pelago\Emogrifier($html, $css);
$mergedHtml = $emogrifier->emogrify();

echo $mergedHtml;

?>
