<?php

class Login extends Controller{
    //const USERNAME_FIELD_REQUIRED = "Username can't be empty";
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
            // sanitize and validate name
        $username = filter_input(INPUT_POST, 'login-user-name', FILTER_DEFAULT);
        //$inputs['username'] = $username;
        //echo ($username);
        //echo "adsfas". var_dump($inputs);
        $this->loadModel('login');
        //$this->model->login_user($username); 
        $this->model->check_login_username($username); 
        //$username = $_POST['username'];
        //echo $_REQUEST['username'];
        /* if(!empty($username)) {
            //echo BR .'username : '. $username . BR;
            echo ($username) ? 'true' : "false";
            $username = trim($username);
            if ($username === '') {
                $errors['username'] =  "Username can't be empty";
            }
            //$this->loadModel('login');
            //$this->model->login_user($username); 
        }  else {
            $input['username'] = $username;
            $errors['username'] = "Username can't be empty";
            //$message = "username can't be empty!";
            //$invalid_message = $_POST['invalidFeedback'];
            //header("Location: ../login?invalid_message:$message");
        }  */
        }
        
        
    }
    
}