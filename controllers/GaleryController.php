<?php

require_once(ROOT.'/models/Galery.model.php');

class GaleryController {

    public function __construct(){
        
    }

    public function actionIndex(){
        $photos = Galery::getPhotos();
        include_once(ROOT.'/views/galery/galery.php');
    }

    public function actionType($param){
        if($param[0]=="photos"){
            $photos = Galery::getPhotos();
            $categories = Galery::getPhotosCategories();
            include_once(ROOT.'/views/galery/photo.php');
        }
        else if($param[0]=="videos"){
            include_once(ROOT.'/views/galery/video.php');
        }
    }
}