<?php

class Index extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        // We have to tell the index controller to render default view
        $this->view->render('pages/index');
        // no Include stuff
        //$this->view->render('pages/index', 1);
    }
    function details()
    {
        $this->view->render('pages/test');
    }
    public function logout() {
        Session::destroy();
        $this->view->render('pages/sub/logouit');
        //header('Location:' . URLROOT .'index');
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
