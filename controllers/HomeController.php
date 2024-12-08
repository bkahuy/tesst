<?php
require_once APP_ROOT.'/services/NewsService.php';
class HomeController{
    public function index(){
        //goi du lieu tu newsService
        $newService = new NewsService();
        $news = $newService->getAllNews();
        //render du lieu ra homepage
        include APP_ROOT.'/views/home/index.php';
        include APP_ROOT.'/views/admin/news/index.php';
    }

}