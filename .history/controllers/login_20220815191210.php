<?php

class Login extends Controller{
    const USERNAME_FIELD_REQUIRED = "Username can't be empty";
    //const NAME_REQUIRED = 'Please enter your name';
    //const EMAIL_REQUIRED = 'Please enter your email';
    //const EMAIL_INVALID = 'Please enter a valid email';
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
        $request_method = strtoupper($_SERVER['REQUEST_METHOD']);

        if ($request_method === 'GET') {
            // show the form
            //require __DIR__ . '/inc/get.php';
        } elseif ($request_method === 'POST') {
            // handle the form submission
            //require    __DIR__ .  '/inc/post.php';
            // show the form if the error exists
            /* if (count($errors) > 0) {
                //require __DIR__ . '/inc/get.php';
            } */
            
        }
        
        
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
        $this->model->register_user($username,$email,$password);
        //$this->model->run2($email);
        //$this->model->run2($password);
    }
}