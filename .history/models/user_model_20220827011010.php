<?php

class User_Model extends Model{
    function __construct() {
        //echo 222;
        parent::__construct();
        // sanatize the  so they can't abuse it.
    }
    public function userList() {
        $sql = "SELECT user_id, user_name, user_role, user_status FROM users";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    public function create($data){
        //echo  BR. 'u: '.$username . BR;
        //echo 'p: '.$pass . BR;
        //echo 'r: '.$the_role . BR;
        pre_r($data);
        $sql = "INSERT INTO `users` (user_name, user_email, user_password, user_role) VALUES (:username, :email, :password, :role)";
        $stmt = $this->db->connect()->prepare($sql);
        //$this->$stmt->bindParam(':username',$username, ':password',$password, ':role',$role);
        //$stmt->bindValue(1, $is_);
        //$stmt->bindValue(2, $id);
        //$stmt->execute($username, $pass, $the_role);
        $stmt->execute(array(
            ':username' => $data['user_name'],
            ':email' => $data['email'],
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
        $sql = 'UPDATE users SET user_name = :username, user_password = :password, user_role = :the_role WHERE user_id = :id';
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(array(
            ':id' => $data['id'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':the_role' => $data['role']
        ));
        //header('Location:' . URLROOT . 'user');
    }
    public function userSingleList($id) {
        $sql = "SELECT user_id, user_name, user_role FROM users WHERE user_id = :id";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(array(
            ':id' => $id
        ));
        $data = $stmt->fetch();
        return $data;
    }
    public function delete($id){
        $sql = 'DELETE FROM users WHERE user_id = :id';
        $stmt = $this->db->connect()->prepare($sql);
        //$stmt->bindValue($id);
        //$stmt->execute([$id, $author]);
        $stmt->execute(
            array(
                ':id' => $id
            )
        );
    }
    public function total_records(){
      $query = "SELECT * FROM users";
      $stmt = $this->db->connect()->prepare($query);
      $stmt->execute();
      $data = $stmt->rowCount();
      return $data;
    }
    public function pagination($start_from, $per_page_record){
      $query = "SELECT * FROM users LIMIT $start_from, $per_page_record";
      $stmt = $this->db->connect()->prepare($query);
      $stmt->execute();
      $data = $stmt->rowCount();
      return $data;
    }
    public function records_all(){
      $sql = "SELECT user_id, user_name, user_role, user_status FROM users";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        var_dump( $data);
    }
    public function print_something(){
      echo "Something";
    }
}