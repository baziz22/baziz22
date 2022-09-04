<?php

class Help_Model extends Model{
    function __construct() {
        echo "Help Model <br>";
    }
    public function blah() {
        echo 20 + 10;
    }
    public static function create($password) {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    }
    public static function check($password, $hash) {
        return password_verify($password, $hash);
    }
}

