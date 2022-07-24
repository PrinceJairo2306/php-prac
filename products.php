<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="welcome-container">
            <h2>Welcome <?php echo $_SESSION['first_name'];?> !</h2>
            <button class="logout"><a href="logout.php">LOGOUT</a></button>
        </div>
        <button><a href="insert_product.php">Create Product</a></button>
        <br>
        <table class="table">
            <tr>
                <th class="product-header product-name" style="width: 10px;">Product Name</th>
                <th class="product-header price">Price</th>
                <th class="product-header action">Action</th>
            </tr>
        </table>
    
    </div>
  
</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "shopp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 $select_customer_querry = "SELECT * FROM tbl_product";
 $result = $conn->query($select_customer_querry);
 $conn->close();
     
?>
 <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc()){
                    ?>
                    <table>
                         <tr>
                <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                         <td class="td-pn"><?php echo $rows['product_name'];?></td>
                         <td class="td-pr"><?php echo $rows['product_price'];?></td>
                         <td >
                            <a href="edit_products.php?id=<?php echo $rows['id']; ?>">Update</a>
                            <a href="delete_products.php?id=<?php echo $rows['id']; ?>">Delete</a>
                        </td>
                        </tr>
                    </table>
                    <?php
                }
?>


