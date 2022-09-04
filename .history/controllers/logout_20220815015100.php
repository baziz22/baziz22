<?php

class Logout extends Controller{
    function __construct() {
        parent::__construct();  
    }
    function index() {
        Session::destroy();
        header('Location:' . URLROOT .'index');
        exit;
    }
    public function other($arg = false) {
        $this->view->render('pages/sub/other');
        echo 'we are inside other <br />';
        echo 'Optional: ' . $arg . '<br />' ;

        require 'models/help_model.php';
        $model = new Help_Model();
        print_r($model->blah());
        $this->view->blah = $model->blah();
    }
}