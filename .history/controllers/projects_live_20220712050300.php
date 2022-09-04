<?php
class Projects_live extends Controller{
    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->view->render('pages/projects_live');
    }
}