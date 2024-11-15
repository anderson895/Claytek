 // jQuery to show and hide the modal
 $(document).ready(function() {
    $(".AddProductModal").click(function() {
      $("#addProductModal").show(); // Show the modal
    });

    $(".close").click(function() {
      $("#addProductModal").hide(); // Hide the modal when close is clicked
    });







    $(".UpdateProductModal").click(function() {

       
       $('#productId').val($(this).attr('data-prod_id'))
       $('#productName').val($(this).attr('data-prod_name'))
       $('#productPrice').val($(this).attr('data-prod_price'))

        $("#updateProductModal").show(); // Show the modal
      });
  
      $(".close").click(function() {
        $("#updateProductModal").hide(); // Hide the modal when close is clicked
      });



    // Close modal if clicked outside of it
    $(window).click(function(event) {
      if ($(event.target).is("#addProductModal")) {
        $("#addProductModal").hide();
      }
    });
  });




 $(".DeleteProductButton").click(function() {
    const prodId = $(this).data('prod_id');
    const prodImg = $(this).data('prod_img');

    if (confirm('Are you sure you want to delete this product?')) {
        $.ajax({
            url: "backend/end-points/controller.php",
            type: 'POST',
            data: {
                requestType: 'DeleteProduct',
                prodId: prodId,
                prodImg: prodImg
            },
            success: function (response) {
                if (response.trim() == '200') {
                    alert('Product deleted successfully!');
                    $(`#product-row-${prodId}`).remove(); // Remove the row from the table
                } else {
                    alert('Failed to delete product: ' + response);
                }
            },
            error: function () {
                alert('An error occurred while deleting the product.');
            }
        });
    }
});




$(document).ready(function() {
    $('#frmAddProduct').on('submit', function(e) {
        e.preventDefault();
       

        // Create a new FormData object
        var formData = new FormData(this);
        formData.append('requestType', 'AddProduct'); 

        // Perform the AJAX request
        $.ajax({
            type: "POST",
            url: "backend/end-points/controller.php",
            data: formData,
            contentType: false,
            processData: false, 
            success: function(response) {
              console.log(response)
                if(response==200){
                  $('#addProductModal').hide();
                  location.reload();
                }
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });
    // 

    $('#frmUpdateProduct').on('submit', function(e) {
        e.preventDefault();
       

        // Create a new FormData object
        var formData = new FormData(this);
        formData.append('requestType', 'UpdateProduct'); 

        // Perform the AJAX request
        $.ajax({
            type: "POST",
            url: "backend/end-points/controller.php",
            data: formData,
            contentType: false,
            processData: false, 
            success: function(response) {
              console.log(response)
                if(response==200){
                  $('#updateProductModal').hide();
                  location.reload();
                }
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });
});