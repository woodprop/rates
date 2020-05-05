<?php
require_once 'controllers/appController.php';

// Определяем переданное действие
$action = 'action';
if (isset($_GET['a'])){
    $action .= $_GET['a'];
}
else $action .= 'index';
//-----------------------------

$controller = new appController();
$controller->$action();