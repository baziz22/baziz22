<?php

class Controller {
    
    function __construct(){
        //echo 'Main Controller! <br />';
        // instantiate view inside base controller
        $this->view = new View();
        //$this->view = new Database();
        Session::init();
        
    }
    
    public function loadModel($name) {
        $modelext = '_model';
        $path = 'models/' . $name . $modelext . '.php';
        if(file_exists($path)) {
            //echo 'File _model exists' . BR;
            //echo $path . BR;
            require_once 'models/' . $name . $modelext . '.php';
            //echo '$name: ' . $name . BR;
            $model_name = $name.$modelext;
            //echo '$model Name: ' . $model_name . BR;
            $this->model = new $model_name;
        } else {
            echo "File not exists _model";
        }
    }
    public function selectAllUsers() {
        //$this->getAllUser();
    }
}