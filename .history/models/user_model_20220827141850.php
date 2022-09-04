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
    public function edit($data) {
      $user_status = $this->userList();
      $user_statuse
      pre_r($data);
      if($_SESSION['user_name'] != $data['username'] || Session::get('role') != "owner"){
        return "Sorry, this is not your username!";
      }else{
        $sql = 'UPDATE users SET user_name = :username, user_email = :email, user_role = :the_role WHERE user_name = :username';
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(array(
            ':username' => $data['username'],
            ':email' => $data['email'],
            ':the_role' => $data['role']
        ));
      }
    }
    public function editSave($data) {
        //pre_r($data);
        $sql = 'UPDATE users SET user_name = :username, user_password = :password, user_role = :the_role WHERE user_id = :id';
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(array(
            ':id' => $data['id'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':the_role' => $data['role']
        ));
        echo "<p>" . $data['username']." has been updated</p>";
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
    public function activate_user($id){
        if($_SESSION['user_id'] == $id || Session::get('role') == "owner"){
          $sql = 'UPDATE users SET user_status = 1 WHERE user_id = :id';
          $stmt = $this->db->connect()->prepare($sql);
          //$stmt->bindValue($id);
          //$stmt->execute([$id, $author]);
          $stmt->execute(
              array(
                  ':id' => $id
              )
          );
        }else{
          echo "You have not permission to activate this user";
        }
        
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
      $sql = "SELECT * FROM users";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        /* for ($i=0; $i < count($data); $i++) {
          echo "<pre>"; 
          echo($data[0]['user_id']);
          echo "</pre>"; 
        } */
        //echo($data[0]['user_id']);
        //var_dump( $data);
        return $data;
    }
    public function print_something(){
      echo "Something";
    }
}