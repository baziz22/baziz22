<?php

class Contact extends Controller{
    function __construct(){
        parent::__construct();
        }
    public function index() {
        $this->view->render('pages/contact');
    }
}