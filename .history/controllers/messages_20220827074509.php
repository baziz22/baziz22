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
      $this->view->render('pages/messages');
  }