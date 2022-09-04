<?php

class Register_Model extends Model{
    function __construct() {
        echo "التسجيل للجاتا بيس";
        // عقم لكي لا يسيؤا أستخدامة
        //echo "THis is : ", $this;
        parent::__construct();
        // sanatize the  so they can't abuse it.
        //echo "THis is : ", $this;
    }
    public function register() {
        echo "THis is : ";
        echo '<pre>';
        print_r($this);
        echo '</pre>';
        //$this->db->query('INSERT INTO users (user_name, user_email, user_password) VALUES(:username, :email, :password)');
                
        $sql = 'INSERT INTO users (user_name, user_email, user_password) VALUES(:username, :email, :password)';
        $stmt = $this->db->connect()->prepare($sql);
        //$this->db->connect()->prepare($sql);
        // $this->db->bindParam(':username','user_name', ':email','user_email', ':password','user_password');
        //$stmt->bindValue(1, $is_);
        //$stmt->bindValue(2, $id);
        //$stmt->execute($username, $pass, $the_role);
        //$stmt->bindParam('user_name',$data) ;
        
        /* $stmt->db->execute(array(
            ':username' => $data['user_name'],
            ':email' => $data['user_email'],
            ':password' => $data['user_password']
        )); */
        //$this->db->execute();
        //Bind values
        //$this->db->bind(':username', $data['user_name']);
        //$this->db->bind(':email', $data['user_email']);
        //$this->db->bind(':password', $data['user_password']);
        //Execute function
        if ($stmt->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function register_user($username, $email, $password){
        
            echo "THis is : ";
            echo '<pre>';
            print_r($this);
            echo '</pre>';
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
    public function is_username_available($name){
        $sql = "SELECT * FROM users WHERE user_name = :login-user-name";
        $stmt = $this->db->connect()->prepare($sql);
        // Bind value: to bind our search string to the placeholder by referring to its position in the SQL query.
        //$stmt->bindParam('user_name',$name) ;
        $stmt->bindValue(':username', $name);
        $stmt->execute();
        $data = $stmt->fetch();
        $count = $stmt->rowCount();
        if ($count > 0){
            return false;
        } else {
            return true;
        }
    }
    public function is_email_available($email){
        $sql = "SELECT * FROM users WHERE user_email = :login";
        $stmt = $this->db->connect()->prepare($sql);
        // Bind value: to bind our search string to the placeholder by referring to its position in the SQL query.
        //$stmt->bindParam('user_name',$name) ;
        $stmt->bindValue(':username', $email);
        $stmt->execute();
        $data = $stmt->fetch();
        $count = $stmt->rowCount();
        if ($count > 0){
            return false;
        } else {
            return true;
        }
    }
}