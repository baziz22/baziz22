<?php

class Login_Model extends Model{
    function __construct() {
        echo 111;
        $this->db = new Database;
        // عقم لكي لا يسيؤا أستخدامة
        //parent::__construct();
        // sanitize the  so they can't abuse it.
    }
    public function check_login_username($name, $password){
        $login_user_name = $name;echo "password: ". $password;
        $sql = "SELECT * FROM users WHERE user_name = :username and user_password = :password";
        //$sql = "SELECT * FROM users WHERE user_password = :password";
        $stmt = $this->db->connect()->prepare($sql);
        // Bind value: to bind our search string to the placeholder by referring to its position in the SQL query.
        //$stmt->bindParam('user_name',$name) ;
        $stmt->bindValue(':username', $name);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        $data = $stmt->fetch();
        pre_r($_POST);
        var_dump($data);
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        $check_password = password_verify($hashed_password, $data['user_password']);
        echo "User Password: ".$data['user_password'];
        $count = $stmt->rowCount();
        $this->reg = new Register_Model();
        $hashedb_password = $this->reg->create($password);
        if ($count > 0){
            //echo "user '$name' is not available!";
            // login
            
                Session::init();
                Session::set('role', $data['role']);
                Session::set('loggedIn', true);
                header('Location: ../index'); 
            } else {
            $error_message = 'username or password not correct';
            header("Location: ../login?error_message=$error_message&login-user-name=$login_user_name&password=$password");
            
            //echo "user $name not found!";
            //header("Location: ../login");
            //echo "user $name not found!";
            }
    }/* 
    public function check_username($name){
        $sql = "SELECT * FROM users WHERE user_name = :username";
        $stmt = $this->db->connect()->prepare($sql);
        // Bind value: to bind our search string to the placeholder by referring to its position in the SQL query.
        //$stmt->bindParam('user_name',$name) ;
        $stmt->bindValue(':username', $name);
        $stmt->execute();
        //$data = $stmt->fetch();
        //print_r($data);
        $count = $stmt->rowCount();
        if ($count > 0){
            echo "user '$name' is not available!";
        } else {
            echo "user $name not found!";
        }
    }
    public function login_user($name) {
        $sql = "SELECT * FROM users WHERE user_name = :user_name";
        $stmt = $this->db->connect()->prepare($sql);
        // Bind value: to bind our search string to the placeholder by referring to its position in the SQL query.
        $stmt->bindParam('user_name',$name) ;
        $stmt->execute();
        $data = $stmt->fetch();
        //print_r($data);
        $count = $stmt->rowCount();
        //BR;

        echo ($count);
        if ($count > 0){
            // login
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            header('Location: ../index');

        } else {
            // Show an error
            //header('Location: login');
            echo 'Username is Error!';
            header("Location: ../login?username=$name");
        }
    } */
    
    
}