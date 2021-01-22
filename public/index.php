<?php 

session_start();
// error_reporting(E_ALL);

$routes = array(
   array('url' => '#^$|^\?#', 'view' => 'hello'),
   array('url' => '#^about/#i', 'view' => 'about'),
   array('url' => '#requisition/#i', 'view' => 'requisition')
);

$url = ltrim($_SERVER['REQUEST_URI'], '/');

foreach ($routes as $route) {
	if( preg_match($route['url'], $url, $match) ){
		$view = $route['view'];
		break;
	}
}

if( empty($match) ){
	include 'views/404.php';
	exit;
}

extract($match);
include "controllers/{$view}_controller.php";
?>