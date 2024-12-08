<?php
require_once './config/config.php';
require_once APP_ROOT.'/libs/DBConnection.php';


$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

if ($controller == 'home') {
    require_once APP_ROOT.'/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
    $categoryController = new HomeController();
    $categoryController->index();
}
else if ($controller == 'new') {
    require_once APP_ROOT.'/controllers/NewsController.php';
    $newController = new NewsController();
    $newController->detail();
}

//else if ($action == 'new') {
//    require_once APP_ROOT.'/controllers/NewsController.php';
//    $newController = new NewsController();
//    $newController->detail();
//}

