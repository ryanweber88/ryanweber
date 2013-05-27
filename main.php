<?php
// Header
require_once '/var/www/ryanweber/public_html/vendor/autoload.php';
$loader = new Twig_Loader_String();
$loader = new Twig_Loader_Filesystem('/var/www/ryanweber/public_html/XHTML');
$twig = new Twig_Environment($loader);
try{
	echo 'try';
	echo $twig->render('home.html.twig', array('name' => 'Ryan'));
} catch (Exception $e){
	echo_r($e);
	die;
}
?>