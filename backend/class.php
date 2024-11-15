<?php
include ('db.php');
date_default_timezone_set('Asia/Manila');

class global_class extends db_connect
{
    public function __construct()
    {
        $this->connect();
    }


    public function insert_product($productName,$productPrice,$image){
        $query = $this->conn->prepare("INSERT INTO `product` (`prod_name`, `prod_price`, `prod_img`) VALUES ('$productName', '$productPrice', '$image')");

        if ($query->execute()) {
            $result = $query->get_result();
            return "success";
        }
    }
    public function fetch_all_product()
    {
        $query = $this->conn->prepare("select * from product where prod_staus='1'");

        if ($query->execute()) {
            $result = $query->get_result();
            return $result;
        }
    }


}
