<?php

class IndexController {
    public function __construct(){

    }

    public function actionIndex(){
        require_once(ROOT.'./views/main/index.php');
    }
}