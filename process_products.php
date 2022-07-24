<?php
session_start();

$product_name = $_POST['product_name_name'];
$price = $_POST['price_name'];

$error=false;


if (empty($product_name) ){
    
    $_SESSION["error_message"]['product_name'] = "Product is required";
    $error=true;
}
if(empty($price)){
    
    $_SESSION["error_message"]['price'] = "Price is required";
    $error=true;
}

if($error) {
header("Location: insert_product.php");
}

else {
    //Create connection
    $conn = new mysqli("localhost", "root", "", "shopp");
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $insert_product_query = "INSERT INTO tbl_product (product_name, product_price)
    VALUES ('$product_name', '$price')";
    
    if ($conn->query($insert_product_query ) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insert_product_query . "<br>" . $conn->error;
    }
    $conn->close();
         header("Location: products.php");
        echo 'not empty';
    }
?>

