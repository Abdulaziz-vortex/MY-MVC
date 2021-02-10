<?php

class AboutController {

    public function __construct(){
        
    }

    public function actionIndex(){
        include_once(ROOT.'/views/about/index.php');
    }

    public function actionPage($id){
        include_once(ROOT.'/views/about/index.php');
    }
}