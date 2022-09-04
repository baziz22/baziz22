<?php

class Login_Model extends Model{
    function __construct() {
        //echo "I came from Login_Model";
        //$this->db = new Database;
        parent::__construct();
        // sanitize the  so they can't abuse it.
    }
    public function check_login_username($name, $password){
        $login_user_name = $name;
        $sql = "SELECT * FROM users WHERE user_name = :username";
        $stmt = $this->db->connect()->prepare($sql);
        // Bind value: to bind our search string to the placeholder by referring to its position in the SQL query.
        //$stmt->bindParam('user_name',$name);
        $stmt->bindValue(':username', $name);
        //$stmt->bindValue(':password', $password);
        $stmt->execute();
        $data = $stmt->fetch();
        pre_r($_POST);
        var_dump($data);
        $check_password = password_verify($password, $data['user_password']);
        echo "User Password: ".$data['user_password'];
        $count = $stmt->rowCount();
        echo "Count: ".$count.BR;
        echo "Verify Password: ".$check_password.BR;
        //$this->reg = new Register_Model();
        //$hashedb_password = $this->reg->create($password);
        if ($count > 0 && $check_password){
            Session::init();
            Session::set('user_id', $data['user_id']);
            Session::set('username_id', $data['user_id']);
            Session::set('role', $data['user_role']);
            Session::set('loggedIn', true);
            Session::set('status', 'Active');
            header('Location: ../index'); 
        } else {
            // Show an error
            $error_message = 'username or password not correct';
            header("Location: ../login?error_message=$error_message&login-user-name=$login_user_name");
        }
    }
}