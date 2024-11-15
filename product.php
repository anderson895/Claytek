<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/testdashboard.css">
  <link rel="stylesheet" href="css/product.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add jQuery -->
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
      <li><a href="#">Chats</a></li>
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
      <button class="btn">Add Product</button>
    </div>

    <!-- Product Table -->
    <div class="dashboard-overview">
      <div class="card">
        <table>
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
            <tr>
              <td></td>
              <td></td>
              
              <td></td>
              <td></td>
              <td></td>
            </tr>
            
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
          <input type="text" id="productName" name="productName" required><br>
          <label for="productPrice">Price:</label>
          <input type="text" id="productPrice" name="productPrice" required><br>
          <label for="productPrice">Image:</label>
          <input type="file" id="productImage" name="productImage" required><br>
          <button type="submit">Add Product</button>
        </form>
      </div>
    </div>
  </div>

  <script src="js/app.js"></script>
</body>
</html>
