<?php
include ('db.php');
date_default_timezone_set('Asia/Manila');

class global_class extends db_connect
{
    public function __construct()
    {
        $this->connect();
    }


    public function insert_product(){
        $query = $this->conn->prepare("");

        if ($query->execute()) {
            $result = $query->get_result();
            return $result;
        }
    }


    
}
