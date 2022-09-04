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
        $this->loadModel('user');
        //$this->model->userList();
        //$this->view->userList = $this->model->userList();
        $this->view->render('users/user');
    }
    public function checkUser($username) {
        $username['sercuser_name'] = $_POST['username'];
        $this->loadModel('register');
        $this->model->is_username_available($username);
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
        // Fetch individual user
        $this->loadModel('user');
        //$this->model->userSingleList($id);
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render('users/edit');
        //$this->model->edit($id);
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
        header('Location: ../' . URLROOT . '../user');
    }
    public function delete($id) {
        $this->loadModel('user');
        $this->model->delete($id);
        header('Location: ../' . URLROOT . '../user');
    }
}