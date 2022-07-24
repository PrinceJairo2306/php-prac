<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "registration";

// Create connection
$conn = new mysqli("localhost", "root", "", "shopp");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$select_query = "SELECT id, product_name, product_price FROM tbl_product WHERE id=" . $_GET['id'] ;
$result = $conn->query($select_query);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    
</head>
<body>
<?php
    // LOOP TILL END OF DATA
    $rows=$result->fetch_assoc()        
            ?>
    <div class="home_container">
    <form action="update_products.php?id=<?php echo $rows['id'];?>" method="post">
        <label for="product_name_id">
            Product:
        </label>
        <input type="text" name="product_name"  id="product_name_id" value="<?php echo $rows['product_name'];?>">
        <label for="price">
            Price:
        </label>
        <input type="text" name="price"  id="price" value="<?php echo $rows['product_price'];?>">
        <input type="submit" value="Update">
    </form>
    </div>
</body>
</html>
