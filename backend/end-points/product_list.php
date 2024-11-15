<?php 

$fetch_all_product = $db->fetch_all_product(); 

foreach ($fetch_all_product as $product):

?>

<tr>
  <td><?= $product['prod_name']?></td>
  <td><?= $product['prod_price']?></td>
  <td><?= $product['prod_name']?></td>
  <td><img src='product_upload/<?= $product['prod_img']?>' style="width: 100px; height: auto;"></td>
  <td><Button class="btn-secondary">Update</Button> <Button style="background-color:red;">Delete</Button></td>
</tr>

<?php endforeach; ?>
