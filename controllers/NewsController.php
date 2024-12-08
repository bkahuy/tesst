<?php
require_once APP_ROOT.'/services/NewsService.php';
class NewsController{
    public function detail(){
        //goi du lieu tu newsService
        $newService = new NewsService();
        $newsbyid = $newService->getNewsById($_GET['id']);
        //render du lieu ra homepage
        include APP_ROOT.'/views/news/detail.php';
    }
}