<?php

class Login extends Controller{
    const USERNAME_FIELD_REQUIRED = "Username can't be empty";
    const NAME_REQUIRED = 'Please enter your name';
    const EMAIL_REQUIRED = 'Please enter your email';
    const EMAIL_INVALID = 'Please enter a valid email';
    function __construct($username_field_required) {
        $this->
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
        // sanitize and validate name
        $username = filter_input(INPUT_POST, 'username', FILTER_DEFAULT);
        $inputs['username'] = $username;
        
        if ($username) {
            $username = trim($username);
            if ($username === '') {
                $errors['username'] = USERNAME_FIELD_REQUIRED;
            }
        } else {
            $errors['name'] = NAME_REQUIRED;
        }
        $username = $_GET['username'];
        if(!empty($username)) {
            echo BR .'username : '. $username . BR;
            
            // Talk to the login_model
            $this->loadModel('login');
            $this->model->login_user($username);
        } else {
            $message = "username can't be empty!";
            $invalid_message = $_POST['invalidFeedback'];
            header("Location: ../login?invalid_message:$message");
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