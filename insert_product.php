<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>


    <h2>
        Create Product
    </h2>
    <form action="process_products.php" method="post">

    <div><?php
        if (isset($_SESSION["error_message"]['product_name'])) {
            echo '<div>' . $_SESSION["error_message"]['product_name'] . '</div>';
        }?>
        <label for="product_name_id">
            Product Name:
        </label>
        <input type="text" name="product_name_name" id="product_name_id">
    </div>
    <div><?php 
        if (isset($_SESSION["error_message"]['price'])) {
            echo  '<div>'.$_SESSION["error_message"]['price'] .'</div>';
        }?>
        <label for="price_id">
            Price
        </label>
        <input type="text" name="price_name"  id="price_id">
    </div>
    <br>
        <input type="submit" value="CREATE">
    </form>

<?php
   if(isset($_SESSION["error_message"])){
    // if (isset($_SESSION["error_message"]['fname'])) {
    //     echo($_SESSION["error_message"]['fname']);
    // }

    // if (isset($_SESSION["error_message"]['lname'])) {
    //     echo($_SESSION["error_message"]['lname']);
    // }
    // if (isset($_SESSION["error_message"]['email'])) {
    //     echo($_SESSION["error_message"]['email']);
    // }
    
   }
    //session_unset();
    if(isset($_SESSION["error_message"])){
    unset($_SESSION["error_message"]);
    }
?>
</body>
</html>
