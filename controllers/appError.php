<?php

class AppError extends Controller{
    function __construct(){
        parent::__construct();
        //echo "This is an error!";

        // Assign msg value to the view
        //$this->view->msg("Error 404: This page doesnt exist");

        // Call render function from View class and pass in the url
        
    }
    public function index() {
        $this->view->render('error/appError');
    }
}