<?php

class Register extends Controller{
    function __construct() {
        parent::__construct();
        
    }
    function index() {
        $this->view->render('users/register');
    }
    public function register_run(){
        //$data = array();
        $username = $_POST['user-name'];
        $email = $_POST['user-email'];
        $password = $_POST['user-pwd'];
        echo BR .'username : '. $username . BR;
        echo BR .'user-email : '. $email . BR;
        echo BR .'user-pwd : '. $password . BR;
        
        // Talk to the register_model
        $this->loadModel('login');
        $this->model->register($username,$email,$password);
        //$this->model->run2($email);
        //$this->model->run2($password);
    }
}

?>