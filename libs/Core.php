<?php

class Core {

    function __construct() {

        //print_r($this->getUrl());
        $url = $this->getUrl();
        if (empty($url[0])) {
            //echo $url[0] . ' is empty';
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }
        
        // Look in 'controllers' folder for first value, ucwords will capitalize first letter.
        // Check if the file exist
        //$file = 'controllers/' . ucwords($url[0]) . '.php';
        $file = 'controllers/' . $url[0] . '.php';
        //echo "file: ". ucwords($file)  . BR;
        if(file_exists($file)) {
            // If exists, set as a new controller
            require_once $file;
            //$controller = new $url[0];
            // Unset 0 Index
            //echo 'before: '.ucwords($url[0]);
            //unset($url[0]);
            //echo 'After: '.$url[0];
            
        } else {
            //echo "File not exists: ".$url[0];
            ///require_once 'controllers/AppError.php';
            //die('File not exists');
            ///$controller = new AppError();
            ///return false;
            //Throw new Exception("The file " . $file . " does not exists!");
            $this->error();
            return false;
        }
        $controller = new $url[0];
        //$controller->loadModel($url[0]);

        

        // Calling methods area
        if (isset($url[2])) {
            if(method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                //echo 'errrrrrrrr';
                $this->error();
            }
        } else {
            if (isset($url[1])) {
                //$controller->{$url[1]}();
                if(method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    //echo 'errrrrrrrr';
                    $this->error();
                }
            } else {
                $controller->index();
            }
        }
        
    }
    function error() {
        require 'controllers/appError.php';
        $controller = new AppError();
        $controller->index();
        return false;
    }
    public function getUrl() {
        //$url = $_GET['url'];
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            // Allows to filter variables as string/number
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // Breaking it into an array
            $url = explode('/', $url);
            return $url;
            //print_r($url);
        } else {
            null;
        }
    }
    function errorr() {
        $this->currentController->AppError();
        return false;
    }
}
