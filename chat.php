<?php 
include('backend/class.php');

$db = new global_class();



$user_id=2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chatss</title>
  <link rel="stylesheet" href="css/testdashboard.css">
  <link rel="stylesheet" href="css/product.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css" integrity="sha512-MpdEaY2YQ3EokN6lCD6bnWMl5Gwk7RjBbpKLovlrH6X+DRokrPRAF3zQJl1hZUiLXfo2e9MrOt+udOnHCAmi5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  
  
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="logo">
      <a href="#" class="logoo">
        <img src="images/LIGHTlogo.png" alt="Claytek Studios Logo">
      </a>
    </div>
    <ul class="menu">
      <li><a href="#">Dashboard</a></li>
      <li ><a href="product.php">Products</a></li>
      <li><a href="index.html">Website Homepage</a></li>
      <li><a href="">Customer</a></li>
      <li><a href="#">Orders</a></li>
      <li><a href="#">Coupons</a></li>
      <li class="active"><a href="chat.php">Chats</a></li>
      <li><a href="#">Settings</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header">
      <input type="search" placeholder="Search something here">
      <div class="profile">
        <span>Administrator</span>
        <img src="images/admin.jpg" alt="Profile">
      </div>
    </div>

   





 <!-- Main Content -->
 <div class="flex-1 flex">
      <!-- Contacts List -->
      <aside class="w-72 bg-gray-200 p-4">
        <h2 class="text-lg font-bold mb-4">Contacts</h2>
        <ul class="space-y-2">

       <?php 
       include "backend/end-points/chatside.php";
       ?>
        
       
         
        </ul>
      </aside>
      

      <main class="flex-1 bg-gray-100 p-6 overflow-y-auto">
        <div class="max-w-4xl mx-auto bg-white shadow rounded-lg p-6">
          <div class="space-y-4">
            <div class="space-y-3">
                <div id="chat-content" class="space-y-4">
                <!-- Chat content will be loaded here -->
                </div>

            <div class="mt-6">
                <div class="flex items-center space-x-4">
                  <input type="text" placeholder="Type a message..." id="chat-input" class="flex-1 border border-gray-300 rounded-lg px-4 py-2">
                  <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" id="sendmeessages">Send</button>
                </div>
              </div>
            </div>
        </main>


    </div>
  </div>







  
  <script src="js/chatting.js"></script>

    

  </div>
</body>
</html>
