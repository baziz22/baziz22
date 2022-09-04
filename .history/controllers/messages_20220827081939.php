<?php
class Messages extends Controller{
  function __construct(){
      parent::__construct();
      //Session::init();
      $logged = Session::get('loggedIn');
      if($logged == false) {
          Session::destroy();
          header('Location:' . URLROOT .'login');
          exit;
      }
      //pre_r($_SESSION);
      // Set javascript
      //$this->view->js = array('admin/js/default.js');
  }
  public function index() {
      $this->view->render('users/messages');
  }
  public function list_messages(){
    $this->loadModel('messages');
    return $this->model->messages_list();
  }
  public function total_records() {
    return $this->model->total_records();
  }
  public function pagination($start_from, $per_page_record) {
    return $this->model->pagination($start_from, $per_page_record);
  }
}