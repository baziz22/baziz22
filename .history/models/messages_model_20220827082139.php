<?php

class Messages_Model extends Model{
    function __construct() {
        //echo "messages Model";
        parent::__construct();
        // sanatize the  so they can't abuse it.
    }
    public function messages_list() {
        $sql = "SELECT * FROM contact_us";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    public function total_records(){
      $query = "SELECT * FROM contact_us";
      $stmt = $this->db->connect()->prepare($query);
      $stmt->execute();
      $data = $stmt->rowCount();
      return $data;
    }
    public function pagination($start_from, $per_page_record){
      $query = "SELECT * FROM contact_us LIMIT $start_from, $per_page_record";
      $stmt = $this->db->connect()->prepare($query);
      $stmt->execute();
      $data = $stmt->rowCount();
      return $data;
    }
}