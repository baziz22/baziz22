<?php

class User_Model extends Model{
    function __construct() {
        echo 222;
        parent::__construct();
        // sanatize the  so they can't abuse it.
    }
    public function userList() {
        $sql = "SELECT user_id, user_name, role FROM users";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    public function create($data){
        //echo  BR. 'u: '.$username . BR;
        //echo 'p: '.$pass . BR;
        //echo 'r: '.$the_role . BR;
        
        $sql = "INSERT INTO `users` (user_name, user_password, role) VALUES (:username, :password, :role)";
        $stmt = $this->db->connect()->prepare($sql);
        //$this->$stmt->bindParam(':username',$username, ':password',$password, ':role',$role);
        //$stmt->bindValue(1, $is_);
        //$stmt->bindValue(2, $id);
        //$stmt->execute($username, $pass, $the_role);
        $stmt->execute(array(
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':role' => $data['role']
        ));
    }

    public function edit($id) {
        /* $sql = 'UPDATE users SET role = :role WHERE id = :id';
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(
            array(
                ':id' => $id
            )
        ); */
    }

    public function editSave($data) {
        pre_r($data);
        $sql = 'UPDATE users SET user_name = :username, password = :password, role = :the_role WHERE user_id = :id';
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(array(
            ':id' => $data['user_id'],
            ':username' => $data['user_name'],
            ':password' => $data['user_password'],
            ':the_role' => $data['role']
        ));
        //header('Location:' . URLROOT . 'user');
    }
    public function userSingleList($id) {
        $sql = "SELECT id, user_name, role FROM users WHERE id = :id";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(array(
            ':id' => $id
        ));
        $data = $stmt->fetch();
        return $data;
    }
    public function delete($id){
        $sql = 'DELETE FROM users WHERE id = :id';
        $stmt = $this->db->connect()->prepare($sql);
        //$stmt->bindValue($id);
        //$stmt->execute([$id, $author]);
        $stmt->execute(
            array(
                ':id' => $id
            )
        );
    }  
}