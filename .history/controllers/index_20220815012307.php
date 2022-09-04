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
        header('Location:' . URLROOT .'index');
        exit;
    }
}
