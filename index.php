<?php
require_once './config/config.php';
require_once APP_ROOT.'/services/CategoryService.php';

$categoryService = new CategoryService();
$categories = $categoryService->getAllCategories();

echo "<pre>";
print_r($categories);
echo "</pre>";