<?php 
$fetch_all_product = $db->fetch_all_product(); 
foreach ($fetch_all_product as $product):
?>

<tr id="product-row-<?= $product['prod_id'] ?>">
  <td><?= $product['prod_id'] ?></td>
  <td><?= $product['prod_name'] ?></td>
  <td><?= $product['prod_price'] ?></td>
  <td><img src='product_upload/<?= $product['prod_img'] ?>' style="width: 100px; height: auto;"></td>
  <td>
    <!-- Edit Button -->
    <button class="btn-secondary UpdateProductModal"
      data-prod_id="<?= $product['prod_id'] ?>"
      data-prod_price="<?= $product['prod_price'] ?>"
      data-prod_name="<?= $product['prod_name'] ?>"
    >Edit</button>
    
    <!-- Delete Button -->
    <button class="btn-danger DeleteProductButton" 
      data-prod_id="<?= $product['prod_id'] ?>"
      data-prod_img="<?= $product['prod_img'] ?>"
      style="background-color:red; color: white;">
      Delete
    </button>
  </td>
</tr>

<?php endforeach; ?>
