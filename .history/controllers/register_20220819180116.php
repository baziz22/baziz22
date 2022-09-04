<?php

class Register extends Controller{
    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->view->render('users/register');
    }
    public function register_user(){
        /* $sql = 'INSERT INTO users (user_name, user_email, user_password) VALUES(:username, :email, :password)';
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        //$stmt->execute($username, $email, $password);
        $stmt->execute();
        $stmt->closeCursor(); */
        
        /* $stmt->db->execute(array(
            ':username' => $data['user_name'],
            ':email' => $data['user_email'],
            ':password' => $data['user_password']
            
        )); */
        //Bind values
        /* $stmt->db->bind(':username', $data['user_name']);
        $stmt->db->bind(':email', $data['user_email']);
        $stmt->db->bind(':password', $data['user_password']); */
        //$this->db->execute();
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $data = [
        'username' => trim($_POST['username']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirmPassword' => trim($_POST['confirmPassword']),
        'usernameError' => '',
        'emailError' => '',
        'passwordError' => '',
        'confirmPasswordError' => ''
    ];
        $username = filter_input(INPUT_POST, 'username', FILTER_DEFAULT);
        $email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
        $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
        $this->loadModel('register');
        $this->model->register(, $data); 
    }
}

?>