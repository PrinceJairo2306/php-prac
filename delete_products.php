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

// sql to delete a record
$sql = "DELETE FROM tbl_product WHERE id=" . $_GET['id'] ;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: products.php");
?>