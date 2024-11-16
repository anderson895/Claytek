<?php 
include('backend/class.php');

$db = new global_class();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/testdashboard.css">
  <link rel="stylesheet" href="css/product.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css" integrity="sha512-MpdEaY2YQ3EokN6lCD6bnWMl5Gwk7RjBbpKLovlrH6X+DRokrPRAF3zQJl1hZUiLXfo2e9MrOt+udOnHCAmi5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
      <li class="active"><a href="#">Products</a></li>
      <li><a href="index.html">Website Homepage</a></li>
      <li><a href="">Customer</a></li>
      <li><a href="#">Orders</a></li>
      <li><a href="#">Coupons</a></li>
      <li><a href="chat.php">Chats</a></li>
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

    <!-- Dashboard Overview -->
    <div class="add-product-button">
      <button class="btn AddProductModal">Add Product</button>
    </div>

  <!-- Product Table -->
<div class="dashboard-overview">
  <div class="card">
    <table class="product-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Product</th>
          <th>Price</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php include "backend/end-points/product_list.php"; ?>
      </tbody>
    </table>
  </div>
</div>


    <!-- Modal for Add Product -->
    <div id="addProductModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Add New Product</h2>
        <br>
        <form id="frmAddProduct">
          <label for="productName">Product Name:</label>
          <input type="text" name="productName" required><br>
          <label for="productPrice">Price:</label>
          <input type="text" name="productPrice" required><br>
          <label for="productPrice">Image:</label>
          <input type="file" name="productImage" required><br>
          <button type="submit">Add Product</button>
        </form>
      </div>
    </div>



    <div id="updateProductModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Update Product</h2>
        <br>
        <form id="frmUpdateProduct">

          <input type="hidden" id="productId" name="productId" required><br>


          <label for="productName">Product Name:</label>
          <input type="text" id="productName" name="productName" required><br>


          <label for="productPrice">Price:</label>
          <input type="text" id="productPrice" name="productPrice" required><br>


          <label for="productImage">Image:</label>
          <input type="file"  id="productImage" name="productImage"><br>
          <button type="submit">Update Product</button>
        </form>
      </div>
    </div>

  </div>

  <script src="js/app.js"></script>
</body>
</html>
