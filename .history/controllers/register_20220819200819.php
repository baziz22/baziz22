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
        
        $username = $_POST['register_user-name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo BR .'username : '. $username . BR;
        echo BR .'email : '. $email . BR;
        echo BR .'password : '. $password . BR;
        
        // Talk to the register_model
        $this->loadModel('register');
        $this->model->register_user($username,$email,$password);
        //$this->model->run2($email);
        //$this->model->run2($password);
    }
}

?>