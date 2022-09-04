<?php

class Login_Model extends Model{
    function __construct() {
        echo 111;
        // عقم لكي لا يسيؤا أستخدامة
        parent::__construct();
        // sanatize the  so they can't abuse it.
    }
    public function run($name) {
        //$login      = mysqli_real_escape_string($conn,$_POST['login']);
        //$password   = mysqli_real_escape_string($conn,$_POST['password']);
        echo 'This is Login Model';

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
    public function run2($data){
        $sql = 'INSERT INTO users (user_name, user_email, user_password) VALUES(:username, :email, :password)';
        $stmt = $this->db->connect()->prepare($sql);
       // $this->db->bindParam(':username','user_name', ':email','user_email', ':password','user_password');
        //$stmt->bindValue(1, $is_);
        //$stmt->bindValue(2, $id);
        //$stmt->execute($username, $email, $password);
        //$stmt->execute($data);
        //$stmt->bindParam('user_name',$data) ;
        
        $stmt->execute(array(
            ':user_name' => $data['username'],
            ':email' => $data['email'],
            ':password' => $data['password']
            
        ));
        //Bind values
        /* $stmt->db->bind(':username', $data['user_name']);
        $stmt->db->bind(':email', $data['user_email']);
        $stmt->db->bind(':password', $data['user_password']); */
        //$this->db->execute();
    }
}