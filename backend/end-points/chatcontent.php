<?php 
include('../../backend/class.php');
$db = new global_class();
$user_id=2;

$sender_id=$_GET['sender_id'];

$fetch_message = $db->fetch_chat_messages($user_id,$sender_id); 
foreach ($fetch_message as $message):
        
        if($user_id == $message['m_reciever']){
        ?>
              <div class="flex space-x-4 items-start">
                <img src="user_upload/<?=$message['sender_img']?>" alt="User" class="h-10 w-10 rounded-full">
                <div class="bg-gray-200 rounded-lg p-3">
                  <p class="text-sm"><?=$message['m_content']?></p>
                </div>
              </div>
         <?php }else if($user_id == $message['m_sender']){ ?> 
     
              <div class="flex space-x-4 items-start flex-row-reverse">
                <img src="user_upload/<?=$message['sender_img']?>" alt="User" class="h-10 w-10 rounded-full">
                <div class="bg-blue-500 text-white rounded-lg p-3">
                    <p class="text-sm"><?=$message['m_content']?></p>
                </div>
              </div>
            </div>
          </div>
<?php } endforeach; ?>

         