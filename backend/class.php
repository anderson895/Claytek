<?php
include ('db.php');
date_default_timezone_set('Asia/Manila');

class global_class extends db_connect
{
    public function __construct()
    {
        $this->connect();
    }



    public function update_product($productId, $productName, $productPrice, $image) {
        // Simple query without bind_param(), directly injecting the values
        $query = "UPDATE `product` SET `prod_name` = '$productName', `prod_price` = '$productPrice', `prod_img` = '$image' WHERE `prod_id` = $productId";
    
        // Execute the query
        if ($this->conn->query($query)) {
            return "success"; 
        } else {
            return "error"; 
        }
    }
    


    public function get_product_by_id($productId) {
        // Simple query without bind_param(), directly injecting the product ID
        $query = "SELECT `prod_name`, `prod_price`, `prod_img` FROM `product` WHERE `prod_id` = $productId";
    
        // Execute the query
        $result = $this->conn->query($query);
    
        // Check if a product was found
        if ($result->num_rows > 0) {
            // Fetch the product details as an associative array
            $product = $result->fetch_assoc();
            return $product; // Return the product details
        } else {
            return null; // Return null if no product was found
        }
    }
    
        public function delete_product($prodId) {
            $sql = "DELETE FROM product WHERE prod_id = $prodId";
            return $this->conn->query($sql);
        }



        public function fetch_all_user($reciever) {
            $sql = "SELECT * FROM `user` where user_id!='$reciever'";
            return $this->conn->query($sql);
        }

        public function fetch_chat_messages($m_reciever, $sender_id) {
            // Updated query with correct column names
            $sql = "SELECT 
                        message.*,
                        reciever_details.user_img AS reciever_img,
                        sender_details.user_img AS sender_img,
                        reciever_details.user_fullname AS reciever_name,   -- Changed from 'user_name' to 'user_fullname'
                        sender_details.user_fullname AS sender_name       -- Changed from 'user_name' to 'user_fullname'
                    FROM `message`
                    LEFT JOIN `user` AS reciever_details
                        ON reciever_details.user_id = message.m_reciever
                    LEFT JOIN `user` AS sender_details
                        ON sender_details.user_id = message.m_sender
                    WHERE message.m_reciever = $m_reciever AND message.m_sender = $sender_id || message.m_reciever = $sender_id AND message.m_sender = $m_reciever";
            
            // Execute the query and return the result
            return $this->conn->query($sql);
        }
        
        
        public function send_message($senderID,$senderId, $message){
            $query = $this->conn->prepare("INSERT INTO `message` (`m_sender`, `m_content`, `m_reciever`) VALUES ('$senderID', '$message', '$senderId')");
    
            if ($query->execute()) {
                $result = $query->get_result();
                return "success";
            }
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
