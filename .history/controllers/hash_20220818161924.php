<?php

class Hash extends Controller{
    function __construct() {
        parent::__construct();  
    }
    function index() {
        $this->view->render('pages/help');
    }
    public static function create($password) {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    }
}