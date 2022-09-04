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
    public static function create($password) {
        return echo $bcrypt_hash;
        $bcrypt_verify = password_verify($pwd, $bcrypt_hash);

    }
}