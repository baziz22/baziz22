<?php

class Register_Model extends Model{
    function __construct() {
        echo "التسجيل للجاتا بيس";
        // عقم لكي لا يسيؤا أستخدامة
        parent::__construct();
        // sanatize the  so they can't abuse it.
    }
    public function register($data) {
        $this->db->query('INSERT INTO users (user_name, user_email, user_password) VALUES(:username, :email, :password)');
        $stmt = $this->db->connect()->prepare($sql);
        //$this->$stmt->bindParam(':username',$username, ':password',$password, ':role',$role);
        //$stmt->bindValue(1, $is_);
        //$stmt->bindValue(2, $id);
        //$stmt->execute($username, $pass, $the_role);
        $stmt->execute(array(
            ':username' => $data['user_name'],
            
            ':password' => $data['password']
            
        ));
    }
}