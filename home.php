

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylehome.css" type="text/css">

</head>
<body>
    <h2>Registration</h2> 
    <table>
        <tr>
            <th class="table-data first-name">First Name</th>
            <th class="table-data last-name">Last Name</th>
            <th class="table-data email">Email</th>
            <th class="table-data action">Action</th>
        </tr>


    <?php
        $conn = new mysqli("localhost", "root", "", "shopp");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $select_customer_querry = "SELECT * FROM tbl_registration";
        $result = $conn->query($select_customer_querry);
        $conn->close(); 
        ?>
    <?php // LOOP TILL END OF DATA
    while($rows=$result->fetch_assoc())
                {?>
        <table >
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td class="product-table-data"><?php echo $rows['first_name'];?></td>
                <td class="product-table-data"><?php echo $rows['last_name'];?></td>
                <td class="product-table-data"><?php echo $rows['email'];?></td>
                <td class="product-table-data">
                    <a href="edit_data.php?id=<?php echo $rows['id']; ?>">Edit</a>
                    <a href="delete_data.php?id=<?php echo $rows['id']; ?>">Delete</a>
                </td>
            </tr>
        </table>   
        </div>  
<?php
                }
?>
</table>
    <br>
    <button><a  href="register.php">Register</a></button>
</body>
</html>