<?php

class Register extends Controller{
    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->view->render('users/register');
    }
    public function register_user(){
        $sql = "SELECT * FROM users WHERE user_name = :username";
        $stmt = $this->db->connect()->prepare($sql);
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
        $username = filter_input(INPUT_POST, 'username', FILTER_DEFAULT);
        $email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
        $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
        $this->loadModel('register');
        $this->model->register($username, $email, $password); 
    }
}

?>