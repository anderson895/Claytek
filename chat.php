<?php 
include('backend/class.php');

$db = new global_class();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat</title>
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
          <li class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-300 cursor-pointer">
            <img src="images/user1.jpg" alt="User" class="h-10 w-10 rounded-full">
            <span class="font-medium">John Doe</span>
          </li>
         
        </ul>
      </aside>

      <!-- Chat Area -->
      <main class="flex-1 bg-gray-100 p-6 overflow-y-auto">
        <div class="max-w-4xl mx-auto bg-white shadow rounded-lg p-6">
          <div class="space-y-4">
            <!-- Chat Messages -->
            <div class="space-y-3">
              <!-- Example Message -->
              <div class="flex space-x-4 items-start">
                <img src="images/admin.jpg" alt="User" class="h-10 w-10 rounded-full">
                <div class="bg-gray-200 rounded-lg p-3">
                  <p class="text-sm">Hi, how can I assist you today?</p>
                </div>
              </div>
              <div class="flex space-x-4 items-start flex-row-reverse">
                <img src="images/admin.jpg" alt="User" class="h-10 w-10 rounded-full">
                <div class="bg-blue-500 text-white rounded-lg p-3">
                  <p class="text-sm">I need help with my order.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Chat Input -->
          <div class="mt-6">
            <div class="flex items-center space-x-4">
              <input type="text" placeholder="Type a message..." class="flex-1 border border-gray-300 rounded-lg px-4 py-2">
              <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Send</button>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>







    

  </div>

  <script src="js/app.js"></script>
</body>
</html>
