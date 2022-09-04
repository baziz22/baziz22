<?php

class View{
    function __construct(){
       $this->model = new Model();
    }

    public function msg(){
        echo 'It appears that this page not found 404';
    }
    
    public function render($name, $noInclude = false) {
        if($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/includes/header.php';
            //require 'views/includes/navigation.php';
            require 'views/' . $name . '.php';
            //require 'views/includes/footer.php';
        }
    }
}