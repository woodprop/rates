<?php
require_once 'controllers/appController.php';


$cc = new appController();
echo $cc->actionIndex();