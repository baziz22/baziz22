<?php

class Register extends Controller{
    function __construct() {
        parent::__construct();
        
    }
    function index() {
        $this->view->render('users/register');
    }
    public function register_run($message){
        //$data = array();
        
        $username = $_POST['register-user-name'];
        $email = $_POST['register-email'];
        $password = $_POST['register-password'];
        echo BR .'register-user-name : '. $username . BR;
        echo BR .'register-email : '. $email . BR;
        echo BR .'register-password : '. $password . BR;
        
        // Talk to the register_model
        $this->loadModel('register');
        $this->model->register_user($username,$email,$password);
        //$this->model->run2($email);
        //$this->model->run2($password);
    }
}

?>