<?php 
include('../../backend/class.php');
$db = new global_class();
$user_id=2;
$senderID=$user_id;
$recieverID=$_POST['senderId'];
$message = $_POST['message'];

if (!empty($message)) {
    // Save the message in the database (update your `global_class` as needed)
    $result = $db->send_message($senderID,$recieverID, $message);
    echo 'success';
} else {
    echo 'Message is empty';
}
?>
