 // jQuery to show and hide the modal
 $(document).ready(function() {
    $(".btn").click(function() {
      $("#addProductModal").show(); // Show the modal
    });

    $(".close").click(function() {
      $("#addProductModal").hide(); // Hide the modal when close is clicked
    });

    // Close modal if clicked outside of it
    $(window).click(function(event) {
      if ($(event.target).is("#addProductModal")) {
        $("#addProductModal").hide();
      }
    });
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
});