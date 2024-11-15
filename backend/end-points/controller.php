<?php
include('../class.php');

$db = new global_class();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['requestType'] == 'AddProduct') {

        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];

        // Handle the file upload
        if (isset($_FILES['productImage']) && $_FILES['productImage']['error'] === UPLOAD_ERR_OK) {
            $targetDir = '../../product_upload/'; // Directory to store the uploaded file
            $fileName = uniqid('product_', true) . '.' . strtolower(pathinfo($_FILES['productImage']['name'], PATHINFO_EXTENSION)); // Generate a unique file name
            $targetFile = $targetDir . $fileName;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if the file is an image (optional)
            $check = getimagesize($_FILES['productImage']['tmp_name']);
            if ($check !== false) {
                
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }

            // Check if file size (optional)
            if ($_FILES['productImage']['size'] > 500000) { // Adjust the size limit as needed
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats (optional)
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES['productImage']['tmp_name'], $targetFile)) {
                  
                    $filename = $fileName; // Save the unique filename to the database
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    $filename = ''; // Set filename to empty if upload failed
                }
            }
        } else {
            echo "No file was uploaded.";
            $filename = ''; // Set filename to empty if no file was uploaded
        }

        // Insert product information into the database
        $user = $db->insert_product($productName, $productPrice, $filename);

        // Check if the product was successfully added
        if ($user === 'success') {
            echo 200;  // Success response
        } else {
            echo 'Failed to update product in the database.';
        }
    } else {
        echo 'Invalid request type.';
    }
}
?>
