<?php
require_once './config/config.php';
//require_once APP_ROOT.'/controllers/HomeController.php';

//$homeController = new HomeController();
//$homeController->index();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($controller == 'home') {
    require_once APP_ROOT.'/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
}else if ($action == 'new') {
    require_once APP_ROOT.'/controllers/NewsController.php';
    $newController = new NewsController();
    $newController->detail();
}