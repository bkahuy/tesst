<?php
require_once APP_ROOT.'/services/NewsService.php';
require_once APP_ROOT.'/services/AdminService.php';
class AdminController {

    public function admin(){
        //goi du lieu tu newsService
        $adminService = new NewsService();
        $admins = $adminService->getNewsById();

//        $categoryService = new CategoryService();
//        $categories = $categoryService->getAllCategories();
        //render du lieu ra homepage
        include APP_ROOT.'/views/admin/news/index.php';


    }

}

