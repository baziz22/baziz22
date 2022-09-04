<?php
class Pagination extends Controller{
  function __construct() {
      parent::__construct();
  }
  function index() {
      $this->view->render('pages/includes/pagination');
  }
}