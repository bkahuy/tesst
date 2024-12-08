<?php
require_once APP_ROOT.'/services/NewsService.php';
require_once APP_ROOT.'/services/CategoryService.php';
class HomeController{
    public function index(){
        //goi du lieu tu newsService
        $newService = new NewsService();
        $news = $newService->getAllNews;

        $categoryService = new CategoryService();
        $categories = $categoryService->getAllCategories();
        //render du lieu ra homepage
        include APP_ROOT.'/views/home/index.php';


    }
}