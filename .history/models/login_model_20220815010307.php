<?php

class Login_Model extends Model{
    function __construct() {
        echo 111;
        // عقم لكي لا يسيؤا أستخدامة
        parent::__construct();
        // sanatize the  so they can't abuse it.
    }
    public function check_username($name){
        $sql = "SELECT * FROM users WHERE user_name = :username";
        $stmt = $this->db->connect()->prepare($sql);
        // Bind value: to bind our search string to the placeholder by referring to its position in the SQL query.
        //$stmt->bindParam('user_name',$name) ;
        $stmt->bindValue(':username', $name);
        $stmt->execute();
        $data = $stmt->fetch();
        print_r($data);
        $count = $stmt->rowCount();
        if ($count > 0){
            echo 'user \"$name\" is not available!';
        } else {
            echo "user $name not found!";
        }
    }
    public function run($name) {
        $sql = "SELECT * FROM users WHERE user_name = :user_name";
        $stmt = $this->db->connect()->prepare($sql);
        // Bind value: to bind our search string to the placeholder by referring to its position in the SQL query.
        $stmt->bindParam('user_name',$name) ;
        $stmt->execute();
        $data = $stmt->fetch();
        pre_r($data);
        $count = $stmt->rowCount();
        BR;

        echo ($count);
        if ($count > 0){
            // login
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            header('Location: ../dashboard');

        } else {
            // Show an error
            header('Location: login');
        }
    }
    public function register_user($username, $email, $password){
        $sql = 'INSERT INTO users (user_name, user_email, user_password) VALUES(:username, :email, :password)';
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        //$stmt->execute($username, $email, $password);
        $stmt->execute();
        $stmt->closeCursor();
        
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
    }
}