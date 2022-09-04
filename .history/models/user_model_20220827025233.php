<?php

class User_Model extends Model{
    function __construct() {
        //echo 222;
        parent::__construct();
        // sanatize the  so they can't abuse it.
    }
}