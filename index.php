<?php
// Init
ini_set('session.gc_maxlifetime', time()+ (24 * 60 * 60));
session_start();
error_reporting(E_ALL);

// TIME & DATE SET + CONFIG
date_default_timezone_set('Europe/Berlin');
include $_SERVER['DOCUMENT_ROOT'].'/Core/System/config.php';
$config = new Config();

// PLUGINS
// 

// MAIN CORE
include $_SERVER['DOCUMENT_ROOT'].$config->read('routing','core').'Database.php';
include $_SERVER['DOCUMENT_ROOT'].$config->read('routing','core').'route.class.php';

// ROUTING
$routes = new routes();
$routes->addRoute("", "/", $config->read('routing','template')."DASHBOARD/View.php", true, true);
$routes->addRoute("index", "/index", $config->read('routing','template')."DASHBOARD/View.php", true, true);


// PROCEED OR ERROR HANDLER
if(!empty($_GET) && isset($_GET['page'])) {
    trim('/', ($page = $_GET['page']));
    $routes->proceed('/' . $page);
} else {
    die('Lol - 404');
}