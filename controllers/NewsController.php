<?php
require_once APP_ROOT.'/services/NewsService.php';
class NewsController{
    public function detail(){
        //goi du lieu tu newsService
        $newsService = new NewsService();
        $news = $newsService->getAllNews();
        //render du lieu ra homepage
        include APP_ROOT.'/views/news/detail.php';
    }
}