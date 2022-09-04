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
        
        //Bind values
        $this->db->bind(':username', $data['user_name']);
        $this->db->bind(':email', $data['user_email']);
        $this->db->bind(':password', $data['user_password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}