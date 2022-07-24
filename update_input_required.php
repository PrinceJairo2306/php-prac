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


$select_query = "SELECT id, first_name, last_name, email FROM tbl_registration WHERE id=" . $_GET['id'] ;
$result = $conn->query($select_query);


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>
<body>
<?php
                // LOOP TILL END OF DATA
                $rows=$result->fetch_assoc()
                
            ?>
    <form action="update.php?id=<?php echo $rows['id'];?>" method="post">
        <label for="first_name_id">
            First Name:
        </label>
        <input type="text" name="first_name_name" id="first_name_id" value="<?php echo $rows['first_name'];?>">
        <label for="last_name_id">
            Last Name:
        </label>
        <input type="text" name="last_name_name" id="last_name_id" value="<?php echo $rows['last_name'];?>">
        <label for="birth_date_id">
             Email
        </label>
        <input type="text" name="email_name" id="email_id" value="<?php echo $rows['email'];?>">
        <input type="submit" value="Update">
    </form>
</body>
</html>
