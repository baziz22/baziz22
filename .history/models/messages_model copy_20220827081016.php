<?php

class Messages_Model extends Model{
    function __construct() {
        //echo "messages Model";
        parent::__construct();
        // sanatize the  so they can't abuse it.
    }
    public function messages_List() {
        $sql = "SELECT * FROM contact_us";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
}