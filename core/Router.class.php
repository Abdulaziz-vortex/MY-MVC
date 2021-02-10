<?php

namespace Core;

class Router {

    private $routes; // routes page

    public function __construct(){
        $this->routes = include(ROOT.'/config/routes.conf.php');
    }

    // gets the request string

    private function getURI(){
        if(!empty($_SERVER['REQUEST_URI']))return trim($_SERVER['REQUEST_URI'],'/');
    }

    public function run() {

        // 1.get request string URI

       $uri = $this->getURI();

    //    echo $uri;

        // 2. check uri from routes list

        foreach($this->routes as $uriPattern => $path){

            
            if(preg_match("#$uriPattern#", $uri)){

                $localPath = preg_replace("#$uriPattern#", $path, $uri);
                $segments = explode('/', $localPath);

                // 3. if there is such route , define controller and action

                $controller = ucfirst(array_shift($segments)."Controller");
                
                $action = 'action'.ucfirst(array_shift($segments));

                // 4. include file with controller

                
                $controllerFile = ROOT.'/controllers/'. $controller .'.php';
                
                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                }
                
                // 5. Create instance (object) , call method of controller (action)


                $controllerObj = new $controller;

                $controllerObj->$action($segments);

                break;
            }

        }
        

    }
    
}