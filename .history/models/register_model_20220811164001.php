<?php

class Register_Model extends Model{
    function __construct() {
        echo "التسجيل للجاتا بيس";
        // عقم لكي لا يسيؤا أستخدامة
        //echo "THis is : ", $this;
        parent::__construct();
        // sanatize the  so they can't abuse it.
        echo "THis is : ", $this;
    }
    public function register($username, $email, $password){
        $sql = 'INSERT INTO users (user_name, user_email, user_password) VALUES(:user-name, :user-email, :user-pwd)';
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->bindValue(':user-name', $username);
        $stmt->bindValue(':user-email', $email);
        $stmt->bindValue(':user-pwd', $password);
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

