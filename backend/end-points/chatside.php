<?php 
        $fetch_all_user = $db->fetch_all_user($user_id); 
        foreach ($fetch_all_user as $user):
        ?>
        <a href='chat.php?sender_id=<?=$user['user_id']?>'>
        <li class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-300 cursor-pointer">
            <img src="user_upload/<?=$user['user_img']?>" alt="User" class="h-10 w-10 rounded-full">
            <span class="font-medium"><?=$user['user_fullname']?></span>
          </li>
        </a>
        <?php endforeach; ?>
