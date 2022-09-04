<?php

class Register_Model extends Model{
    function __construct() {
        echo "التسجيل للجاتا بيس";
        // عقم لكي لا يسيؤا أستخدامة
        echo "THis is : ", $this;
        parent::__construct();
        // sanatize the  so they can't abuse it.
        echo "THis is : ", $this;
    }
    
}

