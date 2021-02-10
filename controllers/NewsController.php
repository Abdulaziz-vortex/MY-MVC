<?php

require_once(ROOT.'/models/News.model.php');

class NewsController {

    public function __construct(){
        
    }

    public function actionIndex(){
        $categories = News::getCategories();
        $news = News::getAllNews();
        require_once(ROOT.'/views/news/index.php');
    }
    public function actionPage($param){
        if(isset($_POST['search_btn'])){
            $search = $_POST['search'];
            $search_by = $_POST['search_by'];
            $sort_by = $_POST['sort_by'];

            if(strlen($search)>0){
                $news = News::SearchNews($search, $search_by, $sort_by, $param[0]);
            }else{
                $news = News::SortNews($sort_by, $param[0]);
            }
        }else{
            $news = News::getCategoryNews($param[0]);
        }
        $categories = News::getCategories();

        require_once(ROOT.'/views/news/category.php');
    }


    public function actionFull($param){
        $news = News::getById($param[1]);
        $categories = News::getCategories();
        require_once(ROOT.'/views/news/full.php');
    }
}