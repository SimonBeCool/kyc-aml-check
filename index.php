<?php
/*

    @author : Simon Bucher
    @nameof : KYC-CHECK-AML

*/

// Init
ini_set('session.gc_maxlifetime', time()+ (24 * 60 * 60));
session_start();
error_reporting(E_ALL);

// TIME & DATE SET + CONFIG Init
date_default_timezone_set('Europe/Berlin');
include $_SERVER['DOCUMENT_ROOT'].'/Core/System/config.php';

// PLUGINS
include $_SERVER['DOCUMENT_ROOT'].'/Core/Plugins/lang.plugin.php';

// SETUP
$config = new Config();

// MAIN CORE
include $_SERVER['DOCUMENT_ROOT'].$config->read('routing','core').'Database.php';
include $_SERVER['DOCUMENT_ROOT'].$config->read('routing','core').'route.class.php';

// ROUTING
$routes = new routes();
$routes->addRoute("", "/", $config->read('routing','template')."Login/View.php", true, true);
$routes->addRoute("index", "/index", $config->read('routing','template')."Login/View.php", true, true);
$routes->addRoute("dashboard", "/dashboard", $config->read('routing','template')."Dashboard/View.php", true, true);


// PROCEED OR ERROR HANDLER
if(!empty($_GET) && isset($_GET['page'])) {
    trim('/', ($page = $_GET['page']));
    $routes->proceed('/' . $page);
} else {
    die('Lol - 404');
}