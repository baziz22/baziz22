<?php

class Model{
    function __construct() {
        $this->db = new Database();
        parent::__construct();
    }
    
}