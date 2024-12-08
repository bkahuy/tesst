<?php
require_once APP_ROOT.'/services/NewsService.php';
class NewsController{
    public function detail(){
        //goi du lieu tu newsService
        $newService = new NewsService();
        $newsbyid = $newService->getNewsById($_GET['id']);
        //render du lieu ra homepage
        include APP_ROOT.'/views/News/detail.php';
    }

    // Xử lý tìm kiếm tin tức
    public function search() {
        $keyword = $_GET['keyword'] ?? '';
        echo $keyword;
        if ($keyword) {
            $searchService = new NewsService();
            // Gọi phương thức tìm kiếm trong model
            $newsResults = $searchService->searchNews($_GET['keyword']);

            include APP_ROOT.'/views/news/search.php';
        } else {
            echo "Vui lòng nhập từ khóa tìm kiếm!";
        }
    }
}