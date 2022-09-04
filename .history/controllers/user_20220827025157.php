<?php

class User extends Controller{
    function __construct(){
        parent::__construct();
        //$this->view = new View();
        //$this->user = new user();
        //Session::init();
        $this->loadModel('user');
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
        //$id = $_SESSION['user_id'];
        
        //$this->view->singleUser = $this->model->userSingleList($id);
        //print_r($this->view);
        //$this->view->userList = $this->model->userList();
        //$this->view->total_records = $this->model->total_records();
        //$this->view->paginate = $this->model->pagination(0,4);
        //$this->view->paginate = $this->model->pagination($start_from = false, $per_page_record = false);
        $this->view->render('users/user');
        //$this->model->edit($id);
    }
  
}