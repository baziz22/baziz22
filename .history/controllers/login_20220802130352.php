<?php

class Login extends Controller{
    function __construct() {
        parent::__construct();
    }
    public function index() {
        //require 'models/login_model.php';
        //$model = new Login_Model();
        $this->view->render('users/login');
    }
    public function fun(){
        
        // Talk to the model
        $this->view->model->db->connect();
        
    }
    public function run(){
        
        // Talk to the model
        //$this->loadModel('login');
        
    }
    public function login_run(){
        $username = $_POST['username'];
        echo BR .'username : '. $username . BR;
        
        // Talk to the login_model
        $this->loadModel('login');
        $this->model->run($username);
    }
    public function register_run(){
        //$data = array();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo BR .'username : '. $username . BR;
        echo BR .'email : '. $email . BR;
        echo BR .'password : '. $password . BR;
        
        // Talk to the register_model
        $this->loadModel('login');
        $this->model->run2($username,$email,$password);
        //$this->model->run2($email);
        //$this->model->run2($password);
    }
}