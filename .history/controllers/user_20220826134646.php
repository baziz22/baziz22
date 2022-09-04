<?php

class User extends Controller{
    function __construct(){
        parent::__construct();
        //Session::init();
        $logged = Session::get('loggedIn');
        $role = Session::get('role');
        if($logged == false || $role != 'owner') {
            Session::destroy();
            header('Location:' . URLROOT .'login');
            exit;
        }
        //$this->loadModel('user');
        //pre_r($_SESSION);
        // Set javascript
        //$this->view->js = array('pages/js/default.js');
    }
    public function index() {
        $id = $_SESSION['user_id'];
        $this->loadModel('user');
        $this->view->user = $this->model->userSingleList($id);
        //print_r($this->view);
        $this->view->userList = $this->model->userList();
        $this->view->total_records = $this->model->total_records();
        $this->view->paginate = $this->model->pagination($start_from, $per_page_record);
        $this->view->render('users/user');
        //$this->model->edit($id);
    }
    public function check_user($username = true) {
        $check_username = 'null';
        $username = $_POST['search-username'];
        $this->loadModel('register');
        if (!$this->model->is_username_available($username)) {
            $check_username = $username . ' Found!';
        } else {
            $check_username = $username . " Not Found!";
        }
        echo $check_username;
        header("Location: " . URLROOT . "../user?search-result=$check_username");
    }
    //Return an array
    public function resultSet() {
        $this->db->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function create() {
        
        $data = array();
        $data['user_name'] = $_POST['username'];
        $data['email'] = $_POST['email'];
        $data['password'] =$_POST['password'];
        $data['role'] = $_POST['role'];
        //pre_r($data);
        //$username   = $_POST['username'];
        //$pass   = $_POST['pwd'];
        //$the_role       = $_POST['the_role'];

        $this->loadModel('user');
        $this->model->create($data);
        //$this->model->create($username, $pass, $the_role);
        //echo '$username'.$username;
        //echo '$username'.$pass;
        //echo '$username'.$the_role .BR;
        header('Location:' . URLROOT . '../user');

    }
    public function edit($id) {
        /* // Fetch individual user
        $this->loadModel('user');
        //$this->model->userSingleList($id);
        $this->view->user = $this->model->userSingleList($id);
        //$this->view->user = $this->model->userSingleList($id);
        $this->view->render('users/edit');
        //$this->model->edit($id); */
    }
    public function editSave($id) {
        $data = array();
        $data['id'] = $id;
        $data['username'] = $_POST['username'];
        $data['password'] =$_POST['password'];
        $data['role'] = $_POST['the_role'];
        
        // $username, $pass, $the_role
        // $username   = $_POST['username'];
        // $pass       = $_POST['password'];
        // $the_role   = $_POST['the_role']; 
        
        //print_r($data);
        $this->loadModel('user');
        
        $this->model->editSave($data);
        header('Location: ../' . URLROOT . '../edit');
    }
    public function delete($id) {
        $this->loadModel('user');
        $this->model->delete($id);
        header('Location: ../' . URLROOT . '../user');
    }
    //Get's the row count
    public function rowCount() {
      return $this->statement->rowCount();
    }
    public function total_records() {
      $this->loadModel('user');
      $this->model->total_records();
      
    }
    public function pagination() {
      $this->loadModel('user');
      $this->model->pagination();
    }
  
}