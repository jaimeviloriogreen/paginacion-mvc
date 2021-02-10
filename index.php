<?php
require_once('database/db.php');
require_once('controllers/MainController.php');

$controller = new MainController();
$controller->Index();

