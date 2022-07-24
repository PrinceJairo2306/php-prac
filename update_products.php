<?php

$product_name = $_POST['product_name'];
$price = $_POST['price'];


    // Create connection
    $conn = new mysqli("localhost", "root", "", "shopp");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $update_customer_query = "UPDATE tbl_product SET product_name='$product_name', product_price='$price'
    WHERE id=" . $_GET['id'];


    if ($conn->query($update_customer_query) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    header("Location: products.php");
    $conn->close();

?>