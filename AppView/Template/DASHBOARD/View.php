<?php 
$config = new Config();
$host = $config->read('mysql','host');
$pass = $config->read('mysql','pass');
$user = $config->read('mysql','user');
$data = $config->read('mysql','data');

$db = new Database($host, $pass, $user, $data);

?>

Hallo